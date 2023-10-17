<?php

namespace App\Livewire\Meeting\TalkingPoint;

use App\Models\TalkingPoint;
use Illuminate\View\View;
use Livewire\Component;

class TalkingPointItem extends Component
{
    public TalkingPoint $talkingPoint;

    public function render(): View
    {
        return view('livewire.meeting.talking-point.talking-point-item');
    }
}
