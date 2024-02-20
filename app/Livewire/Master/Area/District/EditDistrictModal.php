<?php

namespace App\Livewire\Master\Area\District;

use App\Models\District;
use App\Models\State;
use Illuminate\Validation\Rule;
use App\Livewire\Modal;
use Livewire\Component;

class EditDistrictModal extends Modal
{
    public $show;
    public $lg_code;
    public $ref_code;
    public $name;
    public $short_name;
    public $state;

    public $states = [];

    public District $district;

    protected $listeners = [
        'district-edit' => 'editDistrict'
    ];

    public function mount()
    {
        $this->states = State::get();

    }

    public function editDistrict(District $district)
    {
        $this->district = $district;
        $this->name = $this->district->name;
        $this->lg_code = $this->district->lg_code;
        $this->ref_code = $this->district->ref_code;
        $this->short_name = $this->district->short_name;
        $this->state = $this->district->state_id;

        $this->show = true;
    }

    public function updateDistrict()
    {
        $this->validate([
            'lg_code'       => ['required', 'digits_between:1,4', Rule::unique('districts')->ignore($this->district->id)],
            'name'          => 'required|regex:/^[A-Za-z\s]+$/|min:3|max:255',
            'short_name'    => 'required|alpha|size:3',
            'ref_code'      => 'required|digits_between:1,7',
            'state'         => 'required|ulid|exists:App\Models\State,id',
        ], ['name.regex'    => 'The name consists of only letters and spaces.',]);

        $this->district->name = $this->name;
        $this->district->lg_code = $this->lg_code;
        $this->district->ref_code = $this->ref_code;
        $this->district->short_name = $this->short_name;
        $this->district->state_id = $this->state;

        $this->district->save();

        $this->show = false;

        @session()->flash('status', 'success');
        @session()->flash('message', 'District Modified');
        @session()->flash('body', $this->district->name);
        return redirect()->route('districts.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.master.area.district.edit-district-modal');
    }
}
