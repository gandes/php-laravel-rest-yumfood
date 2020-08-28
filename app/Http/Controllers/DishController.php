<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Http\Resources\DishCollection;
use App\Http\Resources\DishResource;
use Exception;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(){
        return new DishCollection(Dish::paginate());
    }

    public function show($id)
    {
        try{
            $dishes = Dish::where('id', $id)->get();
            return new DishCollection($dishes);
        } catch(Exception $e) {
            return response()->json([
                'status' => 'failed',
                'data' => null,
                'error' => [
                    'message' => 'Internal server error'
                ]
            ], 500);
        }
    }
}
