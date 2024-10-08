<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $adminUser = Admin::first();
        return view('admins.dashboard', ['adminUser' => $adminUser]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/login'); // Adjust this to your login route
    }
}
