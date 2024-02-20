<x-app-layout>
    <x-slot name="header">
        {{ __('Permissions') }}
    </x-slot>

    <x-slot name="sub_header">
        Here you can manage all the permissions.
    </x-slot>

    @can('create permission')
    <x-slot name="action">
        <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'create-permission')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2 -ml-1">
                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
            </svg>
            {{ __('Add Permission') }}
        </x-primary-button>
    </x-slot>
    @endcan

    <livewire:permissions.permission-list />
    <livewire:permissions.create-permission />


    @if (session('status'))
    <x-alert icon="{{ session('status') }}" title="{{ session('message') }}" text="{{ session('body') }}" />
    @endif

    @push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('permission-created', (event) => {
                $dispatch('open-close', 'create-permission');

                Swal.fire({
                    icon: 'success',
                    title: 'Permission Created',
                    text: `\'${event.name}\' named new permission created.`,
                });
            });
        });
    </script>
    @endpush
</x-app-layout>