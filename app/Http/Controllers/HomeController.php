<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return '<h1>Welcome to Laravel Practice</h1>';
    }
    public function info($name) {
        return view('home', compact('name'));
    }
}
