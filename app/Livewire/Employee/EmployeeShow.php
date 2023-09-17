<?php

namespace App\Livewire\Employee;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class EmployeeShow extends Component
{
    public User $user;

    public function render(): View
    {
        return view('livewire.employee.employee-show');
    }

    public function mount(User $user): void
    {
        $this->user = $user;
    }

}
