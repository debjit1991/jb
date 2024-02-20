<?php

namespace App\Livewire\Master\Area\Municipality;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditMunicipalityModal extends Component
{
    public $show;
    public $name;
    public $ref_code;
    public $lg_code;
    public $district;
    public $districts = [];

    public Municipality $municipality;

    protected $listeners = [
        'municipality-edit' => 'editMunicipality'
    ];

    public function mount()
    {
        $this->districts = District::byAuthUser()->get();
    }

    public function editMunicipality(Municipality $municipality)
    {
        $this->municipality = $municipality;
        $this->name = $this->municipality->name;
        $this->ref_code = $this->municipality->ref_code;
        $this->lg_code = $this->municipality->lg_code;
        $this->district = $this->municipality->district_id;

        $this->show = true;
    }

    public function updateMunicipality()
    {
        $this->validate([
            'lg_code'   => ['required', 'digits_between:1,4', Rule::unique('municipalities')->ignore($this->municipality->id, 'lg_code')],
            'name'      => 'required|regex:/^[A-Za-z0-9\s\(\)\-]+$/|min:3|max:255',
            'ref_code'  => 'required|digits_between:1,7',
            'district'  => 'required|ulid|exists:App\Models\District,id',
        ], ['name.regex'   => 'The name consists of only letters, spaces, parentheses and hyphens.']);

        $this->municipality->name = $this->name;
        $this->municipality->ref_code = $this->ref_code;
        $this->municipality->lg_code = $this->lg_code;
        $this->municipality->district_id = $this->district;

        $this->municipality->save();

        $this->show = false;

        @session()->flash('status', 'success');
        @session()->flash('message', 'Municipality Modified');
        @session()->flash('body', $this->municipality->name);
        return redirect()->route('municipalities.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.master.area.municipality.edit-municipality-modal');
    }
}
