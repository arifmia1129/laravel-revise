<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RouteMiddleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class FamilyController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'route',
            
        ];
    }

    public function index () {
        echo 'This is family page';
    }

    public function show ($id) {
        echo "This is family page with id: $id";
    }
}
