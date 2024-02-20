

    <div class="flex flex-col gap-2">
        <div class="flex px-4 py-2.5 bg-gray-700 border rounded shadow">
            <div class="flex-1 grid grid-rows-1 md:grid-cols-4 gap-4 text-sm font-semibold text-gray-50">
                <div class="flex  sm:hidden items-center text-base">
                    Workflow Details
                </div>
                <div class="hidden sm:flex items-center">
                  Step  Name
                </div>
                <div class="hidden sm:flex items-center">
                    Parent 
                </div>
                <div class="hidden sm:flex items-center">
                    Attached Role
                </div>
                
                <div class="hidden sm:flex items-center">
                    Actions
                </div>
            </div>
        </div>
        <div class="divide-y-1 divide-gray-200">
            @forelse ($workflows as $workflow)
                <div class="w-full flex flex-col border-t border-r border-b rounded shadow">
                    <div class="flex-1 grid grid-rows-1 md:grid-cols-4 bg-white p-4 border-l-2 rounded px-2 py-1">
                        <div class="sm:hidden flex w-full">
                            <div class="flex flex-col justify-center text-gray-500 w-4/5">
                                <span class="text-sm font-bold hover:text-indigo-400 mt-1">{{ $workflow->step_name }}</span>
                            </div>
                            <div class="flex gap-2 w-1/5">
                                {{-- @can('update district') --}}
                                <button
                                    class="bg-blue-50 text-blue-800 p-1.5 rounded-full border border-blue-300 mb-2 mt-2"
                                    wire:click="openEditForm('{{$workflow->id}}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-4 h-4">e
                                        <path
                                            d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </button>
                                {{-- @endcan --}}

                                {{-- @can('delete district') --}}
                                <button type="button" onclick="confirmDeleteWorkflow('{{ $workflow->id }}')"
                                    class="bg-red-50 text-red-600 p-1.5 rounded-full border border-red-300 mb-2 mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill-rule="evenodd"
                                            d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                {{-- @endcan --}}
                            </div>
                        </div>
                        <div class="hidden sm:flex flex-col justify-center text-gray-500">
                            <span class="text-sm font-bold mt-1">{{ $workflow->step_name }}</span>
                        </div>
                        <div class="hidden sm:flex flex-col justify-center text-gray-500 ml-4">
                            <span class="text-xs font-bold mt-1">{{ isset($workflow->parent->step_name) ? $workflow->parent->step_name : '---' }}</span>
                        </div>
                        <div class="hidden sm:flex flex-col justify-center text-gray-500 ml-4">
                            <span class="text-xs font-bold mt-1">{{ isset($workflow->role->name) ? $workflow->role->name : '---' }}</span>
                        </div>
                       
                        <div class="hidden sm:flex gap-2">
                            {{-- @can('update district') --}}
                            <button class="bg-blue-50 text-blue-800 p-1.5 rounded-full border border-blue-300 mb-2 mt-2"
                            wire:click="openEditForm('{{$workflow->id}}')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path
                                        d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                </svg>
                            </button>
                            {{-- @endcan --}}

                            {{-- @can('delete district') --}}
                            <button type="button" onclick="confirmDeleteWorkflow('{{ $workflow->id }}')"
                                class="bg-red-50 text-red-600 p-1.5 rounded-full border border-red-300 mb-2 mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            {{-- @endcan --}}
                        </div>
                    </div>
                </div>

            @empty
                <div class="flex p-4 items-center justify-center bg-white">
                    <span> not found!</span>
                    {{-- <x-empty-state message="No Blocks Found" /> --}}
                </div>
            @endforelse
        </div>
    </div>
   

    @once
        @push('scripts')
            <script>
                // Confirm box for Deleting District.
                const confirmDeleteWorkflow = (id) => {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Confirm if you want to delete the Workflow",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, confirm!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            @this.deleteWorkflow(id).then(
                                (response) => {
                                    if (response.status == 200)
                                        Swal.fire({
                                            toast: true,
                                            icon: 'success',
                                            title: 'Workflow Deleted.',
                                            position: 'top-end',
                                            // background: '#334155',
                                            // color: '#f1f5f9',
                                            showConfirmButton: false,
                                            timer: 1500,
                                            timerProgressBar: true
                                        });
                                    else if (response.status == 224)
                                        Swal.fire({
                                            title: 'Error in Deleting Workflow',
                                            text: "Workflow can not be deleted",
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
</div>
