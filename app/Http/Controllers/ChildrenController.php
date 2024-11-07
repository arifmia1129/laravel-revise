<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function index () {
        // $all_children = DB::table('childrens')->get();

        // $all_children = DB::table('childrens')->where('age', '>', 5)->where('age', '<', 20)->get();

        // $all_children = DB::table('childrens')->where('age', 3)->orWhere('age', 20)->get();

        // $child = DB::table('childrens')->where('age', 3)->first();

        $child = DB::table('childrens')->find(1);

        // echo '<pre>';
        // print_r($all_children);

        return response()->json([
            'success' => true,
            'message'=>'Successfully retrieved all children data',
            'data' => $child
        ]);
    }
    public function create () {
        $children = [
            'name'=> 'Sadik',
            'age'=> 18,
            'sex'=> 'male'
        ];

        DB::table('childrens')->insert($children);

        return response()->json([
            'success'=> true,
           'message'=> 'Successfully added a new child'
        ]);
    }
}
