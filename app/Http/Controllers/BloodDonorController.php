<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodDonorController extends Controller
{
    public function index (){
        echo 'We will show blood donor list';
    }

    public function create() {
        return view('blood-donor-create');
    }

    public function store(Request $request) {
        echo 'New blood donor name is: '.$request->input('name');
    }
}
