<?php

namespace App\Livewire\Employee;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeList extends Component
{
    use WithPagination;

    #[Title('Employees')]
    public function render(): View
    {
        return view('livewire.employee.employee-list', [
            'users' => User::paginate(10),
        ]);
    }
}
