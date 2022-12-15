<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_weight extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_weight_id';

    //Mass assignable fields
    protected $fillable = [
        'user_id',
        'weight',
        'date'
    ];

    //Disable 'created_at', 'updated_at' fields
    public $timestamps = false;

    protected $casts = [
        'date' => 'datetime'
    ];

    //Relationship to User
    public function user(){
        return $this->belongsTo(User::class);
    }
}
