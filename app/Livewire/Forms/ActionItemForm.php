<?php

namespace App\Livewire\Forms;

use App\Models\ActionItem;
use App\Models\Meeting;
use DB;
use Livewire\Attributes\Rule;
use Livewire\Form;

class ActionItemForm extends Form
{
    #[Rule('required')]
    public string $title = '';

    public ?int $responsable_id = null;

    public ?string $due_date = null;

    public ?string $description = null;


    public function setActionItem(ActionItem $actionItem): void
    {
        $this->title = $actionItem->title;
        $this->responsable_id = $actionItem->responsable_id;
        $this->due_date = $actionItem->due_date->format('Y-m-d');
        $this->description = $actionItem->description;
    }

    public function dateFormattedDueDate(): ?string
    {
        return $this->due_date ? \Carbon\Carbon::createFromFormat('Y-m-d', $this->due_date)->toDateString() : null;
    }

    public function update(ActionItem $actionItem): bool
    {
        $this->due_date = $this->dateFormattedDueDate();
        return $actionItem->update($this->all());
    }

    public function createFromMeeting(Meeting $meeting): bool
    {
        $lastOrder = $meeting->actionItems->last()->order ?? 0;
        try {
            DB::transaction(function () use ($meeting, $lastOrder) {
                $actionItem = ActionItem::create([
                    'title' => $this->title,
                    'description' => $this->description,
                    'responsable_id' => $this->responsable_id ?? auth()->id(),
                    'due_date' => $this->dateFormattedDueDate(),
                ]);
                $meeting->actionItems()->attach(
                    $actionItem, [
                        'order' => $lastOrder + 1,
                        'is_original' => true,
                    ]
                );
            });
        } catch (\Throwable) {
            return false;
        }
        return true;
    }
}
