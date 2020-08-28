<?php

namespace App\Http\Resources;

use App\OrderItem;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'id'   => $this->id,
            'user_id' => $this->user_id,
            'vendor_id' => $this->vendor_id,
            'items' => OrderItemResource::collection($this->order_items),
        ];
    }
}
