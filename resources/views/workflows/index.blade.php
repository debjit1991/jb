<x-app-layout>

    {{-- District Page Header --}}
    <x-slot name="header">

        <span class="text-2xl">{{ __('Manage Workflow') }}</span>

    </x-slot>

    {{-- District Page Sub Header --}}
    <x-slot name="sub_header">

        Here you can manage the Scheme Wokflow.

    </x-slot>

    {{-- @can('create district') --}}

    
        <x-slot name="action">
            <x-button.danger x-data={} @click="Livewire.dispatchTo('workflow.create-role-modal','show')">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Add New Role
            </x-button.danger>
            <x-button.success x-data={} @click="Livewire.dispatchTo('workflow.create-workflow-modal','show')">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Add New Step
            </x-button.success>
        </x-slot>
    {{-- @endcan --}}

     @livewire('workflow.workflow-list')
   {{-- @can('create district') --}}
         @livewire('workflow.create-role-modal')
         @livewire('workflow.create-workflow-modal')
    {{-- @endcan --}}

    {{-- @can('update district') --}}
         @livewire('workflow.edit-workflow-modal')
    {{-- @endcan --}}

    @if (session('status'))
        <x-alert icon="{{ session('status') }}" title="{{ session('message') }}" text="{{ session('body') }}" />
    @endif

</x-app-layout>
