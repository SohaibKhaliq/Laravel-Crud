<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
    'product_id',
    'attribute', // e.g., 'Size'
    'value',     // e.g., 'Large'
    'price_adjustment',
    'stock',
];
    
}
