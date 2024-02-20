<div class="flex flex-col w-full gap-2">
    <div class="flex flex-col gap-2.5 md:flex-row justify-between">
        <div class="flex flex-col md:flex-row md:items-center gap-2.5 w-full md:w-1/2">
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <input type="text" name="search" id="search" wire:model.live="searchItem" class="block w-full px-10 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search User" autocomplete="off">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <span class="text-yellow-700 animate-spin" wire:loading>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </div>
            <span class="flex text-sm font-medium text-gray-500">Total Available: {{ $users->total() }}</span>
        </div>
        <div class="flex flex-row gap-2">
            <a href="{{ route('invitations.index') }}" class="flex items-center gap-2 px-2 py-1 text-gray-500 border rounded-md bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                </svg>
                <span class="hidden sm:block">Invited Users</span>
            </a>
            {{-- <a href="{{ url('offices/users') }}" class="flex items-center gap-2 px-2 py-1 text-gray-100 bg-gray-500 border rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z" clip-rule="evenodd" />
                    <path d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                </svg>
                <span class="hidden sm:block">Office Users</span>
            </a> --}}
        </div>
    </div>
    <div class="flex px-4 py-2.5 bg-gray-700 border rounded shadow">
        <div class="grid flex-1 grid-rows-1 gap-4 text-sm font-semibold text-gray-50 md:grid-cols-8">
            <div class="flex items-center text-base sm:hidden">
                User Details
            </div>
            <div class="items-center hidden col-span-2 pl-1 sm:flex ml-11">
                Name
            </div>
            <div class="items-center hidden col-span-2 sm:flex">
                Resources
            </div>
            <div class="items-center justify-center hidden col-span-1 sm:flex">
                Role
            </div>
            <div class="items-center justify-center hidden col-span-1 sm:flex">
                Status
            </div>
            <div class="items-center justify-center hidden col-span-2 sm:flex">
                Actions
            </div>
        </div>
    </div>
    @forelse ($users as $user)
    @livewire('users.user-list-item', ['user' => $user], key('user'.'-'.$user->id))
    @empty
    <div class="flex items-center justify-center p-4 bg-white">
        <x-empty-state message="No Users Found" />
    </div>
    @endforelse
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>

@once
@push('scripts')
<script>
    function generateForgotPasswordLink(livewireComponent) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Confirm if you are requesting a password reset for the user",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, confirm!'
        }).then((result) => {
            if (result.isConfirmed) {
                livewireComponent.forgotPassword().then(
                    (response) => {
                        if (response.status == 200) {
                            const resetPasswordLinkHtml = `
                                <div class="mb-3 bg-black rounded-md">
                                    <div class="relative flex items-center justify-between px-4 py-2 font-sans text-xs text-gray-200 bg-gray-800 rounded-t-md">
                                        <span>Password Reset Link</span>
                                        <button class="flex w-20 gap-2 ml-auto" onclick='copyForgotPasswordLink(this, "${response.resetUrl}")'>
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                            </svg>
                                            Copy Link
                                        </button>
                                    </div>
                                    <div class="px-4 py-3 text-start">
                                        <kbd class="text-sm" style="color: rgb(248 250 252); overflow-wrap: anywhere;">${response.resetUrl}</kbd>
                                    </div>
                                </div>
                                <p class="mb-3 text-red-500" style="font-size: medium;">${response.resetUrlExpireText}</p>`;

                            Swal.fire({
                                title: `<span style='font-size: 1rem';>Password Reset Link for ${response.user_name}</span>`,
                                html: resetPasswordLinkHtml,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                allowEnterKey: false,
                                showCloseButton: true,
                                showConfirmButton: false,
                            });
                        } else if (response.status == 224)
                            Swal.fire({
                                title: response.message,
                                text: "You recently generated a forgot-password link.",
                                icon: 'warning',
                            });
                    },
                );
            }
        })
    }

    function copyForgotPasswordLink(element, text) {
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
        const copiedtxt = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#22c55e" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                            </svg>
                            <span class="font-bold">Copied!</span>`;

        element.innerHTML = copiedtxt;
        setTimeout(() => {
            element.innerHTML = copytxt;
        }, timer);

        // Swal.fire({
        //     toast: true,
        //     icon: 'success',
        //     title: 'Link copied to clipboard',
        //     position: 'bottom-end',
        //     showConfirmButton: false,
        //     timer: timer,
        //     timerProgressBar: true
        // });
    }

    // Confirm box for De-Activate the user account
    const showDeactiveAccountConfirm = (livewireComponent) => {
        Swal.fire({
            title: 'Are you sure?',
            text: "Confirm if you want to De-Activate the user account",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, confirm!'
        }).then((result) => {
            if (result.isConfirmed) {
                livewireComponent.DeactiveUser().then(
                    () => { // code if successful
                        Swal.fire({
                            toast: true,
                            icon: 'success',
                            title: 'De-Activated user account.',
                            position: 'top-end',
                            background: '#334155',
                            color: '#f1f5f9',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        });
                    },
                    function(error) {
                        /* code if some error */
                    }
                );
            }
        })
    };

    // Confirm box for Activate the user account
    const showActiveAccountConfirm = (livewireComponent) => {
        Swal.fire({
            title: 'Are you sure?',
            text: "Confirm if you want to Activate the user account",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, confirm!'
        }).then((result) => {
            if (result.isConfirmed) {
                livewireComponent.ActiveUser().then(
                    () => { // code if successful
                        Swal.fire({
                            toast: true,
                            icon: 'success',
                            title: 'Activated user account.',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true
                        });
                    },
                    function(error) {
                        /* code if some error */
                    }
                );
            }
        })
    };
</script>
@endpush
@endonce
