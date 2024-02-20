<div class="flex flex-col w-full border-t border-b border-r rounded shadow">
    <div class="grid grid-cols-none grid-rows-1 gap-1 p-3 bg-white border-l-4 border-indigo-500 rounded md:grid-cols-8 md:grid-rows-none md:gap-4">
        <div class="flex items-center col-span-2">
            <div class="flex-shrink-0 w-10 h-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="flex flex-col gap-0 ml-2">
                <div class="text-sm font-semibold text-blue-600 break-all">
                    {{ $user->name }}
                </div>
                <div class="text-xs font-semibold text-green-500 break-all">
                    {{ isset($user->profile) ? $user->profile->designation : '' }}
                </div>
                <div class="text-xs text-gray-500 break-all">
                    {{ $user->email }}
                </div>
                <div class="text-xs text-gray-500">
                    {{ isset($user->profile) ? $user->profile->mobile : '' }}
                </div>
            </div>
        </div>

        <div class="flex-col justify-center hidden col-span-2 text-xs text-gray-500 sm:flex">
            <div class="flex items-center">
                <span class="text-yellow-700 animate-spin" wire:loading wire:target="showResources">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                    </svg>
                </span>
            </div>
            @if($resourcesShow)
            <ul>
                @foreach ($user->resources() as $resource)
                <li class="mb-1">{{ $resource[0] }} - {{ $resource[1] }}</li>
                @endforeach
            </ul>
            @else

            <div class="flex items-center" wire:loading.remove>
                <button type="button" wire:click="showResources" class="relative flex justify-center items-center bg-gray-100 text-blue-700 px-2 py-1.5 rounded-md border">
                    <div class="absolute -right-2 -top-2 bg-red-200 text-black rounded-full h-3.5 w-3.5 flex justify-center items-center" style="line-height: normal; font-size: 0.575rem;">{{ $user->resources()->count() }}</div>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M18.97 3.659a2.25 2.25 0 00-3.182 0l-10.94 10.94a3.75 3.75 0 105.304 5.303l7.693-7.693a.75.75 0 011.06 1.06l-7.693 7.693a5.25 5.25 0 11-7.424-7.424l10.939-10.94a3.75 3.75 0 115.303 5.304L9.097 18.835l-.008.008-.007.007-.002.002-.003.002A2.25 2.25 0 015.91 15.66l7.81-7.81a.75.75 0 011.061 1.06l-7.81 7.81a.75.75 0 001.054 1.068L18.97 6.84a2.25 2.25 0 000-3.182z" clip-rule="evenodd" />
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mr-1">
                        <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                        <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                    </svg>

                    <span class="font-semibold" style="line-height: normal; font-size: 0.675rem;">Attachments</span>
                </button>
            </div>

            @endif
        </div>

        <div class="items-center justify-center hidden col-span-1 sm:flex">
            <span class="px-3 py-1 text-xs font-bold text-center text-blue-800 bg-blue-100 rounded-full leading-2">
                {{ count($user->roles) ? $user->roles->first()->name : 'No Role Assigned'}}
            </span>
        </div>

        <div class="items-center justify-center hidden col-span-1 sm:flex">
            @if($user->is_active)
            <div class="flex justify-center items-center bg-green-50 font-medium leading-5 text-green-500 shadow-sm px-1.5 py-1 rounded uppercase" style="font-size: 10px;">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg> -->
                <span class="font-bold" style="line-height: normal;">Active</span>
            </div>
            @else
            <div class="flex justify-center items-center bg-red-50 font-medium leading-5 text-red-500 shadow-sm px-1.5 py-1 rounded uppercase" style="font-size: 10px;">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                </svg> -->
                <span class="font-bold" style="line-height: normal;">De-Active</span>
            </div>
            @endif

            @can('delete user')
            @if($user->id !== auth()->user()->id)
            @if($user->is_active)
            <button type="button" onclick="showDeactiveAccountConfirm(@this)" class="p-1 ml-2 text-red-500 border border-red-300 rounded-full bg-red-50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
            </button>
            @else
            <button onclick="showActiveAccountConfirm(@this)" class="p-1 ml-2 text-green-500 border border-green-300 rounded-full bg-green-50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
            </button>
            @endif
            @endif
            @endcan
        </div>

        <div class="flex-col items-center justify-center hidden col-span-2 gap-2 sm:flex">
            <div class="flex items-center justify-start gap-2">
                @can('update user')
                <a href="{{ route('users.edit', $user->id) }}" class="p-2 text-gray-500 border rounded-full bg-gray-50" data-tippy-content="Edit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                        <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                    </svg>
                </a>
                @endcan
                {{-- @can('delete user')
                <button type="button" wire:click="$emit('user-delete', {{$user->id}})" class="text-red-500" >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                </svg>
                </button>
                @endcan --}}
                {{-- @can('update user') --}}
                <a href="{{ route('users.permissions', $user->id) }}" class="p-2 text-yellow-500 border rounded-full bg-yellow-50" data-tippy-content="Change User Permission">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M8 7a5 5 0 113.61 4.804l-1.903 1.903A1 1 0 019 14H8v1a1 1 0 01-1 1H6v1a1 1 0 01-1 1H3a1 1 0 01-1-1v-2a1 1 0 01.293-.707L8.196 8.39A5.002 5.002 0 018 7zm5-3a.75.75 0 000 1.5A1.5 1.5 0 0114.5 7 .75.75 0 0016 7a3 3 0 00-3-3z" clip-rule="evenodd" />
                    </svg>
                </a>
                {{-- @endcan --}}
                {{-- @can('update user') --}}
                <button type="button" onclick="generateForgotPasswordLink(@this)" class="p-2 text-blue-800 border rounded-full bg-blue-50" data-tippy-content="Reset Password">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M14.5 1A4.5 4.5 0 0010 5.5V9H3a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-1.5V5.5a3 3 0 116 0v2.75a.75.75 0 001.5 0V5.5A4.5 4.5 0 0014.5 1z" clip-rule="evenodd" />
                    </svg>
                </button>
                {{-- @endcan --}}
            </div>
        </div>
    </div>
</div>
