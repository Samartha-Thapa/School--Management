<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    // Handle admin logout
    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    // Handle student logout
    public function studentLogout(Request $request)
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.login');
    }
}
