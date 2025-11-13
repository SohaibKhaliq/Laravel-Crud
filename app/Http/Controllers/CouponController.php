<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        return response()->json(Coupon::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $coupon = Coupon::create($request->all());
        return response()->json($coupon, 201);
    }

    public function show(Coupon $coupon)
    {
        return response()->json($coupon);
    }

    public function edit(Coupon $coupon) {}

    public function update(Request $request, Coupon $coupon)
    {
        $coupon->update($request->all());
        return response()->json($coupon);
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return response()->noContent();
    }
}
