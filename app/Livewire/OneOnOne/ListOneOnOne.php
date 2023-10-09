<?php

namespace App\Livewire\OneOnOne;

use App\Repositories\OneOnOneRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListOneOnOne extends Component
{
    public string $title = 'One on One';
    private OneOnOneRepository $oneOnOneRepository;

    public function boot(OneOnOneRepository $oneOnOneRepository): void
    {
        $this->oneOnOneRepository = $oneOnOneRepository;
    }

    public function render(): View
    {
        return view('livewire.one-on-one.list-one-on-one')
            ->title($this->title)
            ->with([
                'managers' => $this->getParticipantsInfo(Auth::user()->managers),
            ]);
    }

    protected function getParticipantsInfo(Collection $users): Collection
    {
        // add the last one on one date to the manager info
        return $users->map(function ($user) {
            $previousOneOnOne = $this->oneOnOneRepository->getPreviousOneOnOne(
                collect([Auth::user(), $user])
            );
            return [
                'user' => $user,
                'previousOneOnOne' => $previousOneOnOne,
            ];
        });
    }

}
