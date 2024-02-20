<div class="flex space-x-1 justify-around">
    <x-modal wire:model="show">
        <x-slot name="title">
        </x-slot>
        <x-slot name="body">
            <div class="flex flex-col lg:flex-row mt-2 gap-4">
                <div class="">
                    <label for="name" class="block text-base font-bold text-gray-700">Are you sure you want to delete this User?</label>
                </div>
            </div>
        </x-slot>
        <x-slot name="actions">
            <x-button.danger class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium sm:ml-3 sm:w-auto sm:text-sm" wire:click="removeUser">
                Yes
            </x-button.danger>
            <button wire:click="close" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                No
            </button>
        </x-slot>
    </x-modal>
</div>