<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class CreateClientController extends Controller
{
    /**
     * Show the form for creating a new client.
     */
    public function create()
    {
        return view('auth.createclient'); // Ensure this view exists
    }

    /**
     * Store a newly created client in the database.
     */
    public function store(Request $request)
    {
        // Retrieve the role ID for 'Clients'
        $clientRoleId = DB::table('roles')->where('name', 'Clients')->value('id');

       
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:clients,username',
            'contact_number' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:clients,email',
            'password' => 'required|string|min:8|confirmed', // Ensure password confirmation is included in the form
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create the client
        Client::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'contact_number' => $request->input('contact_number'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // Hash the password
            'role_id' => $clientRoleId,
        ]);

        return redirect()->route('createclient')->with('success', 'Client created successfully.');
    }
}