<?php

namespace App\Http\Controllers;

use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    public function index()
    {
        return response()->json(ProductVariant::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $v = ProductVariant::create($request->all());
        return response()->json($v, 201);
    }

    public function show(ProductVariant $productVariant)
    {
        return response()->json($productVariant);
    }

    public function edit(ProductVariant $productVariant) {}

    public function update(Request $request, ProductVariant $productVariant)
    {
        $productVariant->update($request->all());
        return response()->json($productVariant);
    }

    public function destroy(ProductVariant $productVariant)
    {
        $productVariant->delete();
        return response()->noContent();
    }
}
