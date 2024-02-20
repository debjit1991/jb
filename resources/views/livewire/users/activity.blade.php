<div class="w-full flex flex-col gap-2">
    <div class="flex flex-col md:flex-row justify-between ">
        <div class="flex flex-col md:flex-row md:items-center gap-2.5 w-full md:w-1/2">
            <span class="flex text-sm font-medium text-gray-500">Total Available: {{ $audits->total() }}</span>
        </div>
        <!-- Flatpicker date-range -->
        <div wire:ignore class="flatpickr relative flex-grow sm:flex-grow-0" style="min-width: 17.5rem;"
            id="created_at_date_search">
            <button type="button" data-toggle class="absolute inset-y-0 left-0 flex items-center p-2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </button>

            <input type="text" placeholder="Recorded Date" data-input
                class="border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 pl-10 w-full text-gray-500 text-sm"
                style="padding-right: 3.5rem;">

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 text-gray-500">
                <button type="button" data-clear class="pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <button type="button" onclick="setRecordedDateStr();">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M8.25 10.875a2.625 2.625 0 115.25 0 2.625 2.625 0 01-5.25 0z" />
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.125 4.5a4.125 4.125 0 102.338 7.524l2.007 2.006a.75.75 0 101.06-1.06l-2.006-2.007a4.125 4.125 0 00-3.399-6.463z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-2">
        <div class="flex px-4 py-2.5 bg-gray-700 border rounded shadow">
            <div class="flex-1 grid grid-rows-1 md:grid-cols-7 gap-4 text-sm font-semibold text-gray-50">
                <div class="flex  sm:hidden items-center text-base">
                    Activities Details
                </div>
                <div class="hidden sm:flex items-center justify-center">
                    ID
                </div>
                <div class="hidden sm:flex items-center justify-center">
                    Caused By
                </div>
                <div class="hidden sm:flex items-center justify-center">
                    Event
                </div>
                <div class="hidden sm:flex items-center justify-center">
                    Resource
                </div>
                <div class="hidden sm:flex items-center justify-center">
                    IP Address
                </div>
                <div class="hidden sm:flex items-center justify-center">
                    Recorded Date
                </div>
                <div class="hidden sm:flex items-center justify-center">
                    Recorded Time
                </div>
            </div>
        </div>
        <div class="divide-y-1 divide-gray-200">
            @forelse ($audits as $audit)
                <div class="w-full flex flex-col border-t border-r border-b ">
                    <div class="flex-1 grid grid-cols-3 md:grid-cols-7 bg-white gap-0 sm:gap-4 p-4 border-l-2 rounded px-2 py-1">
                        <div class="hidden sm:flex text-gray-500 justify-center items-center">
                            <span class="text-sm text-blue-700 font-semibold hover:text-indigo-400">{{ $audit->id }}</span>
                        </div>
                        <div class="sm:flex justify-center text-gray-500">
                            <span class="text-xs sm:text-sm font-bold">{{ $audit->causerName() }}</span>
                        </div>
                        <div class="sm:flex justify-center text-gray-500">
                            <span class="text-xs sm:text-sm font-bold">{{ $audit->event() }}</span>
                        </div>
                        <div class="sm:flex justify-center text-gray-500">
                            <span class="text-xs font-bold">{{ $audit->resourceType() }}</span>
                        </div>
                        <div class="hidden sm:flex justify-center text-gray-500">
                            <span class="text-xs font-semibold">{{ $audit->ip() }}</span>
                        </div>
                        <div class="hidden sm:flex justify-center text-gray-500">
                            <span class="text-xs font-semibold">{{ $audit->created_at->format('d-M-Y') }}</span>
                        </div>
                        <div class="hidden sm:flex justify-center text-gray-500">
                            <span class="text-xs font-semibold">{{ $audit->updated_at->format('H:i:s a') }}</span>
                        </div>
                    </div>
                </div>

            @empty
                <div class="flex p-4 items-center justify-center bg-white">
                    <x-empty-state message="No Blocks Found" />
                </div>
            @endforelse
        </div>
    </div>
    <div class="mt-4">
        {{ $audits->links() }}
    </div>
</div>
@once
    @push('scripts')
        <script>
            let recordedDateStr = '';
            flatpickr("#created_at_date_search", {
                wrap: true,
                dateFormat: "d/m/Y",
                mode: "range",
                onChange: function(selectedDates, dateStr, instance) {
                    recordedDateStr = dateStr;
                },
            });

            function setRecordedDateStr() {
                @this.set('recordedDateStr', recordedDateStr);
            }
        </script>
    @endpush
@endonce
