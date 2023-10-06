<?php

namespace App\Livewire\Employee;

use App\Livewire\Forms\EmployeeForm;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class EmployeeEdit extends Component
{
    use WithFileUploads;

    public EmployeeForm $form;

    public User $user;

//    #[Rule('image|max:1024')] // 1MB Max
//    public $avatar;

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
        Toaster::success('Information updated');
        $this->dispatch('employee-updated');
    }

    public function cancel(): void
    {
        $this->form->setEmployee($this->user);
    }
}
