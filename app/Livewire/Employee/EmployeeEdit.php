<?php

namespace App\Livewire\Employee;

use App\Livewire\Forms\EmployeeForm;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class EmployeeEdit extends Component
{
    public EmployeeForm $form;
    public User $user;

    public function mount(User $user): void
    {
        $this->form->setEmployee($user);
        $this->user = $user;
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

    public function cancel(): void
    {
        $this->form->setEmployee($this->user);
        Toaster::success('Employee edit cancelled');
    }
}
