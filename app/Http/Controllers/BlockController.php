<?php

namespace App\Http\Controllers;
//namespace App\Exceptions;


//use Exception;
use App\Models\District;
use App\Models\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:read block|create block|update block|delete block', ['only' => ['index', 'show']]);
        // $this->middleware('permission:create block', ['only' => ['create', 'store']]);
        // $this->middleware('permission:update block', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:delete block', ['only' => ['destroy']]);
    }

    public function index()
    {
        $blocks = Block::all();
        $districts = District::all();

        return view('block.index', ['blocks' => $blocks, 'districts' => $districts]);
    }
}
