<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_weight;
use Illuminate\Http\Request;

class User_weightController extends Controller
{
    //Create User_weight entry
    public function store(Request $request){
        $formFields = $request->validate([
            'user_id' => 'required|exists:App\Models\User,user_id',
            'weight' => 'required|min:20|max:500',
            'date' => now()
        ]);

        User_weight::create($formFields);
    }
}
