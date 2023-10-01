<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class EmployeeForm extends Form
{
    public ?User $employee;

    #[Rule('required')]
    public ?string $trigram = '';

    #[Rule('required')]
    public ?string $name = '';

    #[Rule('required|email')]
    public ?string $email = '';

    public ?string $phone = '';

    public ?string $country = '';

    public ?string $city = '';

    public ?string $address = '';

    public ?string $emergency_contact_name = '';

    public ?string $emergency_contact_phone = '';

    public ?string $birthdate = '';

    public ?string $contract_renewal_at = '';

    public function setEmployee(User $employee): void
    {
        $this->employee = $employee;
        $this->name = $employee->name;
        $this->email = $employee->email;
        $this->trigram = $employee->trigram;
        $this->phone = $employee->phone;
        $this->country = $employee->country;
        $this->city = $employee->city;
        $this->address = $employee->address;
        $this->emergency_contact_name = $employee->emergency_contact_name;
        $this->emergency_contact_phone = $employee->emergency_contact_phone;
        $this->birthdate = $employee->birthdate;
        $this->contract_renewal_at = $employee->contract_renewal_at;
    }

    public function update(): void
    {
        $this->validate();
        $this->employee->update($this->except('employee'));
    }
}
