<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    //
    public function index()
    {
        $this->authorize('admin');
        $user = DB::table('users')->get();
        return view('user_management.index', compact('user'), ['title' => 'Management - User Management', 'management' => User::all()]);
    }

    public function create()
    {
        $this->authorize('admin');
        return view('user_management.create', ["title" => "Tambah Data - User Management"]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'role' => 'required',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        sleep(1);
        return redirect()->route('management.index');
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'role' => 'required',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)->update($validatedData);
        sleep(1);
        return redirect()->route('management.index');
    }

    public function edit(User $user)
    {
        $this->authorize('admin');
        return view('user_management.edit', compact('user'), ["title" => "Update Data - Database"]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        sleep(1);
        return back();
    }
}
