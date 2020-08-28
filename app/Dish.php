<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $table = 'dishes';

    public function vendors()
    {
        return $this->hasOne(Vendor::class);
    }

    public function order_items()
    {
        return $this->hasOne(OrderItem::class);
    }
}
