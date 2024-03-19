<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Scheme;


class JbformController extends Controller
{
    public $scheme_list='';
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $scheme_list = Scheme::where('is_active', true)->select('id', 'name')->get();
        return view('jb-form.index',
        ['scheme_list' => $scheme_list]
    );
    }

    public function PensionForm(Request $request)

    {
        
    // dd($request->all());
    $scheme_id=$request->scheme_id;
        $scheme_list = Scheme::where('is_active', true)->where('id',$scheme_id)->select('id', 'name')->first();
        return view('jb-form.EditForm', [
            'scheme_id'=>$scheme_id,'scheme_name'=>$scheme_list->name
        
        ]);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('users.create');
    // }
    // public function edit(User $user)
    // {
    //     return view('users.edit', [
    //         'user'  => $user
    //     ]);
    // }
}
