<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'category_id',
    'sub_category_id',
    'name',
    'slug',
    'sku',
    'price',
    'discount_price',
    'stock',
    'short_description',
    'long_description',
    'status', // 'active' / 'inactive'
    'featured', // boolean
];

}
