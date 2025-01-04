<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        
        // Return the view
        return view('welcome');
    }


    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created user in the database.
     */
    public function store(Request $request)
    {
        

        // Create a new user with the validated data
        
    }

    /**
     * Display the specified user.
     */
    public function show(string $id)
    {
        // Find the user by ID
        
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(string $id)
    {
        // Find the user by ID
       
    }

    /**
     * Update the specified user in the database.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        
    }


    /**
     * Remove the specified user from the database.
     */
    public function destroy(string $id)
    {
        // Find the user by ID
        
    }
}
