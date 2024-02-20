<?php

namespace App\Livewire\Workflow;

use App\Models\WorkflowStep;
use App\Models\Role;
use Illuminate\Validation\Rule;
use App\Livewire\Modal;
use Livewire\Component;

class EditOfficeModal extends Modal
{
    public $show;
    public $step_name;
    public $parent_id;
    public $role_id;
    public WorkflowStep $workflowstep;
    public $parent_step_list = [];
    public $role_list = [];
    protected $listeners = [
        'office-edit' => 'editOffice'
    ];

    public function mount()
    {
        $this->parent_step_list = WorkflowStep::get();
        $this->role_list = Role::get();

    }

    public function editWorkflow(WorkflowStep $workflowstep)
    {
        $this->workflowstep = $workflowstep;
        $this->step_name = $this->workflowstep->step_name;
        $this->parent_id = $this->workflowstep->parent_id;
        $this->role_id = $this->workflowstep->role_id;
        $this->show = true;
    }

    public function updateWorkflow()
    {
        $this->validate([
            'step_name'          => 'required|min:3|max:255',
            'parent_id'    => 'required',
            'role_id'    => 'required'
        ], ['name.regex'    => 'The Step Name consists of only letters and spaces.',]);

        $this->workflowstep->step_name = $this->step_name;
        $this->workflowstep->parent_id = $this->parent_id;
        $this->workflowstep->role_id = $this->role_id;
        $this->workflowstep->save();
        $this->show = false;
        @session()->flash('status', 'success');
        @session()->flash('message', 'Workflow Steps Modified');
        @session()->flash('body', $this->workflowstep->step_name);
        return redirect()->route('offices.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.office.edit-office-modal');
    }
}
