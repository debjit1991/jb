<?php

namespace App\Livewire\Users;

use App\Models\Invitation;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUserForm extends Component
{
    public $roles;
    public $resource_types = [];
    public $resource_type;
    public $resources;
    public $resource;

    public $selected_resources;

    public Invitation $invitation;

    protected $rules = [
        'invitation.name'        => 'required|regex:/^[A-Za-z0-9\s\(\)\.\-]+$/|min:3|max:255',
        'invitation.email'       => 'required|email|unique:users,email',
        'invitation.designation' => 'required|regex:/^[A-Za-z0-9\s\(\)\.\-]+$/|min:3|max:255',
        'invitation.mobile'      => 'required|digits:10|unique:profiles,mobile',
        'invitation.role_id'     => 'required|ulid',
    ];

    protected $messages = [
        'invitation.name.regex'        => 'The name consists of only letters, spaces, parentheses, hyphens, and periods.',
        'invitation.designation.regex' => 'The designation consists of only letters, spaces, parentheses, hyphens, and periods.',
    ];

    public function mount()
    {
        $this->invitation = new Invitation();
        $this->roles = Role::forAuthUser()->orderBy('id')->get();
        
        $this->resource_types = [];
        $this->resources = collect([]);
        $this->selected_resources = collect([]);
    }

    public function render()
    {
        return view('livewire.users.create-user-form');
    }

    public function updatedInvitationRoleId($value)
    {
        $this->resource_types = $value ? $this->roles->where('id', $value)->first()->resource_types_arr : [];
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

    public function saveUser()
    {
        if ($this->selected_resources->isEmpty()) {
            return $this->addError('error_resourses', 'Please add at least one resource. [To add resources click \'+\' button]');
        }

        $this->validate();

        //Attach resources
        $resources = $this->selected_resources->map(function ($item) {
            return [
                'resource_type' => $item['resource_type'],
                'resource_id'   => $item['resource_id'],
            ];
        })->all();

        $this->invitation->resources = $resources;
        $this->invitation->link = Hash::make(now()->timestamp . uniqid());
        $this->invitation->invited_by = Auth::user()->id;
        $this->invitation->expiry_at = date('Y-m-d', strtotime("+15 days"));
        $this->invitation->save();

        return redirect()->route('invitations.index')->with([
            'status'    => "success",
            'message'   => $this->invitation->name,
            'body'      => "User Invitation Link Created.",
        ]);
    }
}
