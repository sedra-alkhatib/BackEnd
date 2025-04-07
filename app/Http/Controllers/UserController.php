<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all(); 
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        return User::create($request->all()); 
    }

    public function show(User $user)
    {
        return $user; 
    }

    public function edit(User $user)
    {
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all()); 
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete(); 
        return response()->json(['message' => 'تم الحذف بنجاح']);
    }
    
}
