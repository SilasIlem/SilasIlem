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
            ],
            [
                'id' => 2,
                'question' => 'What is your address?',
                'answers' => ['ondo yaba', 'ilorin osun', 'nowhere', 'Internet', 'None of the mentioned']
            ],
            [
                'id' => 3,
                'question' => 'What is your number?',
                'answers' => ['908', '709', '18', '120', 'None of the mentioned']
            ],
            [
                'id' => 4,
                'question' => 'What is a noun?',
                'answers' => ['name of you', 'name of all', 'name of some', 'name', 'None of the mentioned']
            ]
        ];
    }
}
