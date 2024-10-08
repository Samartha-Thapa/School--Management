<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AuthStudentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    // Show the admin login form
    public function showAdminLoginForm()
    {
        return view('auth.admin_login');
    }

    // Handle admin login
    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt([
            'adminEmail' => $credentials['email'], // Use adminEmail field
            'password' => $credentials['password'],  
        ], request()->has('remember'))){
            $user = Admin::first();
            return redirect('/')->with(['admin' => $user]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Show the student login form
    public function showStudentLoginForm()
    {
        return view('auth.student_login');
    }

    // Handle student login
    public function studentLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('student')->attempt([
              'studentEmail' => $credentials['email'], // Use studentEmail field
              'password' => $credentials['password'],
        ], request()->has('remember'))){
            $user = AuthStudentUser::first();
            return redirect('/')->with(['studentUser' => $user]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records',
        ]);
    }
}
