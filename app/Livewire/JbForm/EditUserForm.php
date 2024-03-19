<?php

namespace App\Livewire\JbForm;

use Livewire\Component;
use Livewire\Attributes\On;
class EditUserForm extends Component
{
    public $currentTab = 'tab1';
    public $scheme_id;
    public $application_id='';

    // protected $listeners = ['dataSaved' => 'tab_highlight'];
    #[On('dataSaved')]
    public function tab_highlight($tab)
    {
        //dd($tab);
        //dd($applicationId);
        $this->currentTab = $tab;
        // $this->application_id = $application_id;

        // dd($tab);
        // if($tab==1)
        // session()->flash('success', 'Data has been saved successfully.');
        // {
        //     $this->dispatch('personalopen'); 

        // }
        
        
    // Your logic for tab highlighting based on the provided $tab value
    // ...

    // For example, you might want to set a property to highlight a specific tab in the view
    // $this->selectedTab = $tab;
    }
    public function render()
    {
        return view('livewire.jb-form.edit-user-form');
    }
}
