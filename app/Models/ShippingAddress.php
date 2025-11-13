<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $fillable = [
    'user_id',
    'full_name',
    'phone',
    'email',
    'address',
    'city',
    'state',
    'postal_code',
    'country',
    'is_default',
];

}
