

<x-app-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>

    <x-slot name="sub_header">
        {{ __('All registered Users') }}
    </x-slot>
    <x-slot name="action">
        <x-button.success x-data={} @click="window.livewire.emitTo('user.user-permissions','show')">
            <!-- Heroicon name: plus circle -->
            <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Add New
        </x-button.success>
    </x-slot>
    <x-slot name="action">
        @can('create user')
        <a href="{{ url('/users/create') }}">
            <x-button.indigo>
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                Add User
            </x-button.indigo>
        </a>
        @endcan
    </x-slot>

    @livewire('users.user-list')

    @if (session('status'))
    <x-alert icon="{{ session('status') }}" title="{{ session('message') }}" text="{{ session('body') }}" />
    @endif
</x-app-layout>
