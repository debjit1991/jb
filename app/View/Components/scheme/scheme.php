<?php

namespace App\View\Components\scheme;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class scheme extends Component
{
    /**
     * Create a new component instance.
     */
    
     public $schemeList;

    public function __construct($schemeList)
    {
        $this->schemeList = $schemeList;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        //dd($this->schemeList);
        return view('components.scheme.scheme');
    }
}
