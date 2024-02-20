<?php

namespace App\Livewire\Permissions;

use App\Models\Permission;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class PermissionList extends Component
{
    use WithPagination;

    public $searchItem;

    #[On('permission-created')]
    public function refresh()
    {
    }

    public function updatePermission($name, Permission $permission)
    {
        // if ($permission->users()->count() || $permission->roles()->count()) {
        //     $this->dispatchBrowserEvent('permission-not-updated', ['name' => $permission->name]);
        // } else {
        $permission->update(['name' => $name]);
        $this->dispatch('permission-updated', name: $permission->name);
        // }
    }

    public function deletePermission(Permission $permission)
    {
        if ($permission->users()->count() || $permission->roles()->count()) {
            return ['status' => 224];
        } else {
            $permission->delete();
            return ['status' => 200];
        }
    }

    public function updatingSearchItem()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.permissions.permission-list', [
            'permissions' => Permission::where('name', 'ILIKE', "%{$this->searchItem}%")
                ->withCount(['roles', 'users'])
                ->paginate(15)
        ]);
    }
}
