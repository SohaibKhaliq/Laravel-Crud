<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return response()->json(Setting::all());
    }

    public function create() {}

    public function store(Request $request)
    {
        $s = Setting::create($request->all());
        return response()->json($s, 201);
    }

    public function show(Setting $setting)
    {
        return response()->json($setting);
    }

    public function edit(Setting $setting) {}

    public function update(Request $request, Setting $setting)
    {
        $setting->update($request->all());
        return response()->json($setting);
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return response()->noContent();
    }
}
