<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function dishes()
    {
        return $this->hasOne(Dish::class);
    }

    public function orders()
    {
        return $this->hasOne(Order::class);
    }
}
