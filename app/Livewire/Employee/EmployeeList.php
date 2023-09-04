<?php

namespace App\Livewire\Employee;

use Livewire\Component;

class EmployeeList extends Component
{
    public function render()
    {
        return view('livewire.employee.employee-list')->title('Employees');
    }
}
