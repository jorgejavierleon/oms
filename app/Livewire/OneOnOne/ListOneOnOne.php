<?php

namespace App\Livewire\OneOnOne;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ListOneOnOne extends Component
{
    public string $title = 'One on One';

    public function render(): View
    {
        return view('livewire.one-on-one.list-one-on-one')->title($this->title);
    }
}
