<x-guest-layout>
    {{-- <x-auth-card max-width='xl'> --}}
        <x-slot name="logo">
            {{-- <div class="flex items-center justify-center gap-2">
                @if (env('APP_ELECTION') == 'state')
                <br>
                <x-logos.national-emblem-icon class="text-gray-500 fill-current w-14 h-14" />
                @else
                <x-logos.eci class="text-gray-500 fill-current w-14 h-14" />
                @endif

                <h2 class="text-xl font-bold">{{ env('APP_NAME') }}</h2>
            </div> --}}
        </x-slot>


        <form method="POST" action="{{ route('invitations.store') }}">
            <input type="hidden" name="invitation_token" value="{!! $invitation->link !!}">
            @csrf
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-base font-semibold leading-6 text-gray-900">User Information</h3>
                    <p class="max-w-2xl mt-1 text-sm text-gray-500">Personal details and Attachments.</p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Full name</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $invitation->name }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Designation</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $invitation->designation }}
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Email address</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $invitation->email }}
                                @error('email')
                                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Mobile</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $invitation->mobile }}
                                @error('mobile')
                                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Role</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                {{ $invitation->role?->name }}
                            </dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Resources</dt>
                        </div>
                        <div class="px-4 pb-5 bg-white sm:gap-4 sm:px-6">
                            <ul role="list" class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                                @foreach ($invitation->resources_arr as $resource)
                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                    <div class="flex items-center flex-1 w-0">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="flex-1 w-0 ml-2 truncate">{{ $resource['type'] }}</span>
                                    </div>
                                    <div class="flex-shrink-0 ml-4">
                                        <p class="text-xs font-semibold text-indigo-600 break-all hover:text-indigo-500">
                                            {{ $resource['name'] }}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <x-form.input type="password" name="password" required autocomplete="new-password" />

            <x-form.input type="password" name="password_confirmation" label="Confirm Password" required />

            <div class="flex items-center justify-between mt-4">
                {{-- <x-password-policy /> --}}

                <div class="flex items-center">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>
        </form>
        @if (session('status'))
        <x-alert position="top" type="success">
            <x-slot name="title">
                {{ session('status') }}
            </x-slot>
            <x-slot name="body">
                You can <a href="{{ route('dashboard') }}">Login</a> with your credentials once approved.
            </x-slot>
        </x-alert>
        @endif
    {{-- </x-auth-card> --}}
</x-guest-layout>
