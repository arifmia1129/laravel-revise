<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index () {
        return view('file-upload');
    }

    public function upload(Request $request) {
        $request->validate([
            'file' => ['required', 'mimes:png,jpg']
        ]);

        return response()->json([
            'success' => true,
            'statusCode' => 201,
            'message' => 'File uploaded successfully'
        ]);
    }
}
