<?php

namespace App\Livewire\Workflow;
use App\Livewire\Modal;
use App\Models\WorkflowStep;
use App\Models\Scheme;
use App\Models\Role;
use Livewire\Component;

class CreateRoleModal extends Modal
{
   
    public $role_name;
    public $show = false;
    protected $listeners = [
        'show' => 'showModal'
    ];

    protected $rules = [
        'role_name'       => 'required|min:3|max:255',
    ];

    protected $messages = [
        // 'lg_code.digits_between' => 'The lg code must be less than or equal to 4 digits',
        // 'ref_code.digits_between' => 'The ref code must be less than or equal to 7 digits',
        'role_name.regex'   => 'The Role Name consists of only letters and spaces.',
    ];

    public function mount()
    {
        
        //$this->role_list = Role::get();
    }

    public function showModal()
    {

        $this->show = true;
        // dd($this->show);
    }

    public function storeRole()
    {
        $this->validate();
        $roles = Role::create([
            'name' => $this->role_name,
        ]);

        $this->close();

        @session()->flash('status', 'success');
        @session()->flash('message', 'Role Created');
        @session()->flash('body', $roles->name);
        return redirect()->route('workflows.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
        $this->reset(['role_name']);
    }

    public function render()
    {
        return view('livewire.workflow.create-role-modal');
    }
}
