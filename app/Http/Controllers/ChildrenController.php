<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function create () {
        $children = [
            'name'=> 'Ariba Binte Arif',
            'age'=> 3,
            'sex'=> 'female'
        ];

        DB::table('childrens')->insert($children);

        return response()->json([
            'success'=> true,
           'message'=> 'Successfully added a new child'
        ]);
    }
}
