<?php

namespace App\Livewire\Workflow;
use App\Models\WorkflowStep;
use App\Models\Role;
use App\Models\Permission;
use Livewire\Component;

class WorkflowList extends Component
{


    public function render()
    {
        return view('livewire.workflow.workflow-list',[
            'workflows' => WorkflowStep::get()]);
    }


    public function deleteWorkflow(WorkflowStep $WorkflowStep)
    {
        try {
            //dd($WorkflowStep->permissions_id);
            $role = Role::find($WorkflowStep->role_id);
            $revoke_permission=$role->revokePermissionTo($WorkflowStep->permissions_id);
            $WorkflowStep->delete();
            $del_permission=Permission::where('id',$WorkflowStep->permissions_id)->delete();
            return ['status' => 200];
        } catch (\Throwable $th) {
            dd($th);
            return ['status' => 224];
        }
    }

    public function openEditForm($id)
    {
        $this->dispatch('workflow-edit',$id);
    }
}
