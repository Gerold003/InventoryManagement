<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $username = $request->input('username');
        $password = $request->input('password');
    
        // First check in 'users'
        $user = DB::table('users')->where('username', $username)->first();
    
        // If not found, check in 'mainuser'
        if (!$user) {
            $user = DB::table('mainuser')->where('username', $username)->first();
        }
    
        if ($user) {
            if (Hash::check($password, $user->password)) {
                Session::put('authenticated', true);
                Session::put('username', $username);
    
                return redirect()->route('admin.dashboard'); 
            } else {
                return back()->withErrors(['password' => 'Incorrect password'])->withInput();
            }
        } else {
            return back()->withErrors(['username' => 'User not found']);
        }
    }
    
    public function logout()
    {
        Session::flush(); 
            return redirect()->route('clientwebsite.website');
        }
}