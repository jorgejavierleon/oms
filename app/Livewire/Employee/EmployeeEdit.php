<?php

namespace App\Livewire\Employee;

use App\Livewire\Forms\EmployeeForm;
use App\Models\Position;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Collection;
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

    public Collection $positions;

    public Collection $teams;

    public function mount(User $user): void
    {
        $this->form->setEmployee($user);
        $this->user = $user;
        $this->positions = Position::all();
        $this->teams = Team::all();
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
