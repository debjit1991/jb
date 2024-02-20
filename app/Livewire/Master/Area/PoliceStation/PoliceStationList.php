<?php

namespace App\Livewire\Master\Area\PoliceStation;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PoliceStation;

class PoliceStationList extends Component
{
    use WithPagination;

    public $searchItem;

    public function render()
    {
        return view('livewire.master.area.police-station.police-station-list',[
            'policeStations' => PoliceStation::search($this->searchItem)
                        ->orderBy('name', 'asc')
                        ->paginate(10),
        ]);
    }
    public function openEditForm($id)
    {
        $this->dispatch('policeStation-edit',$id);
    }
    public function deletePoliceStation(PoliceStation $policeStation)
    {
        try {
            $policeStation->delete();
            return ['status' => 200];
        } catch (\Throwable $th) {
            return ['status' => 224];
        }
    }
}
