<x-modal
    @edit-employee.window="showModal = true"
>
    <x-slot name="title">
        <x-modal.title>
            Edit Employee Information
        </x-modal.title>
    </x-slot>
    <x-slot name="body">
        <p>FORM</p>
    </x-slot>
    <x-slot name="footer">
        <div class="space-x-2 text-right">
            <x-button.outlined @click="showModal = false">
                Cancel
            </x-button.outlined>
            <x-button.primary @click="showModal = false">
                Save
            </x-button.primary>
        </div>
    </x-slot>
</x-modal>
