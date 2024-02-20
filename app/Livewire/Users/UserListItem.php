<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Password;
use Livewire\Component;

class UserListItem extends Component
{
    public User $user;
    public $resourcesShow = false;

    public function ActiveUser()
    {
        $this->user->is_active = true;
        $this->user->save();
    }

    public function DeactiveUser()
    {
        $this->user->is_active = false;
        $this->user->save();
    }

    public function showResources()
    {
        $this->resourcesShow = true;
    }

    public function forgotPassword()
    {
        if (Password::getRepository()->recentlyCreatedToken($this->user)) {
            return ['status' => 224, 'message' => __(Password::RESET_THROTTLED)];
        }

        $token = Password::getRepository()->create($this->user);

        $resetUrl = url(route('password.reset', [
            'token' => $token,
            'email' => $this->user->getEmailForPasswordReset(),
        ], false));

        $resetUrlExpireText = 'This password reset link will expire in ' . config('auth.passwords.' . config('auth.defaults.passwords') . '.expire') . ' minutes.';

        return ['status' => 200, 'resetUrl' => $resetUrl, 'resetUrlExpireText' => $resetUrlExpireText, 'user_name' => $this->user->name];
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.users.user-list-item');
    }
}
