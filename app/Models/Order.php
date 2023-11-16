<?php

namespace App\Models;

use App\Http\Controllers\HomeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'food_name',
        'food_quantity',
        'food_price',
        'user_name',
        'user_phone',
        'user_email',
        'user_address',
        'payment_method',
        'total_amount',
    ];
}
