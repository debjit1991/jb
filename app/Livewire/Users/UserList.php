<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Http\Traits\AuthScope;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class UserList extends Component
{
    use WithPagination,AuthScope;

    public $searchItem;

    public function render()
    {
        return view('livewire.users.user-list', [
            'users' => User::search($this->searchItem)
                ->paginate(10),
        ]);
    }
}
