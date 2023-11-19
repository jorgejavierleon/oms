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

    protected Meeting $meeting;

    public bool $isEdit = false;

    protected ?ActionItem $actionItem;

    public function mount(Meeting $meeting): void
    {
        $this->meeting = $meeting;
        $this->form->responsable_id = auth()->id();
    }

    public function render(): View
    {
        return view('livewire.action.action-item-upsert')->with([
            'responsables' => User::select('id', 'name')->get()->pluck('name', 'id')
        ]);
    }

    public function submit(): void
    {
        if ($this->isEdit) {
            $this->update();
        } else {
            $this->create();
        }

        $this->dispatch('action-item-added');
        $this->form->reset();
    }

    public function create(): void
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
    }

    public function update(): void
    {
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
        $this->dispatch('open-action-item-upsert-modal');
    }

    public function cancel(): void
    {
        $this->form->reset();
    }
}
