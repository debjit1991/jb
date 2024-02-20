<form wire:submit.prevent="updateUser" method="POST">
    <x-form.input name="user.name" label="name" wire:model="user.name" required autofocus />

    <div class="flex flex-col gap-0 md:flex-row md:gap-2.5">
        <div class="w-full md:w-1/2">
            <x-form.input required name="profile.designation" label="designation" wire:model.defer="profile.designation" />
        </div>
        <div class="w-full md:w-1/2">
            <x-form.input required name="user.email" label="email" wire:model.defer="user.email" />
        </div>
    </div>

    <div class="flex flex-col gap-0 md:flex-row md:gap-2.5">
        <div class="w-full md:w-1/2">
            <x-form.input required name="profile.mobile" label="mobile" minlength='10' maxlength='10' wire:model.defer="profile.mobile" />
        </div>
        
        <div class="w-full md:w-1/2">
            <x-form.select required name="role" wire:model.live="role">
                <option value="">Select</option>
                @foreach ($roles as $role)
                <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                @endforeach
            </x-form.select>
        </div>
    </div>

    <div class="flex py-2 mt-2 border-b">
        <h2 class="text-xl text-gray-400">Select Resources</h2>
    </div>

    <div class="flex">
        <div class="flex flex-1 flex-col gap-0 md:flex-row md:gap-2.5">
            <div class="w-full md:w-1/2">
                <x-form.select name="resource_type" wire:model.live="resource_type">
                    <option value="">Select</option>
                    @foreach ($resource_types as $data)
                    <option value="{{ $data['id'] }}">{{ $data['name'] }}</option>
                    @endforeach
                </x-form.select>
            </div>
            <div class="w-full md:w-1/2">
                <x-form.select name="resource" wire:model="resource">
                    <option value="">Select</option>
                    @foreach ($resources as $resource)
                    <option value="{{ $resource->id }}">{{ $resource->name }}</option>
                    @endforeach
                </x-form.select>
            </div>
        </div>
        <div class="flex items-start ml-2.5 mt-10">
            <button type="button" wire:click="addResource" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-indigo-800 border border-transparent rounded-md hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </button>
        </div>
    </div>

    <div class="flex py-1">
        <x-form.error name="error_resourses" />
    </div>

    <div class="flex flex-col mt-4 mb-8 border rounded shadow">
        <div class="flex justify-between p-3 text-lg text-gray-500 bg-gray-100 border-b">
            <div class="flex">Resources</div>
            <div class="flex gap-2.5 items-center">
                <h2 class="px-3 py-1 text-sm text-white bg-blue-700 rounded-full">Selected: {{ $selected_resources->count() }}</h2>
                <button class="inline-flex items-center text-xs text-red-700" type="button" wire:click="clearAllResources">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    Clear
                </button>
            </div>
        </div>

        @forelse ($selected_resources as $index => $resource)
        <div class="flex justify-between px-4 py-2 border-b">
            <div class="flex flex-col gap-1">
                <span class="text-base">{{ $resource['resource_type_name'] }} - <span class="text-xs font-bold text-yellow-700">{{ $resource['resource_name'] }}</span></span>
            </div>
            <button class="text-red-700" type="button" wire:click="removeResource({{ $index }})">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        @empty
        <div class="m-2">
            <x-empty-state message="No Resource Added" />
        </div>
        @endforelse
    </div>

    <div class="flex items-end justify-end py-4 mt-4 border-t">
        <x-button.success type="submit">
            Save
        </x-button.success>
    </div>
</form>
