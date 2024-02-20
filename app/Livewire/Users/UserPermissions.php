<?php

namespace App\Livewire\Users;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserPermissions extends Component
{
    public User $user;
    public $modelPermissions = [];
    public $userPermissions = [];
    public $userRoleId;

    public function syncUserPermissions()
    {
        $this->user->syncPermissions(Permission::whereIn('id', $this->userPermissions)->get());

        session()->flash('status', 'success');
        session()->flash('message', "User Permissions Updated");
        session()->flash('body', $this->user->name);

        //Return to the Users Index
        return redirect(route('users.index'));
    }

    public function mount(User $user)
    {
        $this->user = $user;
        $this->userRoleId = $this->user->roles->first() ? $this->user->roles->first()->id : '';

        $modelPermissions = DB::table('permissions')->join('role_has_permissions', 'role_has_permissions.permission_id', 'permissions.id')
            ->where("role_has_permissions.role_id", $this->userRoleId)
            ->select('*', DB::raw("substring(name from '\s(.*)') as model"))->orderBy('permissions.name')->get()->groupBy('model')->toArray();

        foreach ($modelPermissions as $modelKey => $model) {
            foreach ($model as $permission) {
                $this->modelPermissions[$modelKey][] = array(
                    'id' => $permission->id,
                    'name' => $permission->name,
                );
            }
        }
        $this->userPermissions = $this->user->getDirectPermissions()->pluck('id')->toArray();
    }

    public function render()
    {
        return view('livewire.users.user-permissions');
    }
}
