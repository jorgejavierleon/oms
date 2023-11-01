<?php

namespace App\Livewire\Action;

use App\Livewire\Forms\ActionItemForm;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class ActionItemCreate extends Component
{
    public ActionItemForm $form;

    public function render(): View
    {
        return view('livewire.action.action-item-create')->with([
            'responsables' => User::select('id', 'name')->get()->pluck('name', 'id')
        ]);
    }

    public function submit(): void
    {
        $this->form->store();
        $this->form->reset();
        $this->dispatch('action-item-created');
    }

    public function cancel(): void
    {
        $this->form->reset();
    }
}
