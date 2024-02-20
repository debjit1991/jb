<div class="w-full flex flex-col gap-2">
    <div class="flex flex-col gap-2.5 md:flex-row justify-between">
        <div class="flex flex-col md:flex-row md:items-center gap-2.5 w-full md:w-1/2">
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <input type="text" name="search" id="search" wire:model.live="searchItem"
                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full px-10 sm:text-sm border-gray-300 rounded-md"
                    placeholder="Search Block Name" autocomplete="off">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <span class="text-yellow-700 animate-spin" wire:loading>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </div>
            <span class="flex text-sm font-medium text-gray-500">Total Available: {{ $blocks->total() }}</span>
        </div>
    </div>

    <div class="flex flex-col gap-2">
        <div class="flex px-4 py-2.5 bg-gray-700 border rounded shadow">
            <div class="flex-1 grid grid-rows-1 md:grid-cols-5 text-sm font-semibold text-gray-50">
                <div class="flex  sm:hidden items-center text-base">
                    Block Details
                </div>
                <div class="hidden sm:flex items-center">
                    Name
                </div>
                <div class="hidden sm:flex items-center">
                    Ref Code
                </div>
                <div class="hidden sm:flex items-center">
                    LG Code
                </div>
                <div class="hidden sm:flex items-center">
                    District Name
                </div>
                <div class="hidden sm:flex items-center ml-2">
                    Actions
                </div>
            </div>
        </div>

        <div class="divide-y-1 divide-gray-200">
            @forelse ($blocks as $block)
                <div class="flex flex-col border-t border-r border-b rounded shadow">
                    <div class="flex-1 grid grid-rows-1 md:grid-cols-5 bg-white p-4 border-l-2 rounded px-2 py-1">
                        <div class="sm:hidden flex w-full">
                            <div class="flex flex-col justify-center text-gray-500 w-4/5">
                                <span class="text-sm font-bold hover:text-indigo-400 mt-1">{{ $block->name }}</span>
                            </div>
                            <div class="flex gap-2 w-1/5">
                                <button
                                    class="bg-blue-50 text-blue-800 p-1.5 rounded-full border border-blue-300 mb-2 mt-2"
                                    wire:click="openEditForm('{{$block->id}}')">

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </button>

                                <button type="button" onclick="confirmDeleteBlock('{{ $block->id }}')"
                                    class="bg-red-50 text-red-600 p-1.5 rounded-full border border-red-300 mb-2 mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill-rule="evenodd"
                                            d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="hidden sm:flex flex-col justify-center text-gray-500">
                            <span class="text-sm font-bold hover:text-indigo-400 mt-1">{{ $block->name }}</span>
                        </div>

                        <div class="hidden sm:flex flex-col justify-center text-gray-500 ml-4">
                            <span class="text-xs font-bold mt-1">{{ $block->ref_code }}</span>
                        </div>

                        <div class="hidden sm:flex flex-col justify-center text-gray-500 ml-4">
                            <span class="text-xs font-bold mt-1">{{ $block->lg_code }}</span>
                        </div>
                        <div class="hidden sm:flex flex-col justify-center text-gray-500 ml-4">
                            <span class="text-xs font-bold mt-1">{{ $block->district->name }}</span>
                        </div>

                        <div class="hidden sm:flex gap-2">
                            <button class="bg-blue-50 text-blue-800 p-1.5 rounded-full border border-blue-300 mb-2 mt-2"
                               wire:click="openEditForm('{{$block->id}}')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                </svg>
                            </button>

                            <button type="button" onclick="confirmDeleteBlock('{{ $block->id }}')"
                                class="bg-red-50 text-red-600 p-1.5 rounded-full border border-red-300 mb-2 mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="flex p-4 items-center justify-center bg-white">
                    {{-- <x-empty-state message="No Blocks Found" /> --}}
                </div>
            @endforelse
        </div>
    </div>
    <div class="mt-4">
        {{ $blocks->links() }}
    </div>
</div>

@once
    @push('scripts')
        <script>
            // Confirm box for Deleting Block.
            const confirmDeleteBlock = (id) => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Confirm if you want to delete the Block",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, confirm!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.deleteBlock(id).then(
                            (response) => {
                                if (response.status == 200)
                                    Swal.fire({
                                        toast: true,
                                        icon: 'success',
                                        title: 'Block Deleted.',
                                        position: 'top-end',
                                        // background: '#334155',
                                        // color: '#f1f5f9',
                                        showConfirmButton: false,
                                        timer: 1500,
                                        timerProgressBar: true
                                    });
                                else if (response.status == 224)
                                    Swal.fire({
                                        title: 'Error in Deleting Block',
                                        text: "Block can not be deleted",
                                        icon: 'error',
                                    });
                            },
                        );
                    }
                })
            };
        </script>
    @endpush
@endonce
