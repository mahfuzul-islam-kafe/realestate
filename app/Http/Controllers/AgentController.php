<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'agent') {
                return redirect()->intended('/agent/dashboard')
                    ->with('success', 'Welcome back, ' . $user->name . '!');
            } else {
                Auth::logout();
                return redirect()->route('login')
                    ->withErrors(['email' => 'Access denied. Only agents can log in here.']);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'company_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'license_number' => 'required|string|max:255|unique:users,license_number',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $nameParts = explode(' ', $request->input('name'), 2);
        $firstName = $nameParts[0];
        $lastName = isset($nameParts[1]) ? $nameParts[1] : '';
        $user = User::create([
            'company_name' => $request->input('company_name'),
            'name' => $firstName,
            'last_name' => $lastName,
            'role' => 'agent',
            'license_number' => $request->input('license_number'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone_number' => $request->input('phone_number'),
            'receive_communications' => $request->input('receive_communications', false), // Default to false if not checked
        ]);
        Auth::login($user);
        return redirect()->route('agent.dashboard')->with('success', 'Registration successful!');
    }
    public function dashboard()
    {
        
        return view('pages.agents.dashboard');
    }
}
