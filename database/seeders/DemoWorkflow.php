<?php
namespace Database\Seeders;
use App\Models\Department;
use App\Models\Scheme;
use App\Models\WorkflowStep;
use App\Models\ResourceType;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoWorkflow extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scheme= Scheme::where('name','Manabik')->first();
        $roleList=Role::get();
        $roleApprover=$roleList->where('name','Approver')->first();
        $approver_workflow= WorkflowStep::create([
            'scheme_id' => $scheme->id,
            'step_name' => 'Step 3',
            'parent_id' => 100,
            'role_id' => $roleApprover->id,
        ]);
        $permission_name=$scheme->short_code.'_STEP-3';
        $permission = Permission::create(['name' => $permission_name,'guard' => 'web']);
        $role=Role::where('id',$roleApprover->id)->first();
        $role->givePermissionTo($permission);

        $roleVerifier=$roleList->where('name','Verifier')->first();
        $verifier_workflow= WorkflowStep::create([
            'scheme_id' => $scheme->id,
            'step_name' => 'Step 2',
            'parent_id' =>  $approver_workflow->id,
            'role_id' => $roleVerifier->id,
        ]); 
        $permission_name=$scheme->short_code.'_STEP-2';
        $permission = Permission::create(['name' => $permission_name,'guard' => 'web']);
        $role=Role::where('id',$roleVerifier->id)->first();
        $role->givePermissionTo($permission);

        $roleOperator=$roleList->where('name','Operator')->first();
        $operator_workflow= WorkflowStep::create([
            'scheme_id' => $scheme->id,
            'step_name' => 'Step 1',
            'parent_id' =>  $verifier_workflow->id,
            'role_id' => $roleOperator->id,
        ]); 

        $permission_name=$scheme->short_code.'_STEP-1';
        $permission = Permission::create(['name' => $permission_name,'guard' => 'web']);
        $role=Role::where('id',$roleOperator->id)->first();
        $role->givePermissionTo($permission);
    }
}
