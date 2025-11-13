<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function index()
    {
        return response()->json(ProductImage::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $img = ProductImage::create($request->all());
        return response()->json($img, 201);
    }

    public function show(ProductImage $productImage)
    {
        return response()->json($productImage);
    }

    public function edit(ProductImage $productImage) {}

    public function update(Request $request, ProductImage $productImage)
    {
        $productImage->update($request->all());
        return response()->json($productImage);
    }

    public function destroy(ProductImage $productImage)
    {
        $productImage->delete();
        return response()->noContent();
    }
}
