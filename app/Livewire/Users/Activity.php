<?php

namespace App\Livewire\User;

use App\Models\Audit;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Activity extends Component
{
    use WithPagination;

    public $recordedDateStr; // Should be "DD/MM/YYYY to DD/MM/YYYY" or "DD/MM/YYYY"

    public $searchItem;

    public function render()
    {
        return view('livewire.users.activity', [
            'audits' => Audit::where('causer_id', Auth::user()->id)
                ->recordedBetween($this->recordedDateStr)
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
