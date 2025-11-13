<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {

    }

    public function create() {}

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Validation rules here
            'category_id' => 'required|exists:categories,id',
            'sub_category_id'=>'required|exists:sub_categories,id',
            'name'=>'required|string|max:255|min:5',
            'slug'=>'required|string|max:255|min:5|unique:products,slug',
            'sku'=>'nullable|string|max:100|min:10|unique:products,sku',
            'price'=>'required|numeric|min:0|max:100000',
            'discount_price'=>'nullable|numeric|min:0|max:100000',
            'stock'=>'required|integer|min:0',
            'short_description'=>'nullable|string|min:100',
            'long_description'=>'nullable|string',
            'status'=>'required|boolean',
            'featured'=>'required|boolean',
        ]);
        $result=Product::create($validated);
        if($result){
            return response()->json(['message'=>'Product is Created Successfully'],201);
        }
        else{
            return response()->json(['message'=>'Product Creation Failed'],500);
        }
    }

    public function show(string $slug)
    {

    }

    public function edit(string $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        if($product){
        }
        else{
            return response()->json(['message'=>'Product not found'],404);
        }
    }

    public function update(Request $request, string $slug)
    {
        $validated = $request->validate([
            // Validation rules here
            'category_id' => 'nullable|exists:categories,id',
            'sub_category_id'=>'nullable|exists:sub_categories,id',
            'name'=>'nullable|string|max:255|min:5',
            'slug'=>'nullable|string|max:255|min:5|unique:products,slug,'.$slug.',slug',
            'sku'=>'nullable|string|max:100|min:10|unique:products,sku,'.$slug.',slug',
            'price'=>'nullable|numeric|min:0|max:100000',
            'discount_price'=>'nullable|numeric|min:0|max:100000',
            'stock'=>'nullable|integer|min:0',
            'short_description'=>'nullable|string|min:100',
            'long_description'=>'nullable|string',
            'status'=>'boolean',
            'featured'=>'boolean',
        ]);


    }

    public function destroy(string $slug)
    {
        $result=Product::where('slug',$slug)->firstOrFail();
        if($result){
            $result->delete();
            return response()->json(['message'=>'Product is Deleted Successfully',200]);
        }
        else{
            return response()->json(['message'=>'Product not found'],404);
        }

    }
}
