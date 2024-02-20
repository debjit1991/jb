<div>
    <x-modal name="show" wire:model="show">

        <x-slot name="title">
            Create New Step
        </x-slot>

        <x-slot name="body">
            <div class="flex flex-col lg:flex-row mt-2 gap-4">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" name="step_name" id="step_name" class="w-full sm:text-sm rounded-md"
                            placeholder="Enter Step Name" wire:model.blur="step_name" autocomplete="off" />
                    </div>
                </div>
                
            </div>

        
            <div class="flex flex-col md:flex-row w-full mt-1">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.select name="parent_id" class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm"
                            wire:model.blur="parent_id">
                            <option value="">Please Select Parent Step...</option>
                            <option value="100">Not Applicable</option>
                            @foreach ($parent_step_list as $parent_step_item)
                                <option value="{{ $parent_step_item->id }}">{{$parent_step_item->step_name}}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row w-full mt-1">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.select name="role_id" class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm"
                            wire:model.blur="role_id">
                            <option value="">Please Select Role...</option>
                            @foreach ($role_list as $role_item)
                                <option value="{{ $role_item->id }}">{{$role_item->name}}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-button.primary
                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium sm:ml-3 sm:w-auto sm:text-sm"
                wire:click="storeWorkflow">
                Save
            </x-button.primary>
            <button wire:click="close" type="button"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </x-slot>

    </x-modal>
</div>
