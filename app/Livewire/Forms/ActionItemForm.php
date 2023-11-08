<?php

namespace App\Livewire\Forms;

use App\Models\ActionItem;
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
        $this->due_date = $actionItem->due_date;
        $this->description = $actionItem->description;
    }
}
