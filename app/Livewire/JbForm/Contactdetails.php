<?php

namespace App\Livewire\JbForm;

use Livewire\Component;

class Contactdetails extends Component
{
    public $currentTab = 'tab1';
    public function render()
    {
        return view('livewire.jb-form.contactdetails');
    }

    public function back()
    {
        $this->currentTab = 'tab1';
    }
}
