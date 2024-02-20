<?php

namespace App\Livewire\Workflow;
use App\Livewire\Modal;
use App\Models\WorkflowStep;
use App\Models\Scheme;
use App\Models\Role;
use App\Models\Permission;

use Livewire\Component;

class CreateWorkflowModal extends Modal
{
   
    public $step_name;
    public $parent_id;
    public $role_id;
    public $show = false;
    public $parent_step_list = [];
    public $role_list = [];
    protected $listeners = [
        'show' => 'showModal'
    ];

    protected $rules = [
        'step_name'       => 'required|min:3|max:255',
        'parent_id' => 'required',
        'role_id' => 'required'
    ];

    protected $messages = [
        // 'lg_code.digits_between' => 'The lg code must be less than or equal to 4 digits',
        // 'ref_code.digits_between' => 'The ref code must be less than or equal to 7 digits',
        'step_name.regex'   => 'The Step Name consists of only letters and spaces.',
    ];

    public function mount()
    {
        $this->parent_step_list = WorkflowStep::get();
        $this->role_list = Role::get();
    }

    public function showModal()
    {

        $this->show = true;
        // dd($this->show);
    }

    public function storeWorkflow()
    {
        $this->validate();
        $scheme_arr=Scheme::first();
        $slug = str_replace(' ', '-', trim($this->step_name));
        $permission_name=strtoupper(trim($scheme_arr->short_code)).'_'.strtoupper($slug);
        $permission = Permission::create(['name' => $permission_name,'guard' => 'web']);
        $role = Role::find($this->role_id);
        $role->givePermissionTo($permission);
        $workflows = WorkflowStep::create([
            'step_name' => $this->step_name,
            'parent_id' => $this->parent_id,
            'scheme_id' => $scheme_arr->id,
            'role_id' => $this->role_id,
            'permissions_id' => $permission->id,
        ]);
        $this->close();
        @session()->flash('status', 'success');
        @session()->flash('message', 'Workflow Step Created');
        @session()->flash('body', $workflows->name);
        return redirect()->route('workflows.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
        $this->reset(['step_name', 'parent_id','role_id']);
    }

    public function render()
    {
        return view('livewire.workflow.create-workflow-modal');
    }
}
