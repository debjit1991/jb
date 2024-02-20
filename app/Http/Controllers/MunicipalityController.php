<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:read municipality|create municipality|update municipality|delete municipality', ['only' => ['index', 'show']]);
        // $this->middleware('permission:create municipality', ['only' => ['create', 'store']]);
        // $this->middleware('permission:update municipality', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:delete municipality', ['only' => ['destroy']]);
    }
    public function index()
    {
        $districts = District::all();

        return view('municipality.index', ['districts' => $districts]);
    }
}
