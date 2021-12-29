<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questController extends Controller
{
    public function quest($identifier)
    {
        return [
            [
                'id' => 1,
                'question' => 'What is your name?',
                'answers' => ['silas', 'saul', 'Judas', 'Hanna', 'None of the mentioned']
            ]
        ];
    }
}
