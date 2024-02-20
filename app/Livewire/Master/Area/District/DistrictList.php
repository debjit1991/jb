<?php

namespace App\Livewire\Master\Area\District;
use App\Models\District;
use Livewire\Component;
use Livewire\WithPagination;

class DistrictList extends Component
{
    use WithPagination;

    public $searchItem;

    public function render()
    {
        return view('livewire.master.area.district.district-list',[
            'districts' => District::search($this->searchItem)
                                    ->orderBy('name', 'asc')
                                    ->paginate(10),
                                ]);
    }


    public function deleteDistrict(District $district)
    {
        try {
            $district->delete();
            return ['status' => 200];
        } catch (\Throwable $th) {
            return ['status' => 224];
        }
    }

    public function openEditForm($id)
    {
        $this->dispatch('district-edit',$id);
    }

}
