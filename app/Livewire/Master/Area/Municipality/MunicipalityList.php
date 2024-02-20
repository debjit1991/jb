<?php

namespace App\Livewire\Master\Area\Municipality;

use App\Models\Municipality;
use Livewire\Component;
use Livewire\WithPagination;

class MunicipalityList extends Component
{
    use WithPagination;

    public $searchItem;

    public function render()
    {
        return view('livewire.master.area.municipality.municipality-list',[
            'municipalities' => Municipality::search($this->searchItem)
                                    ->orderBy('name', 'asc')
                                    ->paginate(10),
        ]);
    }

    public function deleteMunicipality(Municipality $municipality)
    {
        try {
            $municipality->delete();
            return ['status' => 200];
        } catch (\Throwable $th) {
            return ['status' => 224];
        }
    }

    public function openEditForm($id)
    {
        $this->dispatch('municipality-edit',$id);
    }
}
