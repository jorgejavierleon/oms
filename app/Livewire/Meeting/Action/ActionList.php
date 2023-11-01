<?php

namespace App\Livewire\Meeting\Action;

use App\Models\Meeting;
use Illuminate\View\View;
use Livewire\Component;

class ActionList extends Component
{
    public Meeting $meeting;

    public function mount(Meeting $meeting): void
    {
        $this->meeting = $meeting;
    }

    public function render(): View
    {
        return view('livewire.meeting.action.action-list')->with([
            'actionItems' => $this->meeting->actionItems,
        ]);
    }
}
