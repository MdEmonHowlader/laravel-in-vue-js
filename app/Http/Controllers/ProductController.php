<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $product =Product::get();

        return response()->json(['massage'=>'All List Prodct','product'=>$product],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $validator=Validator::make($request->all(),[
        'product_name'=>'required|string',
        'product_price'=>'required|numeric',
     ]);

     if($validator->fails()){
        return response()->json([$validator->errors()->all()],422);

     }

     $validated =$validator->validated();
     $product = Product::create($validated);

    return response()->json([
        'message' => 'Product Created Successfully',
        'product' => $product,
    ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product= Product::findOrFail($id);
        $validator=Validator::make($request->all(),[
            'product_name'=>'required|string',
            'product_price'=>'required|numeric',
         ]);

         if($validator->fails()){
            return response()->json([$validator->errors()->all()],422);

         }

         $validated =$validator->validated();
         $product->update($validated );
         return response()->json([
            'message' => 'Product Update Successfully',
            'product' => $product,
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product= Product::findOrFail($id);
        $product->delete();
        return response()->json([
            'message' => 'Product Delete Successfully',

        ], 200);

    }
}
