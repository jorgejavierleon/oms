<x-modal
    @edit-employee.window="showModal = true"
    x-on:employee-updated.window="showModal = false"
>
    <x-slot name="title">
        <x-modal.title>
            Edit Employee Information
        </x-modal.title>
    </x-slot>
    <x-slot name="body">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
            <x-input.text wire:model.blur="form.name" label="Full Name" class="sm:col-span-9"/>
            <x-input.text wire:model.blur="form.trigram" label="Trigram" class="sm:col-span-3"/>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <x-input.text wire:model.blur="form.email" label="Email"/>
            <x-input.text wire:model.blur="form.phone" label="Phone"/>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <x-input.text wire:model.blur="form.country" label="Country"/>
            <x-input.text wire:model.blur="form.city" label="City"/>
        </div>
        <div class="grid grid-cols-1 gap-4">
            <x-input.text wire:model.blur="form.address" label="Address"/>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <x-input.text wire:model.blur="form.emergency_contact_name" label="Emergency Contact Name"/>
            <x-input.text wire:model.blur="form.emergency_contact_phone" label="Emergency Contact Phone"/>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <x-input.datepicker wire:model="form.birthdate" label="Date of Birth"/>
            <x-input.datepicker wire:model="form.contract_renewal_at" label="Contract Renewal at"/>
        </div>
    </x-slot>
    <x-slot name="footer">
        <div class="space-x-2 text-right">
            <x-button.outlined @click="showModal = false">
                Cancel
            </x-button.outlined>
            <x-button.primary type="submit">
                Save
            </x-button.primary>
        </div>
    </x-slot>
</x-modal>
