<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodParty extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id','quantity','discount_amount'
    ];
}
