<div>
    <x-modal name="show" wire:model="show">

        <x-slot name="title">
            Create New Role
        </x-slot>

        <x-slot name="body">
            <div class="flex flex-col lg:flex-row mt-2 gap-4">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" name="role_name" id="role_name" class="w-full sm:text-sm rounded-md"
                            placeholder="Enter Role Name" wire:model.blur="role_name" autocomplete="off" />
                    </div>
                </div>
                
            </div>

        
           
           
        </x-slot>

        <x-slot name="actions">
            <x-button.primary
                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium sm:ml-3 sm:w-auto sm:text-sm"
                wire:click="storeRole">
                Save
            </x-button.primary>
            <button wire:click="close" type="button"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </x-slot>

    </x-modal>
</div>
