<?php

namespace App\Http\Controllers;

use App\Models\ShippingAddress;
use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    public function index()
    {
        return response()->json(ShippingAddress::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $s = ShippingAddress::create($request->all());
        return response()->json($s, 201);
    }

    public function show(ShippingAddress $shippingAddress)
    {
        return response()->json($shippingAddress);
    }

    public function edit(ShippingAddress $shippingAddress) {}

    public function update(Request $request, ShippingAddress $shippingAddress)
    {
        $shippingAddress->update($request->all());
        return response()->json($shippingAddress);
    }

    public function destroy(ShippingAddress $shippingAddress)
    {
        $shippingAddress->delete();
        return response()->noContent();
    }
}
