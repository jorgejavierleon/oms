<div>
    <x-general.page-title title="Edit Employee" :breadcrums="[
            route('organization.employees.list') => 'Employees',
            route('organization.employees.show', $user) => $user->name,
            '#' => 'Edit',
        ]"
    />
    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 md:col-span-4">
                <div class="card p-6 ">
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
                                    @svg('fluentui-edit-24', 'h-5 w-5')
                                </label>
                            </div>
                        </div>
                        @error('form.avatar')
                            <span class="text-xs text-error pt-4">{{$message}}</span>
                        @enderror
                    </div>
                    {{-- User Form --}}
                    <x-general.section-title icon="fluentui-person-24">
                        Account Information
                    </x-general.section-title>
                    <div class="mt-4 space-y-4">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                            <x-input.text wire:model.blur="form.trigram" label="Trigram" class="sm:col-span-3"/>
                            <x-input.text wire:model.blur="form.name" label="Full Name" class="sm:col-span-9"/>
                        </div>
                        <div class="grid grid-cols-1 gap-4">
                            <x-input.text wire:model.blur="form.email" label="Email"/>
                            <x-input.text wire:model.blur="form.phone" label="Phone"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-8">
                <div class="card p-6 ">
                    {{-- Organization --}}
                    <div class="space-y-4">
                        <x-general.section-title icon="fluentui-organization-24">
                            Organization Information
                        </x-general.section-title>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <x-input.select wire:model="form.position_id" label="Position">
                                <option value=""></option>
                                @foreach($positions as $id => $position)
                                    <option value="{{$id}}">{{$position}}</option>
                                @endforeach
                            </x-input.select>
                            <x-input.select wire:model="form.teams" label="Teams" multiple>
                                @foreach($teams as $id => $team)
                                    <option value="{{$id}}">{{$team}}</option>
                                @endforeach
                            </x-input.select>
                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <x-input.select wire:model="form.managers" label="Managers" multiple>
                                @foreach($managers as $id => $manager)
                                    <option value="{{$id}}">{{$manager}}</option>
                                @endforeach
                            </x-input.select>
                            <x-input.select wire:model="form.directReporters" label="Direct Reports" multiple>
                                @foreach($directReporters as $id => $directReport)
                                    <option value="{{$id}}">{{$directReport}}</option>
                                @endforeach
                            </x-input.select>
                        </div>
                    </div>
                    {{-- Address --}}
                    <div class="space-y-4 mt-8">
                        <x-general.section-title icon="fluentui-location-24">
                            Address Information
                        </x-general.section-title>
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
                    </div>
                    {{-- Additional --}}
                    <div class="space-y-4 mt-8">
                        <x-general.section-title icon="fluentui-text-bullet-list-square-24">
                            Additional Information
                        </x-general.section-title>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <x-input.datepicker wire:model="form.birthdate" label="Date of Birth"/>
                            <x-input.datepicker wire:model="form.contract_renewal_at" label="Contract Renewal at"/>
                        </div>
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
            </div>
        </div>
    </form>
</div>
