<x-app-layout>
    <x-slot name="header">
        {{ __('User') }}
    </x-slot>

    <x-slot name="sub_header">
        {{ __('Add details for the new user.') }}
    </x-slot>

    <x-slot name="action">
        <a href="{{ url('users') }}">
            <x-button.indigo>
                <!-- Heroicon name: users -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 -ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                All Registered Users
            </x-button.indigo>
        </a>
    </x-slot>

    {{-- User Page Content --}}
    <x-container>
        <x-slot name="title">
            {{ __('New User') }}
        </x-slot>
        <x-slot name="body">
            <div class="flex justify-center mb-8">
                <div class="w-full md:w-2/3">
                    @livewire('users.create-user-form')
                </div>
            </div>
        </x-slot>
    </x-container>

</x-app-layout>
