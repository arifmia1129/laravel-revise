<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rules\Password;

class SupportController extends Controller
{
    public function index() {
        return view('support');
    }

    public function store (Request $request) {
        // dd($request->all());

       $request->validate([
        'name' => 'required|string|min:3|max:20',
        'email'=> 'required|email',
        'password'=> ['required', Password::min(8)->mixedCase() ],
        'confirm_password'=> ['required', 'same:password'],
        'message' => 'required',
        'serial'=>'required|numeric',
        'date'=>['required', 'regex:/^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-(\d{4})$/']
       ]); 

      return  response()->json([
            'success'=>true,
            'data'=>$request->all()
        ]);
    }
}
