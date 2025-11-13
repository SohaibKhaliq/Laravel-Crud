<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
    'code',
    'discount_type', // 'percentage' or 'fixed'
    'discount_value',
    'start_date',
    'end_date',
    'min_order_amount',
    'max_uses',
    'status',
];

}
