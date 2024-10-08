<?php

namespace App\Http\Controllers;

use App\Models\AuthStudentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function index() 
    {
        $authStudentUser = AuthStudentUser::first();
        return view('students.dashboard', ['authStudentUser' => $authStudentUser]);
    }
    
    public function logout(Request $request)
    {
        Auth::guard('student')->logout();
        return redirect('/login'); // Adjust this to your login route
    }
}
