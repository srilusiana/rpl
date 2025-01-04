<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();
        
        // Return the view
        return view('components.pengguna.dashboard', compact('users'));
    }


    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        // Return a view for the user creation form
        return view('components.pengguna.create');
    }

    /**
     * Store a newly created user in the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'nama' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'noTelp' => 'required|string',
            'jenisKelamin' => 'required|string',
            'fotoProfil' => 'nullable|image'
        ]);

        
        // Handle file upload for the photo
        if ($request->hasFile('fotoProfil')) {
            $path = $request->file('fotoProfil')->store('profile_photos', 'public');
            $validated['fotoProfil'] = $path;
        } else {
            $validated['fotoProfil'] = 'default.jpg'; // Nilai default
        }        

        // Create a new user with the validated data
        User::create($validated);

        // Redirect to the user list page
        return redirect()->route('pengguna.dashboard')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified user.
     */
    public function show(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return a view and pass the user data
        return view('components.pengguna.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return a view for editing the user
        return view('components.pengguna.edit', compact('user'));
    }

    /**
     * Update the specified user in the database.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string',
            'username' => 'required|string' . $id,
            'email' => 'required|string' . $id,
            'password' => 'required|string',
            'noTelp' => 'required|string',
            'jenisKelamin' => 'required|string',
            'fotoProfil' => 'nullable|image'
        ]);

        // Cari pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Update data pengguna
        $user->update($validated);

        // Handle file upload for the photo
        if ($request->hasFile('fotoProfil')) {
            $path = $request->file('fotoProfil')->store('profile_photos', 'public');
            $validated['fotoProfil'] = $path;
        } else {
            $validated['fotoProfil'] = 'default.jpg'; // Nilai default
        }

        // Redirect ke dashboard pengguna setelah update
        return redirect()->route('pengguna.dashboard', $user->id)->with('success', 'User updated successfully.');
    }


    /**
     * Remove the specified user from the database.
     */
    public function destroy(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user from the database
        $user->delete();

        // Redirect to the user list page
        return redirect()->route('pengguna.dashboard')->with('success', 'User deleted successfully.');
    }
}
