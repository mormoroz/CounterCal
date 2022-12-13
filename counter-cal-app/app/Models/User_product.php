<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_product extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_product_id';

    protected $fillable = [
        'product_id',
        'mass_factor',
        'meal_time',
        'user_id',
        'date'
    ];

    //Disable 'created_at', 'updated_at' fields
    public $timestamps = false;


    //Relationship to User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
