<?php

namespace App\Livewire\Action;

use App\Livewire\Forms\ActionItemForm;
use App\Models\ActionItem;
use App\Models\Meeting;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class ActionItemCreate extends Component
{
    public ActionItemForm $form;

    public Meeting $meeting;

    public function mount(Meeting $meeting): void
    {
        $this->meeting = $meeting;
        $this->form->responsable_id = auth()->id();
    }

    public function render(): View
    {
        return view('livewire.action.action-item-create')->with([
            'responsables' => User::select('id', 'name')->get()->pluck('name', 'id')
        ]);
    }

    public function submit(): void
    {
        $lastOrder = $this->meeting->actionItems->last()->order ?? 0;
        $actionItem = ActionItem::create([
            'title' => $this->form->title,
            'description' => $this->form->description,
            'responsable_id' => $this->form->responsable_id ?? auth()->id(),
            'due_date' => $this->form->due_date,
        ]);
        $this->meeting->actionItems()->attach(
            $actionItem, [
                'order' => $lastOrder + 1,
                'is_original' => true,
            ]
        );

        $this->form->reset();
        $this->dispatch('action-item-added');
    }

    public function cancel(): void
    {
        $this->form->reset();
    }
}
