<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser() {
        return view('user');
    }
    function about() {
        return "I am a Software Developer";
    }
    function getUsername($name) {
        return "Hi This is {$name}";
    }
}
