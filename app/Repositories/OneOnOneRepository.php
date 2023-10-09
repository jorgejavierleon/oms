<?php

namespace App\Repositories;

use App\Models\Meeting;
use App\Models\User;
use Illuminate\Support\Collection;

class OneOnOneRepository
{
    public function getCurrentOneOnOne(Collection $participants): ?Meeting
    {
        $participantsIds = $participants->pluck('id');
        return Meeting::oneOnOne()
            ->whereNull('completed_at')
            ->whereHas(
                'participants',
                function ($query) use ($participantsIds) {
                    $query->whereIn('user_id', $participantsIds);
                }, '=', count($participants))
            ->first();
    }

    public function getPreviousOneOnOne(Collection $participants): ?Meeting
    {
        $participantsIds = $participants->pluck('id');
        return Meeting::oneOnOne()->completed()
            ->whereHas(
                'participants',
                function ($query) use ($participantsIds) {
                    $query->whereIn('user_id', $participantsIds);
                }, '=', count($participants))
            ->orderBy('completed_at', 'desc')
            ->first();
    }

    public function getCompletedWithUsers(User $authUser, Collection $participants): Collection
    {
        return $this->getWithUsers($authUser, $participants, 'completed');
    }

    public function getWithUsers(User $authUser, Collection $participants, string $filter = ''): Collection
    {
        // get all one on one meetings for the auth user
        $authUserOneOnOnes = Meeting::oneOnOne()
            ->when($filter == 'completed', function ($query) {
                $query->completed();
            })
            ->when($filter == 'pending', function ($query) {
                $query->pending();
            })
            ->whereHas(
                'participants',
                function ($query) use ($authUser) {
                    $query->where('user_id', $authUser->id);
                })
            ->orderBy('completed_at', 'desc')
            ->get();
        // filter the meetings to only include the ones that have the participants
        return $authUserOneOnOnes->filter(function ($meeting) use ($participants) {
            return $meeting->participants->pluck('id')
                    ->intersect($participants->pluck('id'))
                    ->count() === 1;
        });
    }

    public function firstOrCreate(User $organizer, User $interviewee): Meeting
    {
        $participants = collect([$organizer, $interviewee]);
        $existingOneOnOne = $this->getCurrentOneOnOne($participants);
        if ($existingOneOnOne) {
            return $existingOneOnOne;
        }
        return $this->createOneOnOne($organizer, $interviewee);
    }

    public function createOneOnOne(User $organizer, User $interviewee): Meeting
    {
        $title = $interviewee->name . ' - ' . $organizer->name;
        $newOneOnOne = Meeting::create([
            'meeting_type' => Meeting::ONE_ON_ONE_TYPE,
            'title' => $title,
            'completed_at' => null,
        ]);
        $newOneOnOne->participants()->attach([
            $organizer->id => ['is_organizer' => true],
            $interviewee->id => ['is_organizer' => false],
        ]);
        return $newOneOnOne;
    }

    /**
     * Pending with non-manager and non-direct-reports team members
     */
    public function getPendingWithMembers(User $authUser): Collection
    {
        $participants = User::where('id', '<>', $authUser->id)
            ->whereNotIn('id', $authUser->directReports->pluck('id'))
            ->whereNotIn('id', $authUser->managers->pluck('id'))
            ->get();
        return $this->getWithUsers($authUser, $participants, 'pending');
    }
}
