<?php

namespace App\Livewire\Action;

use App\Livewire\Forms\ActionItemForm;
use App\Models\ActionItem;
use App\Models\Meeting;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class ActionItemUpsert extends Component
{
    public ActionItemForm $form;

    public Meeting $meeting;

    public bool $isEdit = false;

    public ?ActionItem $actionItem;

    public function mount(Meeting $meeting): void
    {
        $this->meeting = $meeting;
    }

    public function render(): View
    {
        return view('livewire.action.action-item-upsert')->with([
            'responsables' => User::select('id', 'name')->get()->pluck('name', 'id')
        ]);
    }

    public function save(): void
    {
        if ($this->isEdit) {
            $this->update();
        } else {
            $this->create();
        }
        $this->dispatch('close-action-item-upsert-modal');
    }

    public function create(): void
    {
        if ($this->form->createFromMeeting($this->meeting)) {
            $this->dispatch('action-item-created');
        }
    }

    public function update(): void
    {
        if ($this->form->update($this->actionItem)) {
            $this->dispatch('action-item-updated');
        }
    }

    #[On('show-edit-action-item')]
    public function setActionItemToEdit(int $actionItemId): void
    {
        $actionItem = ActionItem::findOrFail($actionItemId);
        $this->actionItem = $actionItem;
        $this->form->setActionItem($actionItem);
        $this->isEdit = true;
        // Show modal
        $this->dispatch('open-action-item-upsert-modal');
    }

    #[On('show-create-action-item')]
    public function setActionItemModalToCreate(): void
    {
        $this->isEdit = false;
        $this->form->reset();
        $this->form->responsable_id = auth()->id();
        $this->dispatch('open-action-item-upsert-modal');
    }

    public function cancel(): void
    {
        $this->form->reset();
    }
}
