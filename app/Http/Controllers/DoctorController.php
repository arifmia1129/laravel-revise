<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function create() {
        $doctor = new Doctor();

        $doctor->name = 'Petrick';
        $doctor->specialization = 'Child';
        $doctor->phone = '123-123-6880';
        $doctor->email = 'petrick@example.com';

        $doctor->save();

        return response()->json([
            'success' => true,
            'statusCode'=>201,
            'message'=>'Doctor created successfully',
            'data'=>$doctor
        ]);
    }

    public function show() {
        // $doctors = Doctor::get();

        // $doctors = Doctor::all();

        // $doctors = Doctor::orderBy('name', 'asc')->get();

        // $doctors = Doctor::where('name', '=', 'Robin')->first();

        $doctor = Doctor::find(3);

        return response()->json([
            'success'=> true,
            'statusCode'=>200,
            'message'=>'Doctor retrieved successfully',
            'data'=> $doctor
        ]);
    }
}
