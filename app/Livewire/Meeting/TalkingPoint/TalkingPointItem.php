<?php

namespace App\Livewire\Meeting\TalkingPoint;

use App\Models\TalkingPoint;
use Illuminate\View\View;
use Livewire\Component;

class TalkingPointItem extends Component
{
    public TalkingPoint $talkingPoint;

    public bool $talkingPointIsChecked = false;

    public bool $openEditForm = false;

    public string $description = '';

    public function mount(TalkingPoint $talkingPoint): void
    {
        $this->talkingPoint = $talkingPoint;
        $this->description = $talkingPoint->description;
        $this->talkingPointIsChecked = $talkingPoint->is_checked;
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

    public function toggleTalkingPointIsChecked(): void
    {
        $this->talkingPoint->is_checked = $this->talkingPointIsChecked;
        $this->talkingPoint->save();
    }

    public function cancelEditTalkingPoint(): void
    {
        $this->openEditForm = false;
        $this->description = $this->talkingPoint->description;
    }
}
