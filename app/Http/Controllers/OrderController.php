<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderItemResource;
use App\Http\Resources\OrderResource;
use App\Order;
use App\OrderItem;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id){
        try {
            $order = new OrderCollection(Order::where('id', $id)->get());
            return response()->json($order);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'data' => null,
                'error' => [
                    'message' => 'Internal server error'
                ]
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $responseCode = 200;
        
        try {
            if($request->isJson()){
                $input = $request->all();
                
                $dishes = Dish::where('vendor_id', $input['vendor_id'])->get()->keyBy('id');
    
                $orderItemList = [];
    
                $order = new Order();
                $order->user_id = $input['user_id'];
                $order->vendor_id = $input['vendor_id'];
                $order->total = 0;
                $order->is_paid = true;
                foreach($input['items'] as $dish){
                    $total = $dishes[$dish['dish_id']]['price'] * $dish['quantity'];
                    $order->total += $total;
    
                    array_push($orderItemList, array(
                        'dish_id'   => $dish['dish_id'],
                        'dish_price'=> $dishes[$dish['dish_id']]['price'],
                        'quantity'  => $dish['quantity'],
                        'total'     => $total,
                        'note'      => $dish['note'],
                    ));
                }
                $order->save();
                $orderId = $order->id;
    
                for($i = 0; $i < count($orderItemList); $i++){
                    $orderItemList[$i]['order_id'] = $orderId;
                    $orderItemList[$i]['created_at'] = $order->created_at;
                    $orderItemList[$i]['updated_at'] = $order->updated_at;
                }
    
                OrderItem::insert($orderItemList);
                
                return response()->json([
                    'message' => 'Order has been received'
                ]);
            } else {
                $responseCode = 415;
                $message = "Content-Type must be in JSON";
            }
        } catch (Exception $e) {
            $responseCode = 500;
            $message = "Internal server error";
        }

        return response()->json([
            "message" => $message
        ], $responseCode);        
    }
}
