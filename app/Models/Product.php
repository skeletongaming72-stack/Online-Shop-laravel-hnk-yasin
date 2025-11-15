<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'pic',
        'title',
        'link',
        'price',
        'sku',
        'count',
        'material',
        'weight',
        'discount_price',
        'description',
        'detail',
        'status',
    ];
}
