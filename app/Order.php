<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }   
}
