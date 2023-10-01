<?php

namespace App\Livewire\Employee;

use App\Livewire\Forms\EmployeeForm;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class EmployeeEdit extends Component
{
    public EmployeeForm $form;

    public function mount(User $employee): void
    {
        $this->form->setEmployee($employee);
    }

    public function render(): View
    {
        return view('livewire.employee.employee-edit');
    }

    public function submit(): void
    {
        $this->form->update();
        $this->dispatch('employee-updated');
    }
}
