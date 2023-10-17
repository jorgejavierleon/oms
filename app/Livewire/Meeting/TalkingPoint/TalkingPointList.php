<?php

namespace App\Livewire\Meeting\TalkingPoint;

use App\Models\Meeting;
use Illuminate\View\View;
use Livewire\Component;

class TalkingPointList extends Component
{
    public Meeting $meeting;

    public function render(): View
    {
        return view('livewire.meeting.talking-point.talking-point-list');
    }
}
