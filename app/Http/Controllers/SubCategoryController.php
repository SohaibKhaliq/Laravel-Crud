<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return response()->json(SubCategory::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $s = SubCategory::create($request->all());
        return response()->json($s, 201);
    }

    public function show(SubCategory $subCategory)
    {
        return response()->json($subCategory);
    }

    public function edit(SubCategory $subCategory) {}

    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategory->update($request->all());
        return response()->json($subCategory);
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return response()->noContent();
    }
}
