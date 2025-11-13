<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function index()
    {
        return response()->json(CartItem::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $item = CartItem::create($request->all());
        return response()->json($item, 201);
    }

    public function show(CartItem $cartItem)
    {
        return response()->json($cartItem);
    }

    public function edit(CartItem $cartItem) {}

    public function update(Request $request, CartItem $cartItem)
    {
        $cartItem->update($request->all());
        return response()->json($cartItem);
    }

    public function destroy(CartItem $cartItem)
    {
        $cartItem->delete();
        return response()->noContent();
    }
}
