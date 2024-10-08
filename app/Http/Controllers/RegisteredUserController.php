<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AuthStudentUser;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store() 
    {
        // Validate request data
        $attributes = request()->validate([
            'userName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,adminEmail|unique:students,studentEmail',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,student',
        ]);
        // Check user role
        if ($attributes['role'] === 'admin') {
            $user = Admin::create([
                'adminUserName' => $attributes['userName'],
                'adminEmail' => $attributes['email'],
                'adminPassword' => bcrypt($attributes['password']),
            ]);

        Auth::guard('admin')->login($user);  
        return redirect('/');
    } else {
        $user = AuthStudentUser::create([
            'studentUserName' => $attributes['userName'],
            'studentEmail' => $attributes['email'],
            'studentPassword' => bcrypt($attributes['password']),
        ]);
        Auth::guard('student')->login($user);  
        return redirect('/');
        }
        
        
    }
}



