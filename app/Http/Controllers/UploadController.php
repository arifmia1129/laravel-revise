<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index () {
        return view('upload');
    }

    public function store (Request $request) {
        $file_name = 'new_file.'.$request->file->extension();

        $request->file->move(public_path('uploads'),  $file_name);

       return redirect()->back();
    }
}
