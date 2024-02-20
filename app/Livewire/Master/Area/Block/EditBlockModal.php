<?php

namespace App\Livewire\Master\Area\Block;

use App\Models\Block;
use App\Models\District;
use Livewire\Component;
use Illuminate\Validation\Rule;

class EditBlockModal extends Component
{
    public $show;
    public $name;
    public $ref_code;
    public $lg_code;
    public $district;

    public $districts = [];

    public Block $block;

    protected $listeners = [
        'block-edit' => 'editBlock'
    ];

    public function mount()
    {
        $this->districts = District::byAuthUser()->get();
    }

    public function editBlock(Block $block)
    {
        $this->block = $block;
        $this->name = $this->block->name;
        $this->ref_code = $this->block->ref_code;
        $this->lg_code = $this->block->lg_code;
        $this->district = $this->block->district_id;
        $this->show = true;
    }

    public function updateBlock()
    {
        $this->validate([
            'lg_code'   => ['required', 'digits_between:1,4', Rule::unique('blocks')->ignore($this->block->id, 'lg_code')],
            'name'      => 'required|regex:/^[A-Za-z0-9\s\(\)\-]+$/|min:3|max:255',
            'ref_code'  => 'required|digits_between:1,7',
            'district'  => 'required|ulid|exists:App\Models\District,id',
        ], ['name.regex'   => 'The name consists of only letters, spaces, parentheses and hyphens.']);

        $this->block->name = $this->name;
        $this->block->ref_code = $this->ref_code;
        $this->block->lg_code = $this->lg_code;
        $this->block->district_id = $this->district;

        $this->block->save();

        $this->show = false;

        @session()->flash('status', 'success');
        @session()->flash('message', 'Block Modified');
        @session()->flash('body', $this->block->name);
        return redirect()->route('blocks.index');
    }

    public function close()
    {
        $this->show = false;
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.master.area.block.edit-block-modal');
    }
}
