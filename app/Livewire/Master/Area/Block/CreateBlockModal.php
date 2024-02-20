<?php

namespace App\Livewire\Master\Area\Block;

use App\Livewire\Modal;
use App\Models\Block;
use App\Models\District;

class CreateBlockModal extends Modal
{
    public $lg_code;
    public $name;
    public $ref_code;
    public $district;

    public $show = false;

    public $districts = [];

    protected $listeners = [
        'show' => 'show'
    ];

    protected $rules = [
        'lg_code'   => 'required|digits_between:1,4|unique:blocks',
        'name'      => 'required|regex:/^[A-Za-z0-9\s\(\)\-]+$/|min:3|max:255',
        'ref_code'  => 'required|digits_between:1,7',
        'district'  => 'required|ulid|exists:App\Models\District,id',
    ];

    protected $messages = [
        'name.regex'   => 'The name consists of only letters, spaces, parentheses and hyphens.',
    ];

    public function mount()
    {
        $this->districts = District::byAuthUser()->get();
    }

    public function show()
    {
        $this->show = true;
    }

    public function storeBlock()
    {
        $this->validate();

        $blocks = Block::create([
            'lg_code' => $this->lg_code,
            'name' => $this->name,
            'ref_code' => $this->ref_code,
            'district_id' => $this->district,
        ]);

        $this->close();

        @session()->flash('status', 'success');
        @session()->flash('message', 'Block Created');
        @session()->flash('body', $blocks->name);
        return redirect()->route('blocks.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
        $this->reset(['lg_code', 'name', 'ref_code', 'district']);
    }

    public function render()
    {
        return view('livewire.master.area.block.create-block-modal');
    }
}
