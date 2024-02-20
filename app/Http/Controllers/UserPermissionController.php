<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserPermissionController extends Controller
{
    public function edit(User $user)
    {
        return view('users.permissions', [
            'user'  => $user
        ]);
    }
}
