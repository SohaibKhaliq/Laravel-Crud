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
        $validated = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'full_name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:100',
            'is_default' => 'boolean',
        ]);

    }

    public function show(ShippingAddress $shippingAddress)
    {
        return response()->json($shippingAddress);
    }

    public function edit(ShippingAddress $shippingAddress) {}

    public function update(Request $request, ShippingAddress $shippingAddress)
    {
        $validated = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'full_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:100',
            'is_default' => 'boolean',
        ]);
    }

    public function destroy(ShippingAddress $shippingAddress)
    {
        $shippingAddress->delete();
        return response()->noContent();
    }
}
