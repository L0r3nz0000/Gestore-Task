<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_1 extends Controller
{
    public function index(Request $request) {
        dd($request);
        return view('welcome');
    }
}
