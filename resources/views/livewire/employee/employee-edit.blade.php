<div>
    <x-general.page-title title="Edit Employee" :breadcrums="[
            route('organization.employees.list') => 'Employees',
            route('organization.employees.show', $user) => $user->name,
            '#' => 'Edit',
        ]"
    />
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        <div class="col-span-12 md:col-span-4">
            <div class="card p-8 ">
                {{-- User avatar --}}
                <div class="flex grow flex-col items-center pb-5 sm:px-5">
                    <div class="avatar h-24 w-24 ">
                        @if($form->avatar)
                            <img class="rounded-lg" src="{{url($form->avatar->temporaryUrl())}}" alt="avatar" />
                        @else
                            <img class="rounded-lg" src="{{url($form->employee->getAvatarUrl())}}" alt="avatar" />
                        @endif
                        <div
                            class="absolute -bottom-2 -right-2 flex items-center justify-center rounded-full bg-white dark:bg-navy-700"
                        >
                            <label
                                class="btn h-8 w-8 rounded-full border border-slate-200 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:border-navy-500 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                            >
                                <input
                                    tabindex="-1"
                                    wire:model="form.avatar"
                                    type="file"
                                    class="pointer-events-none absolute inset-0 h-full w-full opacity-0"
                                />
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                                    />
                                </svg>
                            </label>
                        </div>
                    </div>
                    @error('form.avatar')
                        <span class="text-xs text-error pt-4">{{$message}}</span>
                    @enderror
                    <h3 class="pt-6 text-lg font-medium text-slate-700 dark:text-navy-100">
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
