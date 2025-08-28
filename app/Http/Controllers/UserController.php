<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    
                return redirect()->route('admin');
            } else {
                return redirect()->back()->withErrors(['error' => 'An error occured.']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured: ' . $e->getMessage());
        }
    }
    
    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect()->route('main');
    }
}