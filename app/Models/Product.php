<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'product_name',
        'description',
        'model',
        'price',
        'quantity',
        'featured',
        'discount_price',
        'status',
        'image'
    ];
   
}
