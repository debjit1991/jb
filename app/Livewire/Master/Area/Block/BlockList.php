<?php

namespace App\Livewire\Master\Area\Block;

use App\Models\Block;
use Livewire\Component;
use Livewire\WithPagination;

class BlockList extends Component
{
    use WithPagination;

    public $searchItem;

    public function render()
    {
        return view('livewire.master.area.block.block-list',[
            'blocks' => Block::search($this->searchItem)
                            ->orderBy('name', 'asc')
                            ->paginate(10),
                        ]);
    }

    public function deleteBlock(Block $block)
    {
        try {
            $block->delete();
            return ['status' => 200];
        } catch (\Throwable $th) {
            return ['status' => 224];
        }
    }
    public function openEditForm($id)
    {
        $this->dispatch('block-edit',$id);
    }

}
