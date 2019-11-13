<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_detail extends Model
{
    protected $fillable = [
        'order_id', 'product_description', 'price', 'quantily', 'delivery_address',
    ];
}
