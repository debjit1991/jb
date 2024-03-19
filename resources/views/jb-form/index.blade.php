<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <x-slot name="sub_header">

    </x-slot>

    <x-container>
        <x-slot name="title" class="jb-form-title">
            {{ __('Please Select Scheme') }}
        </x-slot>
        <x-slot name="body">
            <form method="GET" action="{{ route('PensionFormgetdata.PensionForm') }}"
                class="flex flex-col md:flex-row w-full mt-1" id="pensionForm">
                @csrf
                <div class="w-full md:w-1/2 mt-1 text-gray-700 gap-4 ">
                    <div class="mt-1 relative rounded-md" >
                        {{-- @dd($scheme_list) --}}
                        <x-scheme.scheme :scheme_list="$scheme_list" />
                        {{-- <div class="flex items-end justify-end py-4 mt-4 ">
                            <x-button.success type="submit">GO</x-button.success>
                        </div> --}}

                    </div>
                </div>
            </form>
        </x-slot>
    </x-container>
</x-app-layout>

<script type="text/javascript">
    window.addEventListener('load', function () {
        //console.log('Page loaded');

        function click_handler1() {
            //console.log('Scheme selected');
            // Automatically submit the form when the scheme changes
            document.getElementById("pensionForm").submit();
        }

        // Add an event listener to the scheme select element for the change event
        document.getElementById("scheme_id").addEventListener("change", click_handler1, false);
    });
</script>
