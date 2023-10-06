<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Masmerise\Toaster\Toaster;

class EmployeeForm extends Form
{
    public ?User $employee;

    #[Rule('required')]
    public ?string $trigram = '';

    #[Rule('required')]
    public ?string $name = '';

    #[Rule('required|email')]
    public ?string $email = '';

    #[Rule('nullable|image|max:1024')] // 1MB Max
    public $avatar;

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
        $this->avatar = null;
    }

    public function update(): void
    {
        $this->validate();
        $this->employee->update($this->except(['employee', 'avatar']));
        if ($this->avatar) {
            $this->updateAvatar();
        }
    }

    protected function updateAvatar(): void
    {
        try {
            $this->employee->addMedia($this->avatar->getRealPath())
                ->toMediaCollection(User::AVATAR_MEDIA_COLLECTION);
            $this->avatar = null;
        } catch (\Exception $e) {
            Toaster::error('Error uploading avatar');
            Log::error($e->getMessage());
        }
    }
}
