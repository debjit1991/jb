<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class PoliceStationController extends Controller
{
   public function index()
   {
     $districts = District::get();
     return view('police-station.index',['districts' => $districts]);
   }
}
