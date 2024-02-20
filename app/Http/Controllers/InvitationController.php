<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Role;
use App\Models\User;
use App\Models\UserResource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invitations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['password' => base64_decode(base64_decode($request->password))]);
        $request->merge(['password_confirmation' => base64_decode(base64_decode($request->password_confirmation))]);
        $request->validate([
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
        ]);

        $invitation = Invitation::where('link', $request->invitation_token)->firstOrFail();
        $invitation->where('link', $request->invitation_token)->update(['status' => 'Accepted', 'accepted_at' => date("Y-m-d")]);

        $user = User::create([
            'name'    => $invitation->name,
            'email' => $invitation->email,
            'password' => Hash::make($request->password),
        ]);

        //Create a profile
        $user->profile()->create([
            'designation' => $invitation->designation,
            'mobile' => $invitation->mobile,
        ]);

        $role = Role::find($invitation->role_id);

        $user->assignRole($role);
        $user->givePermissionTo($role->permissions);

        //Attach a resource
        foreach ($invitation->resources as $resource) {
            UserResource::create([
                'user_id' => $user->id,
                'resource_type' => $resource['resource_type'],
                'resource_id' => $resource['resource_id'],
            ]);
        }

        return redirect($invitation->getLink());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }

    public function invitation_handle(Request $request)
    {
        $invitation_token = $request->get('invitation_token');
        $invitation = Invitation::where('link', $invitation_token)->firstOrFail();

        return view('invitations.show', compact('invitation'));
    }
}
