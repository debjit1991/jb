<?php

namespace App\Livewire;

use Livewire\Component;

class SuccessAlert extends Component
{
    public $successMessage;

    public function mount()
    {
        $this->successMessage = session('success');
    }
    public function render()
    {
        return view('livewire.success-alert');
    }
}
