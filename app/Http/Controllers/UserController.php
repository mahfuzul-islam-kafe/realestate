<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function notification()
    {
        return view('pages.user.notification');
    }
    public function profile()
    {
        return view('pages.user.profile');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'sex' => 'nullable|string|max:10',
            'last_name' => 'nullable|string|max:50',
            'name' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:100',
            'birth_date' => 'nullable|date',
            'birth_place' => 'nullable|string|max:100',
            'nationality' => 'nullable|string|max:50',
        ]);

        $data = $request->all();
        $user = auth()->user();
        $user->update([
            'sex' => $data['sex'],
            'last_name' => $data['last_name'],
            'name' => $data['first_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'birth_date' => $data['birth_date'],
            'birth_place' => $data['birth_place'],
            'nationality' => $data['nationality'],
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
