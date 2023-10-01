<div>
    <x-general.page-title title="Edit Employee" :breadcrums="[
            route('organization.employees.list') => 'Employees',
            route('organization.employees.show', $user) => $user->name,
            '#' => 'Edit',
        ]"
    />
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        <div class="col-span-12 md:col-span-4">
            <div class="card p-6 ">
                {{-- User avatar --}}
                <div class="flex grow flex-col items-center pb-5 sm:px-5">
                    <div class="avatar h-24 w-24 ">
                        <img class="rounded-lg" src="{{url($user->getAvatarUrl())}}" alt="avatar" />
                    </div>
                    <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                        {{$form->name}}
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-8">
            <div class="card p-6 ">
                {{-- User Form --}}
                <form wire:submit="submit" >
                    <div class="mt-4 space-y-4">
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
                    </div>
                    <div class="mt-8 space-x-2 text-right">
                        <x-button.outlined wire:click="cancel">
                            Cancel
                        </x-button.outlined>
                        <x-button.primary type="submit">
                            Save
                        </x-button.primary>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
