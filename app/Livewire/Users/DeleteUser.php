<?php

namespace App\Livewire\User;

use App\Models\Profile;
use App\Models\User;
use App\Models\UserResource;
use Exception;
use Livewire\Component;

class DeleteUser extends Component
{
    public User $user;
    public $show;

    protected $listeners = [
        'user-delete'    => 'deleteUser'
    ];
    public function removeUser()
    {
        try {

            Profile::where('user_id', $this->user->id)->delete();
            UserResource::where('user_id', $this->user->id)->delete();

            $this->user->syncRoles();
            $this->user->syncPermissions();
            $this->user->delete();

            $this->show = false;

            return redirect(route('users.index'))->with([
                'status'    =>  'warning',
                'message'   =>  'User Deleted',
                'body'      =>  $this->user->name,
            ]);
        } catch (Exception $e) {
            return redirect(route('users.index'))->with([
                'status'    =>  'Error',
                'message'   =>  $e->getMessage(),
                'body'      =>  'User Cannot be Deleted',
            ]);
        }
    }

    public function deleteUser(User $user)
    {
        $this->user = $user;
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.users.delete-user');
    }
}
