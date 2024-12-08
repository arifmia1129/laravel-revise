<?php

namespace App\Http\Controllers;

use App\Models\Baby;
use Illuminate\Http\Request;

class BabyController extends Controller
{
    public function index () {
        $all_babies = Baby::with('profile')->get();

        

      return  response()->json([
        'success'=> true,
        'message'=>'Successfully retrieved all babies information.',
        'data' => $all_babies
      ]);
    }
}
