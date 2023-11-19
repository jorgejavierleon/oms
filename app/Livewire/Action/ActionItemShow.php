<?php

namespace App\Livewire\Action;

use Illuminate\View\View;
use App\Models\ActionItem as ActionItemModel;
use Livewire\Component;

class ActionItemShow extends Component
{
    public ActionItemModel $actionItem;

    public ?string $actionItemDescription = null;

    public bool $actionItemIsCompleted = false;

    public bool $showOrigen = false;

    protected $listeners = [
        'actionItemUpdated' => 'refreshActionItem',
    ];

    public function mount(ActionItemModel $actionItem): void
    {
        $this->actionItem = $actionItem;
        $this->actionItemIsCompleted = $actionItem->is_completed;
        $this->actionItemDescription = $actionItem->description;
    }

    public function render(): View
    {
        return view('livewire.action.action-item-show');
    }
    public function deleteActionItem(): void
    {
        $this->actionItem->delete();
        $this->dispatch('action-item-deleted');
    }

    public function toggleActionItemIsCompleted(): void
    {
        $this->actionItem->is_completed = $this->actionItemIsCompleted;
        $this->actionItem->completed_at = $this->actionItemIsCompleted ? now() : null;
        $this->saveActionItem();
    }

    private function saveActionItem(): void
    {
        $this->actionItem->save();
        $this->refreshActionItem();
    }

    public function refreshActionItem(): void
    {
        $this->actionItem->refresh();
    }

}
