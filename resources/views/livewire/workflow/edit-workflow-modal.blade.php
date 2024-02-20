<div>
    <x-modal name="show" wire:model="show">

        <x-slot name="title">
            Edit Step
        </x-slot>
        <x-slot name="body">
            <div class="flex flex-col lg:flex-row mt-1 gap-4">
                <div class="w-full md:w-2/3">
                    <div class="mt-1 relative rounded-xs shadow-sm">
                        <x-form.input name="step_name" wire:model="step_name" />
                    </div>
                </div>
                
            </div>
            
            <div class="flex flex-col lg:flex-row mt-1 gap-4">
                <div class="w-full md:w-1/2">
                    <div class="mt-1 relative rounded-md">
                        <x-form.select name="parent_id" wire:model="parent_id">
                            <option value="" selected="selected">Select</option>
                            @foreach ($parent_step_list as $parent_step_item)
                                <option value="{{$parent_step_item->id }}" @if($parent_id==$parent_step_item->id)  selected="selected" @endif>{{$parent_step_item->step_name}}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row mt-1 gap-4">
                <div class="w-full md:w-1/2">
                    <div class="mt-1 relative rounded-md">
                        <x-form.select name="role_id" wire:model="role_id">
                            <option value="" selected="selected">Select</option>
                            @foreach ($role_list as $role_item)
                                <option value="{{$role_item->id }}" @if($role_id==$role_item->id)  selected="selected" @endif>{{$role_item->name}}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-button.primary
                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium sm:ml-3 sm:w-auto sm:text-sm"
                wire:click="updateWorkflow">
                Update
            </x-button.primary>
            <button wire:click="close" type="button"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </x-slot>

    </x-modal>
</div>
