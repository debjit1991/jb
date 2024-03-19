<x-app-layout>
  <x-container>
  <x-slot name="title">
      {{ __('SCHEME') }}: {{ $scheme_name }}
  </x-slot>
  <x-slot name="body">
    @livewire('jb-form.edit-user-form', ['scheme_id' => $scheme_id])    
  </x-slot>
</x-container>
</x-app-layout>