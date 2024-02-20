<div>
    <div class="flex flex-col gap-2.5 md:flex-row justify-between mb-3">
        <div class="flex flex-col md:flex-row md:items-center gap-2.5 justify-between">
            <x-search wire:model.live.debounce.300ms="searchItem" placeholder="Search permission" />
            <span class="flex text-sm font-medium text-gray-500">Total Available: {{ $permissions->total() }}</span>
        </div>
        <div class="flex md:flex-row md:items-center gap-2.5 md:w-1/2 justify-end">
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs uppercase bg-gray-700 text-gray-50">
                <tr>
                    <th scope="col" class="px-4 py-3 max-w-[25rem]">
                        Permission Name
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Roles
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Users
                    </th>
                    <th scope="col" class="px-4 py-3 text-center max-w-[8rem]">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($permissions as $key => $permission)
                <tr wire:key="{{$permission->id}}" class="bg-white border-b hover:bg-indigo-100" x-data="{ in_edit: false }">
                    <th scope="row" class="px-4 py-3 font-medium text-indigo-900 whitespace-nowrap">
                        <span x-show="!in_edit">{{ $permission->name }}</span>

                        @can('update permission')
                        <div x-show="in_edit" class="flex items-center justify-start gap-2" style="display: none;">
                            <input type="text" name="permission" x-ref="permission" value="{{ $permission->name }}" class="w-full px-2 py-1 text-sm rounded leading-0">
                            <button type="button" @click="$wire.updatePermission($refs.permission.value, '{{ $permission->id }}'); in_edit=false" class="p-1 text-green-600 bg-green-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </button>
                            <button type="button" @click="in_edit = false" class="p-1 text-red-600 bg-red-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        @endcan
                    </th>
                    <td class="px-4 py-3 font-medium text-green-600">
                        {{ $permission->roles_count }}
                    </td>
                    <td class="px-4 py-3 font-medium text-gray-700">
                        {{ $permission->users_count }}
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex flex-col items-center gap-1">
                            <div class="flex items-center justify-center gap-2">
                                @can('update permission')
                                <button type="button" @click="in_edit = true" x-show="!in_edit" class="p-1 text-orange-600 rounded-full bg-orange-50" data-tippy-content="Edit">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="currentColor" opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.04 3.02001L8.16 10.9C7.86 11.2 7.56 11.79 7.5 12.22L7.07 15.23C6.91 16.32 7.68 17.08 8.77 16.93L11.78 16.5C12.2 16.44 12.79 16.14 13.1 15.84L20.98 7.96001C22.34 6.60001 22.98 5.02001 20.98 3.02001C18.98 1.02001 17.4 1.66001 16.04 3.02001Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.91 4.1499C15.58 6.5399 17.45 8.4099 19.85 9.0899" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                @endcan

                                @can('delete permission')
                                <button type="button" onclick="confirmDelete('{{ $permission->id }}')" class="p-1 text-gray-600 bg-gray-100 rounded-full" data-tippy-content="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                                @endcan
                            </div>
                            {{-- <p class="mt-0 text-xs leading-5 text-gray-500">{{ $permission->updated_at->diffForHumans() }}</p> --}}
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">
                        <div class="flex justify-center bg-white">
                            <div class="m-2">
                                <x-empty-state message="No Permissions Found" />
                            </div>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $permissions->links() }}
    </div>
</div>



@once
@push('scripts')
<script>
    window.addEventListener('permission-updated', event => {
        Swal.fire({
            toast: true,
            icon: 'success',
            title: `"${event.name}" permission updated!`,
            position: 'bottom',
            background: '#f7fee7',
            color: '#1e293b',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true
        });
    });

    window.addEventListener('permission-not-updated', event => {
        Swal.fire({
            title: "Error in Updating Permission",
            text: `"${event.detail.name}" permission can not be updated`,
            icon: 'error',
        });
    });

    const confirmDelete = (id) => {
        Swal.fire({
            title: 'Are you sure?',
            text: "Confirm if you want to delete this Permission",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, confirm!'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.deletePermission(id).then(
                    (response) => {
                        if (response.status == 200) {
                            Swal.fire({
                                toast: true,
                                icon: 'success',
                                title: 'Permission Deleted!',
                                position: 'bottom',
                                background: '#f7fee7',
                                color: '#1e293b',
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true
                            });
                        } else if (response.status == 224) {
                            Swal.fire({
                                title: 'Error in Deleting Permission',
                                text: "Permission can not be deleted",
                                icon: 'error',
                            });
                        }
                    },
                );
            }
        })
    };
</script>
@endpush
@endonce