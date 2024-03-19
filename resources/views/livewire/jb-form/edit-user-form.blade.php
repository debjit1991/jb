<div>
    {{-- @if(session()->has('success'))
    @livewire('success-alert')
    @endif
    @if(session()->has('error'))
    @livewire('error-alert')
      @endif --}}
    <div class="flex">
        <ul
            class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li class="me-2">
                <button aria-current="page"
                    class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500"
                    wire:click="tab_highlight('tab1')">Personal Details</button>
            </li>
            <li class="me-2">
                <button
                    class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-800 dark:hover:text-blue-300"
                    wire:click="tab_highlight('tab2')">Personal Identification Number(S) </button>
            </li>
            <li class="me-2">
                <button
                    class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-800 dark:hover:text-blue-300"
                    wire:click="tab_highlight('tab3')">Contact Details</button>
            </li>
            {{-- <li class="me-2">
                <button
                    class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-800 dark:hover:text-blue-300"
                    wire:click="tab_highlight('tab4')">Bank Account Details</button>
            </li> --}}
            <li class="me-2">
                <button
                    class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-800 dark:hover:text-blue-300"
                    wire:click="tab_highlight('tab4')">Scheme Specific Information</button>
            </li>
            <li class="me-2">
                <button
                    class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-800 dark:hover:text-blue-300"
                    wire:click="tab_highlight('tab5')">Enclosure List (Self Attested)</button>
            </li>
            <li class="me-2">
                <button
                    class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-800 dark:hover:text-blue-300"
                    wire:click="tab_highlight('tab6')">Self Declaration</button>
            </li>
            {{-- <input type="text" value="{{session('application_id')}}"/> --}}
            {{-- <li>
        <a class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Enclosure List (Self Attested)</a>
    </li> --}}
        </ul>
    </div>

    <div>
        @if ($currentTab == 'tab1')
            @livewire('jb-form.personaldetails',['scheme_id' => $scheme_id])
        @elseif ($currentTab == 'tab2')
            @livewire('jb-form.personal-details-identification')
        @elseif ($currentTab == 'tab3')
            @livewire('jb-form.contactdetails')
        @elseif ($currentTab == 'tab4')
            <p>Content for Tab 4</p>
        @elseif ($currentTab == 'tab5')
            <p>Content for Tab 5</p>
        @elseif ($currentTab == 'tab6')
            <p>Content for Tab 6</p>            
        @endif
        
    </div>

@push('scripts')
    
    <script>
           //console.log('Hello');

        document.addEventListener('livewire:init', () => {
            Livewire.on('success', (event) => {
        //    console.log(event[0]);
        //    const msg = event[0]
            Swal.fire({
                title: 'success!',
                text: event[0],
                icon: 'success',
                confirmButtonText: 'OK',
                timer: 5000
            });
        });
    });
   
    //console.log('Hello');

 document.addEventListener('livewire:init', () => {
     Livewire.on('error', (event) => {
 //    console.log(event[0]);
 //    const msg = event[0]
 Swal.fire({
    //position: "top-end",
    icon: "error",
    title: "Oops...",
    text: event[0],
    howConfirmButton: false,
    timer: 5000
  
});

 });
});


</script>
@endpush

</div>