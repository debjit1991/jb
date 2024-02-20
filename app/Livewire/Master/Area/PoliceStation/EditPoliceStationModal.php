<?php

namespace App\Livewire\Master\Area\PoliceStation;

use App\Models\District;
use App\Models\PoliceStation;
use Livewire\Component;

class EditPoliceStationModal extends Component
{

    public $show;
    public $name;
    public $code;
    public $district;

    public $districts = [];

    public PoliceStation $police_station;

    protected $listeners = [
        'policeStation-edit' => 'editPoliceStation'
    ];

    public function mount()
    {
        $this->districts = District::byAuthUser()->get();
    }


    public function editPoliceStation(PoliceStation $police_station)
    {
        $this->police_station = $police_station;
        $this->name = $this->police_station->name;
        $this->code = $this->police_station->code;
        $this->district = $this->police_station->district_id;
        $this->show = true;
    }

    public function updatePoliceStation()
    {
        $this->validate([
            'name'          => 'required|regex:/^[A-Za-z0-9\s\(\)\.\-]+$/|min:3|max:255',
            'code'      => 'required|digits_between:1,7',
            'district'      => 'required|ulid|exists:App\Models\District,id',
        ], ['name.regex'    => 'The name consists of only letters, spaces, parentheses, hyphens, and periods.']);

        $this->police_station->name = $this->name;
        $this->police_station->code = $this->code;
        $this->police_station->district_id = $this->district;

        $this->police_station->save();

        $this->show = false;

        @session()->flash('status', 'success');
        @session()->flash('message', 'PoliceStation Modified');
        @session()->flash('body', $this->police_station->name);
        return redirect()->route('police-stations.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
    }
    public function render()
    {
        return view('livewire.master.area.police-station.edit-police-station-modal');
    }
}
