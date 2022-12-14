<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticationRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\User_weight;
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
    public function store(RegisterRequest $request){
        $formFields = $request->validate($request->rules());

        //todo filter weight from passing to User::create
        $weight_value = $formFields['weight'];
        unset($formFields['weight']);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);
        $user_id = $user->user_id;

        $weight = User_weight::create([
            'user_id' => $user_id,
            'weight' => $weight_value,
            'date' => now()
        ]);

        // Login
        auth()->login($user);

        return redirect('/');
    }


    //Authenticate User
    public function authenticate(AuthenticationRequest $request){

        $formFields = $request->validate($request->rules());

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Неверные данные'])->onlyInput('email');
    }


    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    //Manage Account
    public function manage(){
        $user = Auth::user();
//        print_r($user);
//        dd($user->all());
        return view('user', ['data' => $user]);
    }

    //Edit User
    public function edit(){
        //todo edit some info
    }
}
