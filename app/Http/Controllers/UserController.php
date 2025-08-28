<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function auth(Request $request) {
        $request->validate([
            'password' => 'required|string|max:255'
        ], [
            'password.required' => 'Password is required.',
        ]);

        try {
            $admin = User::first();
            $password = password_verify($request->input('password'), $admin->password);
            if ($password) {
                Auth::login($admin);

                Log::warning('Admin login detected on IP Address: ' . $request->ip() . ' at: ' . now());
    
                return redirect()->route('admin');
            } else {
                return redirect()->back();
            }
        } catch (\Exception $e) {
            Log::error('Error occured while logging in: ' . $e->getMessage());

            return redirect()->back();
        }
    }
    
    public function logout(Request $request) {
        Log::warning('Admin logout detected on IP Address: ' . $request->ip() . ' at: ' . now());

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect()->route('main');
    }
}