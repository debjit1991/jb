<div>
    <x-modal wire:model="show">

        <x-slot name="title">
            Create New Police Station
        </x-slot>

        <x-slot name="body">
            <div class="flex flex-col md:flex-row gap-2 w-full">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" name="name" id="name" class="police_station w-full sm:text-sm"
                            placeholder="Enter Police Station Name" wire:model.lazy="name" autocomplete="off" />
                    </div>
                </div>
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.input type="text" name="code" id="code" class="block w-full sm:text-sm"
                            placeholder="Enter Ref Code" wire:model.lazy="code" autocomplete="off" />
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row w-full mt-1 gap-4">
                <div class="w-full md:w-1/2 mt-1 text-gray-700">
                    <div class="mt-1 relative rounded-md">
                        <x-form.select id="district" name="district"
                            class="rounded-md shadow-sm w-full border-gray-300 text-gray-500 sm:text-sm"
                            wire:model.lazy="district">
                            <option value="">Please Select District...</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-button.primary
                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium sm:ml-3 sm:w-auto sm:text-sm"
                wire:click="storePoliceStation">
                Save
            </x-button.primary>
            <button wire:click="close" type="button"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
        </x-slot>

    </x-modal>
</div>
