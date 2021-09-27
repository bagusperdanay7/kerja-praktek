<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserManagementController extends Controller
{
    //
    public function index()
    {
        $user = DB::table('users')->get();
        return view('usermanagement.usercontroller', compact('user'));
    }
}
