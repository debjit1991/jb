<?php

namespace App\Livewire\Master\Area\District;

use App\Livewire\Modal;
use App\Models\District;
use App\Models\State;

class CreateDistrictModal extends Modal
{
    public $lg_code;
    public $name;
    public $short_name;
    public $ref_code;
    public $state;

    public $show = false;

    public $states = [];

    protected $listeners = [
        'show' => 'showModal'
    ];

    protected $rules = [
        'lg_code'    => 'required|digits_between:1,4|unique:districts',
        'name'       => 'required|regex:/^[A-Za-z\s]+$/|min:3|max:255',
        'short_name' => 'required|alpha|size:3',
        'ref_code'   => 'required|digits_between:1,7',
        'state'      => 'required|ulid|exists:App\Models\State,id',
    ];

    protected $messages = [
        // 'lg_code.digits_between' => 'The lg code must be less than or equal to 4 digits',
        // 'ref_code.digits_between' => 'The ref code must be less than or equal to 7 digits',
        'name.regex'   => 'The name consists of only letters and spaces.',
    ];

    public function mount()
    {
        $this->states = State::get();
    }

    public function showModal()
    {

        $this->show = true;
        // dd($this->show);
    }

    public function storeDistrict()
    {
        $this->validate();

        $districts = District::create([
            'lg_code' => $this->lg_code,
            'name' => $this->name,
            'short_name' => $this->short_name,
            'ref_code' => $this->ref_code,
            'state_id' => $this->state,
        ]);

        $this->close();

        @session()->flash('status', 'success');
        @session()->flash('message', 'District Created');
        @session()->flash('body', $districts->name);
        return redirect()->route('districts.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
        $this->reset(['lg_code', 'name', 'short_name', 'ref_code', 'state']);
    }

    public function render()
    {
        return view('livewire.master.area.district.create-district-modal');
    }
}
