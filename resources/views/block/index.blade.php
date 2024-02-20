<x-app-layout>

    {{-- Block Page Header --}}
    <x-slot name="header">

        <span class="text-2xl">Master Data : {{ __('Block') }}</span>

    </x-slot>

    {{-- Block Page Sub Header --}}
    <x-slot name="sub_header">

        Here you can manage the blocks for Master Data.

    </x-slot>

    <x-slot name="action">

         <x-button.success x-data={} @click="Livewire.dispatchTo('master.area.block.create-block-modal','show')">
            <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Add New
        </x-button.success>
    </x-slot>


    @livewire('master.area.block.block-list')
    @livewire('master.area.block.create-block-modal')
    @livewire('master.area.block.edit-block-modal')

    @if (session('status'))
        <x-alert icon="{{ session('status') }}" title="{{ session('message') }}" text="{{ session('body') }}" />
    @endif

</x-app-layout>
