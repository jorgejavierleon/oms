<?php

namespace App\Livewire\Meeting\TalkingPoint;

use App\Models\Meeting;
use App\Models\TalkingPoint;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class TalkingPointList extends Component
{
    public Meeting $meeting;

    public string $newTalkingPoint;

    protected array $rules = [
        'newTalkingPoint' => 'required|string',
    ];

    public function render(): View
    {
        return view('livewire.meeting.talking-point.talking-point-list');
    }

    public function postTalkingPoint(): void
    {
        $this->validate();
        $lastOrder = $this->meeting->talkingPoints->last()->order_column ?? 0;
        TalkingPoint::create([
            'meeting_id' => $this->meeting->id,
            'description' => $this->newTalkingPoint,
            'created_by' => auth()->id(),
            'order_column' => $lastOrder + 1,
        ]);
        $this->newTalkingPoint = '';
        $this->meeting->refresh();
    }

    #[On('delete-talking-point')]
    public function deleteTalkingPoint(int $talkingPointId): void
    {
        TalkingPoint::find($talkingPointId)->delete();
    }
}
