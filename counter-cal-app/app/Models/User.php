<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'weight',
        'height',
        'gender',
        'age',
        'activity',
        'mission'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //Relationship to User_weight
    public function weights(){
        return $this->hasMany(User_weight::class, 'user_id');
    }

    //Get the latest weight of User
    public function latestWeight(){
        return $this->hasOne(User_weight::class, 'user_id')->latestOfMany('date')->first();
    }

    //Relationship to Products
    public function products(){
        return $this->hasMany(User_product::class, 'user_id');
    }

    //Get suggested amount of calories
    public function caloriesSuggested(){
        $weight = auth()->user()->latestWeight()->weight;
        $height = auth()->user()->height;
        $age = auth()->user()->age;
        $suggested = 0;

        if(auth()->user()->gender == 0){
            $suggested = 66.5 + (13.75 * $weight) + (5.003 * $height) - (6.775 * $age);
        }
        else{
            $suggested = 655.1 + (9.563 * $weight) + (1.85 * $height) - (4.676 * $age);
        }

        if(auth()->user()->activity == 'min'){
            $suggested = $suggested * 1.2;
        }
        elseif (auth()->user()->activity == 'light'){
            $suggested = $suggested * 1.375;
        }
        elseif (auth()->user()->activity == 'middle'){
            $suggested = $suggested * 1.55;
        }
        else{
            $suggested = $suggested * 1.8;
        }

        if(auth()->user()->mission == 0){
            $suggested = $suggested * 0.9;
        }
        elseif (auth()->user()->mission == 2){
            $suggested = $suggested * 1.15;
        }

        return round($suggested);
    }
}
