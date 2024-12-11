<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index () {
        $all_departments = Department::with('employees')->get();

        return response()->json([
            'success'=> true,
            'message'=>'Successfully retrieved all departments information.',
            'data'=> $all_departments,
        ]);
    }
}
