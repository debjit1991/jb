<?php

namespace App\Livewire\Roles;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RoleList extends Component
{
    use WithPagination;

    public $searchItem;

    public function deleteRole(Role $role)
    {
        if ($role->users()->count()) {
            return ['status' => 224];
        } else {
            $role->delete();
            return ['status' => 200];
        }
    }

    public function updatingSearchItem()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.roles.role-list', [
            'roles' => Role::where('name', '!=', 'Super Admin')
                ->with('parentRole:id,name')
                ->withCount(['permissions', 'users'])
                ->where('name', 'ILIKE', "%{$this->searchItem}%")
                ->orderBy('id')
                ->paginate(10)
        ]);
    }
}
