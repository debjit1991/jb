<?php

namespace App\Livewire\Master\Area\PoliceStation;

use App\Models\District;
use App\Models\PoliceStation;
use Livewire\Component;

class CreatePoliceStationModal extends Component
{
    public $name;
    public $district;
    public $code;

    public $show = false;

    public $districts = [];

    protected $listeners = [
        'show' => 'show'
    ];

    protected $rules = [
        'name'      => 'required|regex:/^[A-Za-z0-9\s\(\)\.\-]+$/|min:3|max:255',
        'code'  => 'required|digits_between:1,7',
        'district'  => 'required|ulid|exists:App\Models\District,id',
    ];
    protected $messages = [
        'name.regex'   => 'The name consists of only letters, spaces, parentheses, hyphens, and periods.'
    ];

    public function mount()
    {
        $this->districts = District::byAuthUser()->get();
    }

    public function show()
    {
        $this->show = true;
    }

    public function storePoliceStation()
    {
        $this->validate();

        $police_stations = PoliceStation::create([
            'name' => $this->name,
            'code' => $this->code,
            'district_id' => $this->district,
        ]);

        $this->close();

        @session()->flash('status', 'success');
        @session()->flash('message', 'Police Station Created');
        @session()->flash('body', $police_stations->name);
        return redirect()->route('police-stations.index');
    }

    public function close()
    {
        $this->show = false;
        $this->reset(['name', 'code', 'district']);
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.master.area.police-station.create-police-station-modal');
    }
}
