<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        // $total_person = DB::table('persons')->count();
        // $total_salary = DB::table('persons')->sum('salary');
        // $average_salary = DB::table('persons')->avg('salary');
        // $max_salary = DB::table('persons')->max('salary');
        // $min_salary = DB::table('persons')->min('salary');
        

        // return response()->json(
        //     [
        //         'success'=>true,
        //         'message'=>'Successfully retrieved person information',
        //         'data'=> [
        //             'total_person' => $total_person,
        //             'total_salary' => $total_salary,
        //             'average_salary' => $average_salary,
        //             'max_salary' => $max_salary,
        //             'min_salary' => $min_salary
        //         ]
        //     ]
        // );

        // $all_group_by = DB::table('persons')->select('salary', DB::raw('COUNT(*) as total_count'))->groupBy('salary')->get();

        // $all_group_by = DB::table('persons')->select('salary', DB::raw('COUNT(*) as total_count'), DB::raw('AVG(age) as average_age'), DB::raw('MAX(salary) as max_salary'))->groupBy('salary')->get();


        $all_group_by = DB::table('persons')->select('salary', DB::raw('COUNT(*) as total_count'), DB::raw('AVG(age) as average_age'), DB::raw('MAX(salary) as max_salary'))->havingRaw('COUNT(*) > 1')->groupBy('salary')->get();

        return response()->json(
            [
               'success'=>true,
               'message'=>'Successfully retrieved person information',
                'data'=> $all_group_by]);
    }
}