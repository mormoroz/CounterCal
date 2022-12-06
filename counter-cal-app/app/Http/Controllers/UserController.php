<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticationRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // Show Register Form
    public function create() {
        return view('register');
    }

    // Show Login Form
    public function login() {
        return view('login');
    }

    //Register New User
    public function store(RegisterRequest $req){

        //todo add user to DB
    }


    //Authenticate User
    public function authenticate(AuthenticationRequest $req){

        //todo generate session
    }


    // Logout User
    public function logout(Request $request) {

        //todo invalidate session
    }
}
