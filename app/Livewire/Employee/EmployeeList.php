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

    public string $search = '';

    #[Title('Employees')]
    public function render(): View
    {
        $users = User::search($this->search)->paginate(10);
        return view('livewire.employee.employee-list', [
            'users' => $users,
        ]);
    }
}
