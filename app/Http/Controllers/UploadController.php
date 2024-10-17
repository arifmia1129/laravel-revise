<?php

namespace App\Http\Controllers;


use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;


class UploadController extends Controller
{
    public function index () {
        return view('upload');
    }

    public function store (Request $request) {
        $file_name = 'new_file.'.$request->file->extension();

        // $request->file->move(public_path('uploads'),  $file_name);

        // $request->file->store('uploads');

        $request->file->storeAs('uploads', $file_name);

       return redirect()->back();
    }

    public function delete() {
        // Storage::delete('uploads/new_file.png');

        // File::delete(storage_path('app/public/uploads/new_file.png'));

        unlink(storage_path('app/public/uploads/new_file.png'));

       return redirect()->back();
    }

    public function experiment() {
        $image = Image::read(public_path(('uploads/experiment_image.jpg')));

        // $image->crop(200, 100);

        $image->resize(200, 100);

        $image->save(public_path('uploads/resize_experiment_image.jpg'));
    }
}
