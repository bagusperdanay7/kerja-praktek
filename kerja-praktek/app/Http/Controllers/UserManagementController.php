<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserManagementController extends Controller
{
    //
    public function index()
    {
        $user = DB::table('users')->get();
        return view('user_management.index', compact('user'), ['title' => 'Management - User Management', 'management' => User::all()]);
    }

    public function create()
    {
        return view('user_management.create', ["title" => "Tambah Data - User Management"]);
    }

    public function store(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        sleep(1);
        return redirect()->route('management.index');
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        sleep(1);
        return redirect()->route('management.index');
    }

    public function edit(User $user)
    {

        return view('user_management.edit', compact('user'), ["title" => "Update Data - Database"]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        sleep(1);
        return back();
    }
}
