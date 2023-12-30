<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'short_desc',
        'price',
        'discount',
        'discount_price',
        'image',
        // 'images',
        'stock',
        'star',
        'remark',
        // 'sizes',
        // 'colors',
        'category_id',
        'brand_id',
    ];

    protected $casts=[
        // 'sizes'=>'array',
        // 'colors'=>'array',       
        // 'images'=>'array',       
    ];
   
}
