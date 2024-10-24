<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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

            'last_name' => $data['last_name'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],

        ]);



        $user->buyer()->updateOrCreate(['buyer_id' => auth()->id()], [
            'sex' => $data['sex'],
            'birth_date' => $data['birth_date'],
            'birth_place' => $data['birth_place'],
            'nationality' => $data['nationality'],
        ]);

        




        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);


        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The current password is incorrect.'],
            ]);
        }
        Auth::user()->update(['password' => Hash::make($request->new_password)]);

        return redirect()->back()->with('success', 'Password changed successfully.');
    }
    public function deactivateAccount(Request $request)
    {
        $user = Auth::user();
        if ($user->status === 1) {
         
            $user->status = 0; 
            $message = 'Your account has been deactivated.';
        } else {
           
            $user->status = 1; 
            $message = 'Your account has been reactivated.';
        }

        $user->save(); 

        return redirect()->route('home')->with('success', $message);
    }
    public function favoriteAdd(Request $request){
        $favorite = new Favorite();
        $favorite->user_id = auth()->user()->id;
        $favorite->property_id = $request->property_id;
        $favorite->save();
        return redirect()->back()->with('success', 'Favorite added successfully.');
    }
}
