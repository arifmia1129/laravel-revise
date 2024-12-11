<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $all_employees = Employee::with('department')->get();

        return response()->json([
            'success'=> true,
            'message'=>'Successfully retrieved all employees information.',
            'data'=> $all_employees,
            'total_employees'=> Employee::count(),
        ]);
    }
}
