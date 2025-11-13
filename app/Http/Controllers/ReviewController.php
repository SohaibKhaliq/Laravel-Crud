<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return response()->json(Review::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $r = Review::create($request->all());
        return response()->json($r, 201);
    }

    public function show(Review $review)
    {
        return response()->json($review);
    }

    public function edit(Review $review) {}

    public function update(Request $request, Review $review)
    {
        $review->update($request->all());
        return response()->json($review);
    }

    public function destroy(string $id)
    {
        $result=Review::where('id',$id)->firstOrFail();
        if($result){
            $result->delete();
            return response()->json(['message'=>'Review is Deleted Successfully',200]);
        }
        else{
            return response()->json(['message'=>'Review not found'],404);
        }
    }
}
