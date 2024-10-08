<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index () {
        $adminUser = null;
        $studentUser = null;

        // Checking if admin is logged in
        if(Auth::guard('admin')->check()) {
            $adminUser = Auth::guard('admin')->user();
        }

        if(Auth::guard('student')->check()) {
            $studentUser = Auth::guard('student')->user();
        }
        return view('dashboard', compact('adminUser', 'studentUser'));
    }
}
