<?php

namespace App\Http\Controllers;

use App\Models\User_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class User_productController extends Controller
{

    // Store User_product
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:App\Models\Product,product_id',
            'mass_factor' => 'required|integer|min:1',
            'meal_time' => 'required|integer|between:0,2'
        ]);

        if ($validator->fails()) {
            Session::flash('message', 'Вы ввели неверные данные!');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/products');
        } else {
            $formFields = $validator->validated();
            $formFields['user_id'] = auth()->id();
            $formFields['date'] = now();

            User_product::create($formFields);

            Session::flash('message', 'Продукт успешно добавлен!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/products');
        }
    }


    // Delete User_product
    public function destroy(Request $request) {
        $user_product = User_product::find($request->product_id);

        // Make sure logged in user is owner
        if($user_product->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $user_product->delete();
        Session::flash('message', 'Удалено!');
        Session::flash('alert-class', 'alert-danger');
        return redirect('/');
    }

    // Update User_product
    public function update(Request $request) {
        $user_product = User_product::find($request->product_id);

        // Make sure logged in user is owner
        if($user_product->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'mass_factor' => 'required|integer|min:1',
        ]);

        $user_product->update($formFields);
        Session::flash('message', 'Обновлено!');
        Session::flash('alert-class', 'alert-success');
        return redirect('/');
    }
}
