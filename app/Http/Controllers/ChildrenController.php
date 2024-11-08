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

    public function update () {
        $update_data = [
            'name'=>'ARIBA BINTE ARIF',
            'age'=> 4
        ];

        DB::table('childrens')->where('id', 1)->update($update_data);

        return response()->json([
            'success'=> true,
           'message'=> 'Successfully updated the child data'
        ]);
    }

    public function delete () {
        DB::table('childrens')->where('id', 1)->delete();

        return response()->json([
            'success'=> true,
           'message'=> 'Successfully deleted the child data'
        ]);
    }

    public function join () {
        $all_childrens = DB::table('childrens')->join('serial', 'childrens.id', '=', 'serial.children_id')->select('serial.*', 'childrens.name')->get();

        return response()->json([
            'success' => true,
           'message'=>'Successfully retrieved all children and their corresponding serial numbers',
            'data' => $all_childrens
        ]);
    }

    public function isExists($id) {
        $is_exists = DB::table('childrens')->where('id', $id)->exists();

        if($is_exists) {
            $data = DB::table('childrens')->where('id', $id)->first();

            return response()->json([
                'success' => true,
               'message'=>'Successfully retrieved the child data',
                'data' => $data
            ]);
        }else {
            return response()->json([
                'success' => false,
               'message'=>'Child not found'
            ]);
        }
    }
}
