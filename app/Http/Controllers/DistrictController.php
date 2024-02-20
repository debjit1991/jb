<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:read district|create district|update district|delete district', ['only' => ['index', 'show']]);
        // $this->middleware('permission:create district', ['only' => ['create', 'store']]);
        // $this->middleware('permission:update district', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:delete district', ['only' => ['destroy']]);
    }
    public function index()
    {
        return view('districts.index');
    }
}
