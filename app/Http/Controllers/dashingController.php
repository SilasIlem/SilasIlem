<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashingController extends Controller
{
    public function index()
    {
        return view('dashboard', ['allthem' => [1, 2, 3]]);
    }
}
