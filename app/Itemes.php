<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemes extends Model
{
    protected $fillable = [
        'orders_id', 'product_name', 'brand', 'quantity', 'budget', 'amount',
    ];
}
