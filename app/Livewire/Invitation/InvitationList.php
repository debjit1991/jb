<?php

namespace App\Livewire\Invitation;

use Livewire\Component;
use App\Models\Invitation;
use Livewire\WithPagination;
class InvitationList extends Component
{
    use WithPagination;
    public $searchItem;

    public function render()
    {
        return view('livewire.invitation.invitation-list', [
            'invitations' => Invitation::where('invited_by', auth()->user()->id)
                ->search($this->searchItem)
                ->orderBy('created_at', 'desc')
                ->paginate(10)
        ]);
    }
    public function delete(Invitation $invitation)
    {
        if ($invitation->status != 'Accepted' && $invitation->delete())
            return ['status' => 200];
        else
            return ['status' => 224];
    }
}
