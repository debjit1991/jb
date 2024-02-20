<div>
    <x-modal name="show" wire:model="show">

        <x-slot name="title">
            Create New District
        </x-slot>

        <x-slot name="body">
            <div class="flex flex-col lg:flex-row mt-2 gap-4">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" name="name" id="name" class="w-full sm:text-sm rounded-md"
                            placeholder="Enter District Name" wire:model.blur="name" autocomplete="off" />
                    </div>
                </div>
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" name="short_name" id="short_name" class="w-full sm:text-sm rounded-md"
                            placeholder="Enter Short Name" wire:model.blur="short_name" autocomplete="off" />
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row w-full mt-1 gap-4">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" name="ref_code" id="ref_code" class="w-full sm:text-sm rounded-md"
                            placeholder="Enter Ref Code" wire:model.blur="ref_code" autocomplete="off" />
                    </div>
                </div>
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" name="lg_code" id="lg_code" class="w-full sm:text-sm rounded-md"
                            placeholder="Enter LG Code" wire:model.blur="lg_code" autocomplete="off" />
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row w-full mt-1">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.select name="state" class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm"
                            wire:model.blur="state">
                            <option value="">Please Select state...</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-button.primary
                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium sm:ml-3 sm:w-auto sm:text-sm"
                wire:click="storeDistrict">
                Save
            </x-button.primary>
            <button wire:click="close" type="button"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </x-slot>

    </x-modal>
</div>
