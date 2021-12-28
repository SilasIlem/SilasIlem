<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashingController extends Controller
{
    public function index()
    {
        return view('dashboard', ['allthem' => [
            ['id' => 1, 'title' => 'first', 'subject' => 'physics', 'topics' => ['waves', 'fundamentals Quantities of Matter'], 'total' => 9, 'time' => 'Dec. 26, 2021, 2:48 p.m.'],
            ['id' => 2, 'title' => 'second', 'subject' => 'physics', 'topics' => ['waves', 'fundamentals Quantities of Matter'], 'total' => 9, 'time' => 'Dec. 26, 2021, 2:48 p.m.'],
            ['id' => 3, 'title' => 'third', 'subject' => 'physics', 'topics' => ['waves', 'fundamentals Quantities of Matter'], 'total' => 9, 'time' => 'Dec. 26, 2021, 2:48 p.m.'],
            ['id' => 4, 'title' => 'forth', 'subject' => 'physics', 'topics' => ['waves', 'fundamentals Quantities of Matter'], 'total' => 9, 'time' => 'Dec. 26, 2021, 2:48 p.m.']
        ]]);
    }
}
