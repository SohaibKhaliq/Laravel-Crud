<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'user_id',
    'order_number',
    'total_amount',
    'discount',
    'shipping_cost',
    'payment_status', // 'pending', 'paid', 'failed'
    'order_status',   // 'pending', 'processing', 'completed', 'cancelled'
    'shipping_address_id',
    'payment_method', // 'cash_on_delivery', 'stripe', 'paypal', etc.
];

}
