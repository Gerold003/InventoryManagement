<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ResetPasswordController extends Controller
{
    /**
     * Show the password reset form.
     */
    public function showResetForm()
    {
        return view('auth.resetpassword'); // Ensure this view exists
    }

    /**
     * Handle the password reset request.
     */
    public function reset(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed', 
        ]);

        // Update the password
        $user = User::where('email', $request->input('email'))->first();

        if ($user) {
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return redirect()->route('login')->with('success', 'Password reset successfully. You can now log in.');
        }

        return back()->with('error', 'Failed to reset password. Please try again.');
    }
}