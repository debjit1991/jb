<?php

namespace App\Livewire\Users;

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Models\UserResource;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Database\Query\Builder;

class EditUserForm extends Component
{
    public $roles;
    public $role;
    public $resource_types = [];
    public $resource_type;
    public $resources;
    public $resource;

    public $selected_resources;

    public User $user;
    public Profile $profile;

    protected function rules()
    {
        return [
            'user.name'             => 'required|regex:/^[A-Za-z0-9\s\(\)\.\-]+$/|min:3|max:255',
            'user.email'            => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user->id, 'id')],
            'profile.designation'   => 'required|regex:/^[A-Za-z0-9\s\(\)\.\-]+$/|min:3|max:255',
            'profile.mobile'        => ['required', 'digits:10', Rule::unique('profiles', 'mobile')->ignore($this->user->id, 'user_id')],
            'role'                  => 'required',
        ];
    }

    protected $messages = [
        'user.name.regex'        => 'The name consists of only letters, spaces, parentheses, hyphens, and periods.',
        'user.designation.regex' => 'The designation consists of only letters, spaces, parentheses, hyphens, and periods.',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->profile = $this->user->profile;
        $this->roles = Role::forAuthUser()->orderBy('id')->get();
        $role = $user->roles()->first();
        $this->role = $role?->id;
        $this->resource_types = $role ? $role->resource_types_arr : [];
        $this->resources = collect([]);
        $this->selected_resources = $user->attached_to->map(function ($resource) {
            return [
                'id' => $resource->id,
                'resource_id' => $resource->resource_id,
                'resource_name' => $resource->resource_type::find($resource->resource_id)->name,
                'resource_type' => $resource->resource_type,
                'resource_type_name' => explode("\\", $resource->resource_type)[2],
            ];
        });
    }

    public function render()
    {
        return view('livewire.users.edit-user-form');
    }

    public function updatedRole($value)
    {
        $this->resource_types = $value ? $this->roles->firstWhere('id', $value)->resource_types_arr : [];
        $this->resource_type = '';
        $this->resources = collect([]);
        $this->resource = '';

        $this->clearAllResources();
    }

    public function updatedResourceType($value)
    {
        $this->resources = $value ? $value::byAuthUser()->get() : collect([]);
        $this->resource = '';
    }

    public function addResource()
    {
        $this->validate([
            'resource_type' => 'required',
            'resource'      => 'required',
        ], [
            'resource_type.required' => 'Select resource type.',
            'resource.required'      => 'Select resource.',
        ]);

        if ($this->selected_resources->where('resource_id',  $this->resource)->where('resource_type', $this->resource_type)->isNotEmpty()) {
            return $this->addError('error_resourses', 'Each Resource should be Unique.');
        }

        $this->selected_resources->push([
            'resource_id' => $this->resource,
            'resource_name' => $this->resource_type::find($this->resource)->name,
            'resource_type' => $this->resource_type,
            'resource_type_name' => explode("\\", $this->resource_type)[2],
        ]);
    }

    public function clearAllResources()
    {
        $this->selected_resources = collect([]);
    }

    public function removeResource($index)
    {
        $this->selected_resources->pull($index);
    }

    public function updateUser()
    {
        if ($this->selected_resources->isEmpty()) {
            return $this->addError('error_resourses', 'Please add at least one resource. [To add resources click \'+\' button]');
        }

        $this->validate();

        //Update User


        $this->user->save();

        // Upadte profile
        $this->profile->save();

        // Syncing user role
        $this->user->syncRoles($this->roles->firstWhere('id', $this->role));

        //Update user resources
        $present_resources_ids = $this->selected_resources->whereNotNull('id')->pluck('id'); // present Resources.
        UserResource::destroy($this->user->attached_to->whereNotIn('id', $present_resources_ids)->pluck('id')); // delete Missing Resources.
        $newResources = $this->selected_resources->whereNull('id'); // new Resources.

        foreach ($newResources as $resource) {
            UserResource::create([
                'user_id' => $this->user->id,
                'resource_type' => $resource['resource_type'],
                'resource_id' => $resource['resource_id'],
            ]);
        }

        session()->flash('status', 'success');
        session()->flash('message', 'User Updated');
        session()->flash('body', $this->user->name);

        //Return to the Users Index
        return redirect(route('users.index'));

        return redirect()->route('users.index')->with([
            'status'    => "success",
            'message'   => $this->user->name,
            'body'      => "User Updated.",
        ]);
    }
}
