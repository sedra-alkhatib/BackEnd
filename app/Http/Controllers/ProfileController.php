<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return Profile::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'birth_date' => 'nullable|date',
        ]);

        return Profile::create($request->all());
    }

    public function show(Profile $profile)
    {
        return $profile;
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update($request->all());
        return $profile;
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response()->json(['message' => 'تم الحذف بنجاح']);
    }
}
