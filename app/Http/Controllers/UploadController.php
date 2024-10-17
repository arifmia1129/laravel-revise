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

        // $image->resize(200, 100);

        // $image->greyscale();
        // $image->flip();
        // $image->brightness(10);

        try {
            $image->text('foo', 400, 50, function($font) {
                $font->file(public_path('uploads/Roboto-Regular.ttf'));
                $font->size(100);
                $font->color('#fdf6e3');
                $font->align('center');
                $font->valign('top');
                $font->angle(45);
            });
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        $image->save(public_path('uploads/new_edited_experiment_image.jpg'));
    }
}
