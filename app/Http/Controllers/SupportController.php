<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SupportController extends Controller
{
    public function index() {
        return view('support');
    }

    public function store (Request $request) {
        // dd($request->all());

       $request->validate([
        'name' => 'required',
        'email'=> 'required',
        'message' => 'required',
       ]); 

      return  response()->json([
            'success'=>true,
            'data'=>$request->all()
        ]);
    }
}
