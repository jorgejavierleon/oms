<?php

namespace App\Livewire\OneOnOne;

use App\Models\Meeting;
use Illuminate\View\View;
use Livewire\Component;

class OneOnOneEdit extends Component
{
    public Meeting $oneOnOne;

    public function render(): View
    {
        return view('livewire.one-on-one.one-on-one-edit');
    }
}
