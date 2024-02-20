<div class="flex flex-col w-full gap-2">
    <div class="flex flex-col gap-2.5 md:flex-row justify-between">
        <div class="flex flex-col md:flex-row md:items-center gap-2.5 w-full md:w-1/2">
            {{-- <x-search wire:model.live="searchItem" placeholder="Search by name, mobile, email, designation." /> --}}
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <input type="text" name="search" id="search" wire:model.live="searchItem"
                    class="block w-full px-10 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Search User" autocomplete="off">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <span class="text-yellow-700 animate-spin" wire:loading>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </div>
            <span class="flex text-sm font-medium text-gray-500">Total Available: {{ $invitations->total() }}</span>
        </div>

    </div>
    <div class="flex px-4 py-2.5 bg-gray-50 border rounded shadow">
        <div class="grid flex-1 grid-rows-1 gap-4 text-sm font-semibold text-gray-700 md:grid-cols-9">
            <div class="flex items-center text-base sm:hidden">
                invitation Details
            </div>
            <div class="items-center hidden col-span-2 pl-1 sm:flex">
                Name
            </div>
            <div class="items-center hidden col-span-2 sm:flex">
                Resources
            </div>
            <div class="items-center justify-center hidden col-span-1 sm:flex">
                Role
            </div>
            <div class="items-center justify-center hidden col-span-2 sm:flex">
                Link
            </div>
            <div class="items-center justify-center hidden col-span-1 sm:flex">
                Status
            </div>
            <div class="items-center justify-center hidden col-span-1 sm:flex">
                Actions
            </div>
        </div>
    </div>
    @forelse ($invitations as $invitation)
        <div class="flex flex-col w-full border-t border-b border-r rounded shadow">
            <div
                class="grid grid-cols-none grid-rows-1 gap-1 px-3 py-2 bg-white border-l-4 border-indigo-500 rounded md:grid-cols-9 md:grid-rows-none md:gap-4">
                <div class="flex items-center col-span-2">
                    <div class="flex-shrink-0 w-8 h-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-0 ml-2">
                        <div class="text-sm font-semibold text-blue-600 break-all">
                            {{ $invitation->name }}
                        </div>
                        <div class="text-xs font-semibold text-green-500 break-all">
                            {{ $invitation->designation }}
                        </div>
                        <div class="text-xs text-gray-500 break-all">
                            {{ $invitation->email }}
                        </div>
                        <div class="text-xs text-gray-500">
                            {{ $invitation->mobile }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 ml-2">
                        <div
                            class="flex flex-col items-center justify-center col-span-2 text-xs text-gray-500 sm:hidden">
                            @if ($invitation->status == 'Pending')
                                <button onclick="copyInvitationLink(this,`{!! $invitation->invitation_link !!}`)"
                                    data-tippy-content="Copy Link"
                                    class="flex justify-center items-center bg-gray-100 text-[0.8125rem] font-medium leading-5 text-gray-700 shadow-sm px-2 py-1.5 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                    </svg>
                                </button>
                                <div class="flex flex-wrap mt-2 text-xs cursor-default"
                                    data-tippy-content="Expiry Date">
                                    <span class="font-semibold">expires on:</span> &nbsp;<span
                                        class="font-bold text-red-400">{{ date('d/m/Y', strtotime($invitation->expiry_at)) }}</span>
                                </div>
                            @endif
                        </div>  
                    </div>
                </div>
        

                <div class="flex-col justify-center hidden col-span-2 text-xs text-gray-500 sm:flex">
                    <ul>
                        @foreach ($invitation->resources_arr as $resource)
                            <li class="mb-1">{{ $resource['type'] }} - {{ $resource['name'] }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="items-center justify-center hidden col-span-1 sm:flex">
                    <span
                        class="px-3 py-1 text-xs font-bold text-center text-blue-800 bg-blue-100 rounded-full leading-2">
                        {{ $invitation->role?->name }}
                    </span>
                </div>

                <div class="flex-col items-center justify-center hidden col-span-2 text-xs text-gray-500 sm:flex">
                    @if ($invitation->status == 'Pending')
                        <button onclick="copyInvitationLink(this,`{!! $invitation->invitation_link !!}`)"
                            data-tippy-content="Copy Link"
                            class="flex justify-center items-center bg-gray-100 text-[0.8125rem] font-medium leading-5 text-gray-700 shadow-sm px-2 py-1.5 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>
                            <span class="w-16 font-bold">Copy Link</span>
                        </button>

                        <div class="flex flex-wrap mt-2 text-xs cursor-default" data-tippy-content="Expiry Date">
                            <span class="font-semibold">expires on:</span> &nbsp;<span
                                class="font-bold text-red-400">{{ date('d/m/Y', strtotime($invitation->expiry_at)) }}</span>
                        </div>
                    @endif
                </div>

                <div class="items-center justify-center hidden col-span-1 sm:flex">
                    @if ($invitation->status == 'Pending')
                        <div class="bg-yellow-400 w-2 h-2 rounded-full mr-1.5"></div>
                    @elseif($invitation->status == 'Accepted')
                        <div class="bg-green-400 w-2 h-2 rounded-full mr-1.5"></div>
                    @elseif($invitation->status == 'Expired')
                        <div class="bg-red-400 w-2 h-2 rounded-full mr-1.5"></div>
                    @endif
                    <span class="text-sm font-semibold text-gray-800">{{ $invitation->status }}</span>
                </div>

                <div class="items-center justify-center hidden col-span-1 sm:flex">
                    @if ($invitation->status != 'Accepted')
                        <button type="button" onclick="ConfirmDeleteInvitation('{{ $invitation->id }}')"
                            class="flex rounded-full p-2.5 bg-red-50 text-red-500" data-tippy-content="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    @empty
        <div class="flex items-center justify-center p-4 bg-white">
            <x-empty-state message="No invitations Found" />
        </div>
    @endforelse
    <div class="mt-4">
        {{ $invitations->links() }}
    </div>
    @once
        @push('scripts')
            <script>
                function copyInvitationLink(element, text) {
                    // create a temporary element
                    const tempElement = document.createElement("textarea");
                    // set its value to the text to copy
                    tempElement.value = text;
                    // add the element to the DOM
                    document.body.appendChild(tempElement);
                    // select the text
                    tempElement.select();
                    // copy the text to the clipboard
                    document.execCommand("copy");
                    // remove the temporary element
                    document.body.removeChild(tempElement);

                    const timer = 1500; //miliseconds

                    const copytxt = element.innerHTML;
                    const copiedtxt = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#22c55e" class="w-5 h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                    <span class="w-16 font-bold">Copied!</span>`;

                    element.innerHTML = copiedtxt;
                    setTimeout(() => {
                        element.innerHTML = copytxt;
                    }, timer);
                }

                // Confirm box for Deleting Invitation.
                const ConfirmDeleteInvitation = (invitation_id) => {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Confirm if you want to delete the invitation",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, confirm!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            @this.delete(invitation_id).then(
                                (response) => {
                                    if (response.status == 200)
                                        Swal.fire({
                                            toast: true,
                                            icon: 'success',
                                            title: 'Invitation Deleted.',
                                            position: 'top-end',
                                            background: '#334155',
                                            color: '#f1f5f9',
                                            showConfirmButton: false,
                                            timer: 1500,
                                            timerProgressBar: true
                                        });
                                    else if (response.status == 224)
                                        Swal.fire({
                                            title: 'Error in Deleting Invitation',
                                            text: "The invitation cannot be deleted",
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
