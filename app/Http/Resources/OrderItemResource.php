<?php

namespace App\Http\Resources;

use App\Dish;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'dish'          => Dish::select('id', 'name')->where('id', $this->dish_id)->first(),
            'dish_price'    => $this->dish_price,
            'quantity'      => $this->quantity,
            'total'         => $this->total,
            'note'          => $this->note
        ];
    }
}
