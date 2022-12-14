<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticationRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\User_weight;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class UserController extends Controller
{

    // Show Register Form
    public function create()
    {
        return view('register');
    }

    // Show Login Form
    public function login()
    {
        return view('login');
    }

    // Show Dashboard (Home) Page
    public function home()
    {
//        //Process products eaten today on breakfast
//        $breakfastUserProducts = auth()->user()->products()->whereDate('date', Carbon::today())->where('meal_time', 0)->get();
//        $breakfastTotals['calories'] = 0;
//        $breakfastTotals['proteins'] = 0;
//        $breakfastTotals['fats'] = 0;
//        $breakfastTotals['carbohydrates'] = 0;
//        $breakfastProducts = array();
//        foreach ($breakfastUserProducts as $product){
//            $mass = $product->mass_factor / 100;
//            $productDB = Product::find($product->product_id);
//            $breakfastProducts[] = $productDB;  //todo make custom array {{usr_prod_id, prod_name, manuf, MASS, cal, ...}, {...}}
//            $breakfastTotals['calories'] =  $breakfastTotals['calories'] + $mass * $productDB->calorie;
//            $breakfastTotals['proteins'] =  $breakfastTotals['proteins'] + $mass * $productDB->protein;
//            $breakfastTotals['fats'] =  $breakfastTotals['fats'] + $mass * $productDB->fat;
//            $breakfastTotals['carbohydrates'] =  $breakfastTotals['carbohydrates'] + $mass * $productDB->carbohydrates;
//        }
//
//        //Process products eaten today on lunch
//        $lunchUserProducts = auth()->user()->products()->whereDate('date', Carbon::today())->where('meal_time', 1)->get();
//        $lunchTotals['calories'] = 0;
//        $lunchTotals['proteins'] = 0;
//        $lunchTotals['fats'] = 0;
//        $lunchTotals['carbohydrates'] = 0;
//        $lunchProducts = array();
//        foreach ($lunchUserProducts as $product){
//            $mass = $product->mass_factor / 100;
//            $productDB = Product::find($product->product_id);
//            $lunchProducts[] = $productDB;
//            $lunchTotals['calories'] =  $lunchTotals['calories'] + $mass * $productDB->calorie;
//            $lunchTotals['proteins'] =  $lunchTotals['proteins'] + $mass * $productDB->protein;
//            $lunchTotals['fats'] =  $lunchTotals['fats'] + $mass * $productDB->fat;
//            $lunchTotals['carbohydrates'] =  $lunchTotals['carbohydrates'] + $mass * $productDB->carbohydrates;
//        }
//
//        //Process products eaten today on dinner
//        $dinnerUserProducts = auth()->user()->products()->whereDate('date', Carbon::today())->where('meal_time', 2)->get();
//        $dinnerTotals['calories'] = 0;
//        $dinnerTotals['proteins'] = 0;
//        $dinnerTotals['fats'] = 0;
//        $dinnerTotals['carbohydrates'] = 0;
//        $dinnerProducts = array();
//        foreach ($dinnerUserProducts as $product){
//            $mass = $product->mass_factor / 100;
//            $productDB = Product::find($product->product_id);
//            $dinnerProducts[] = $productDB;
//            $dinnerTotals['calories'] =  $dinnerTotals['calories'] + $mass * $productDB->calorie;
//            $dinnerTotals['proteins'] =  $dinnerTotals['proteins'] + $mass * $productDB->protein;
//            $dinnerTotals['fats'] =  $dinnerTotals['fats'] + $mass * $productDB->fat;
//            $dinnerTotals['carbohydrates'] =  $dinnerTotals['carbohydrates'] + $mass * $productDB->carbohydrates;
//        }


        //Get products eaten today
        $todaysProducts = auth()->user()->products()->whereDate('date', Carbon::today())->get();

        //List of arrays with calculated product parameters
        $products = array();

        //Array of calculated total parameters
        $totals = array(
            0 => array(
                'count' => 0,
                'calories' => 0,
                'proteins' => 0,
                'fats' => 0,
                'carbohydrates' => 0,
            ),
            1 => array(
                'count' => 0,
                'calories' => 0,
                'proteins' => 0,
                'fats' => 0,
                'carbohydrates' => 0,
            ),
            2 => array(
                'count' => 0,
                'calories' => 0,
                'proteins' => 0,
                'fats' => 0,
                'carbohydrates' => 0,
            )
        );

        //Process each found product
        foreach ($todaysProducts as $product) {
            //Eaten mass
            $mass = $product->mass_factor;

            //Get data of the actual product
            $productDB = Product::find($product->product_id);

            //Get meal_time
            $time_eaten = $product->meal_time;

            //Calculate some properties
            $calories = $productDB->calorie * $mass / 100;
            $proteins = $productDB->protein * $mass / 100;
            $fats = $productDB->fat * $mass / 100;
            $carbohydrates = $productDB->carbohydrates * $mass / 100;


            //Add custom props to array
            $products[] = array(
                'meal_time' => $time_eaten,
                'user_product_id' => $product->user_product_id,
                'product_name' => $productDB->product_name,
                'manufacturer' => $productDB->manufacturer,
                'mass' => $mass,
                'calories' => $calories,
                'proteins' => $proteins,
                'fats' => $fats,
                'carbohydrates' => $carbohydrates
            );

            $totals[$time_eaten]['count'] = $totals[$time_eaten]['count'] + 1;
            $totals[$time_eaten]['calories'] = $totals[$time_eaten]['calories'] + $calories;
            $totals[$time_eaten]['proteins'] = $totals[$time_eaten]['proteins'] + $proteins;
            $totals[$time_eaten]['fats'] = $totals[$time_eaten]['fats'] + $fats;
            $totals[$time_eaten]['carbohydrates'] = $totals[$time_eaten]['carbohydrates'] + $carbohydrates;
        }


        //Calculate calories progress
        $currentCalories = $totals[0]['calories'] + $totals[1]['calories'] + $totals[2]['calories'];
        $caloriesSuggested = auth()->user()->caloriesSuggested();
        $progress = $currentCalories / $caloriesSuggested * 100; //todo use formula

        return view('home', [
            'products' => $products,
            'totals' => $totals,
            'progress' => $progress,
            'caloriesSuggested' => $caloriesSuggested
        ]);
    }

    //Register New User
    public function store(RegisterRequest $request)
    {
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
    public function authenticate(AuthenticationRequest $request)
    {

        $formFields = $request->validate($request->rules());

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Неверные данные'])->onlyInput('email');
    }


    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    //Manage Account
    public function manage()
    {
        $user = Auth::user();
        $weight = Auth::user()->latestWeight();
        return view('user', ['data' => $user, 'user_weight' => $weight]);
    }

    //Edit User
    public function edit(Request $request)
    {
        $user = Auth::user();
        $formFields = $request;
        $weight_value = $formFields['weight'];
        unset($formFields['weight']);

        $user->first_name = $request->input(['first_name']);
        $user->last_name = $request->input(['last_name']);
        $user->gender = $request->get('inlineRadioOptions');
        $user->activity = $request->get('activityForm');
        $user->mission = $request->get('inlineRadioOptions1');
        $user->height = $request->input(['height']);
        $user->email = $request->input(['email']);
        $user->age = $request->input(['age']);
        $user->password = bcrypt($request['password']);

        $user_id = Auth::user()->user_id;

        $weight = User_weight::find($user_id);
        $weight -> weight = $weight_value;
        $weight -> date = now();

        $user->save();
        $weight->save();

        return redirect('/user');
    }
}
