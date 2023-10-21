<?php

namespace App\Livewire\Meeting\TalkingPoint;

use App\Models\TalkingPoint;
use Illuminate\View\View;
use Livewire\Component;

class TalkingPointItem extends Component
{
    public TalkingPoint $talkingPoint;

    public bool $openEditForm = false;

    public string $description = '';

    public function mount(TalkingPoint $talkingPoint): void
    {
        $this->talkingPoint = $talkingPoint;
        $this->description = $talkingPoint->description;
    }

    public function render(): View
    {
        return view('livewire.meeting.talking-point.talking-point-item');
    }

    public function editTalkingPoint(): void
    {
        $this->talkingPoint->description = $this->description;
        $this->talkingPoint->save();
        $this->openEditForm = false;
    }

    public function cancelEditTalkingPoint(): void
    {
        $this->openEditForm = false;
        $this->description = $this->talkingPoint->description;
    }
}
