<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return response()->json(Wishlist::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $w = Wishlist::create($request->all());
        return response()->json($w, 201);
    }

    public function show(Wishlist $wishlist)
    {
        return response()->json($wishlist);
    }

    public function edit(Wishlist $wishlist) {}

    public function update(Request $request, Wishlist $wishlist)
    {
        $wishlist->update($request->all());
        return response()->json($wishlist);
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return response()->noContent();
    }
}
