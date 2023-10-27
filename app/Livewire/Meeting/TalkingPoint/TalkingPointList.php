<?php

namespace App\Livewire\Meeting\TalkingPoint;

use App\Models\Meeting;
use App\Models\TalkingPoint;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class TalkingPointList extends Component
{
    public string $newTalkingPoint;

    protected array $rules = [
        'newTalkingPoint' => 'required|string',
    ];

    public Meeting $meeting;

    public function mount(Meeting $meeting): void
    {
        $this->meeting = $meeting;
    }

    public function render(): View
    {
        return view('livewire.meeting.talking-point.talking-point-list')->with([
            'talkingPoints' => $this->getOrderedTalkingPoints(),
        ]);
    }

    public function postTalkingPoint(): void
    {
        $this->validate();
        $lastOrder = $this->getOrderedTalkingPoints()->last()->order_column ?? 0;
        TalkingPoint::create([
            'meeting_id' => $this->meeting->id,
            'description' => $this->newTalkingPoint,
            'created_by' => auth()->id(),
            'order_column' => $lastOrder + 1,
        ]);
        $this->newTalkingPoint = '';
        $this->refreshTalkingPoints();
    }

    protected function getOrderedTalkingPoints(): Collection
    {
        return $this->meeting
            ->talkingPoints()
            ->orderBy('order_column')
            ->get();
    }

    #[On('delete-talking-point')]
    public function deleteTalkingPoint(int $talkingPointId): void
    {
        TalkingPoint::find($talkingPointId)->delete();
    }

    #[On('talking-point-added')]
    public function refreshTalkingPoints(): void
    {
        $this->meeting->refresh();
    }
}
