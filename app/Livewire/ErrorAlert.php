<?php

namespace App\Livewire;

use Livewire\Component;

class ErrorAlert extends Component
{
    public $errorMessage;

    public function mount()
    {
        $this->errorMessage = session('error');
    }
    public function render()
    {
        return view('livewire.error-alert');
    }
}
