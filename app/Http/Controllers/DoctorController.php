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


    public function update(){
        $doctor = Doctor::find(3);

        $doctor->name = 'Saikat';
        $doctor->specialization = 'Surgeon';
        $doctor->phone = '456-789-0123';
        $doctor->email = 'saikat@hospital.com';

        $doctor->save();

        return response()->json([
           'success'=> true,
           'statusCode'=>200,
           'message'=>'Doctor updated successfully',
           'data'=> $doctor]);
    }


    public function delete() {
        $doctor = Doctor::find(3);

        if(!$doctor){
            return response()->json([
               'success'=> false,
               'statusCode'=>404,
               'message'=>'Doctor not found']);  
        }

        $doctor->delete();

        return response()->json([
           'success'=> true,
           'statusCode'=>200,
           'message'=>'Doctor deleted successfully',]);
    }

    public function mass (){
        $new_doctor = Doctor::create([
            'name' => 'John',
           'specialization' => 'Dentist',
           'phone' => '789-456-1234',
           'email' => 'john@hospital.com'
        ]);

        return response()->json([
           'success'=> true,
           'statusCode'=>201,
           'message'=>'Doctors created successfully',
           'data'=> $new_doctor]);
    }

    public function index() {
        // $doctor = Doctor::firstOrCreate(['name' => 'Brent',
        //    'specialization' => 'Dentist',
        //    'phone' => '789-456-1234',
        //    'email' => 'brent@hospital.com']);

        // return response()->json([
        //    'success'=> true,
        //    'statusCode'=>200,
        //    'message'=>'Doctor retrieved or created successfully',
        //    'data'=> $doctor]);


        $doctor = Doctor::firstOrNew(['email'=> 'john100@hospital.com']);

        $doctor->name = 'John';
        $doctor->specialization = 'Dentist';
        $doctor->phone = '789-456-1234';
        $doctor->email = 'john@hospital.com';

        $doctor->save();

        return response()->json([
           'success'=> true,
           'statusCode'=>200,
           'message'=>'Doctor retrieved or created successfully', 'data'=>$doctor]);
          

    }
}
