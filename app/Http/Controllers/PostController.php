<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('post');
    }

    public function store (Request $request) {
        // dd($request->all());

       $request->validate([
        'title' => 'required|unique:posts,title',
        ]); 

      return  response()->json([
            'success'=>true,
            'data'=>$request->all()
        ]);
    }
}
