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
}
