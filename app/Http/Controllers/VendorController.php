<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Http\Resources\DishCollection;
use App\Http\Resources\VendorCollection;
use App\Http\Resources\VendorResource;
use App\Vendor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        try {
            $queryParams = $request->get('tags');
            if(empty($queryParams)){
                return new VendorCollection(Vendor::paginate());
            } else {
                $vendor = Vendor::with(['tags' => function($query) use($queryParams){
                    $query->whereIn('name', $queryParams);
                }])->paginate();
                return new VendorCollection($vendor);
            }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $responseCode = 200;

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:128',
                'logo' => 'required|max:2048'
            ]);
    
            if(!$validator->fails()){
                $vendor = new Vendor;
                $vendor->name = $request->name;
                $vendor->logo = $request->logo;
        
                if($vendor->save()){
                    $message = "New restaurant has been saved";
                } else {
                    $message = "Creating restaurant has been failed";
                }
            } else {
                $responseCode = 400;
                $message = $validator->errors()->first();
            }
        } catch (Exception $e) {
            $responseCode = 500;
            $message = "Internal server error";
        }
        
        return response()->json([
            "message" => $message
        ], $responseCode);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $responseCode = 200;

        try {
            $validator = Validator::make(['id' => $id], [
                'id' => 'required|digits_between:1,20|integer|min:1',
            ]);
            if(!$validator->fails()){
                $vendor = Vendor::where('id', $id)->get();
                return new VendorCollection($vendor);
            } else {
                $responseCode = 400;
                $message = $validator->errors()->first();
            }
        } catch (Exception $e) {
            $responseCode = 500;
            $message = "Internal server error";
        }

        return response()->json([
            'status' => 'failed',
            'data' => null,
            'error' => [
                'message' => $message
            ]
        ], $responseCode);
    }

    public function showDishes($id){
        $responseCode = 200;

        try {
            $validator = Validator::make(['id' => $id], [
                'id' => 'required|digits_between:1,20|integer|min:1',
            ]);

            if(!$validator->fails()){
                return new DishCollection(Dish::where('vendor_id', $id)->get());
            } else {
                $responseCode = 400;
                $message = $validator->errors()->first();
            }
        } catch (Exception $e) {
            $responseCode = 500;
            $message = "Internal server error";
        }

        return response()->json([
            'status' => 'failed',
            'data' => null,
            'error' => [
                'message' => $message
            ]
        ], $responseCode);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vendor = Vendor::find($id);
        $vendor->name = $request->name;
        $vendor->logo = $request->logo;
        
        if($vendor->save()){
            $message = "Restaurant has been updated";
        } else {
            $message = "Updating restaurant has been failed";
        }

        return response()->json([
            "message" => $message
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        if(Vendor::destroy($id)){
            $message = "Restaurant has been deleted";
        } else {
            $message = "Deleting restaurant has been failed";
        }

        return response()->json([
            "message" => $message
        ]);
    }
}
