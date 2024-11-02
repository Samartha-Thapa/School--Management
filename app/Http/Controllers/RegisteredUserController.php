<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AuthStudentUser;
use App\Models\StudentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class RegisteredUserController extends Controller
{

    // public function verifyEmail(Request $request)
    // {
    //     $email = $request->input('email');
    //     $apiKey = env('HUNTER_API_KEY'); // Fetch API key from .env file
    
    //     // Make GET request to Hunter API
    //     $response = Http::get("https://api.hunter.io/v2/email-verifier", [
    //         'email' => $email,
    //         'api_key' => $apiKey,
    //     ]);
    
    //     // Check if request was successful
    //     if ($response->successful()) {
    //         $data = $response->json();
    
    //         // Process the response data
    //         $result = $data['data']['result'];
    //         $score = $data['data']['score'];
    
    //         // Hunter.io result analysis
    //         if ($result == 'deliverable' && $score >= 80) {
    //             // The email is valid and the score is high enough
    //             return response()->json(['status' => 'valid']);
    //         } else if ($result == 'undeliverable') {
    //             // The email is clearly invalid
    //             return response()->json(['status' => 'invalid']);
    //         } else if ($result == 'risky') {
    //             // The email is risky (e.g., a catch-all domain)
    //             return response()->json(['status' => 'risky']);
    //         } else {
    //             // Other statuses (unknown, etc.)
    //             return response()->json(['status' => 'invalid']);
    //         }
    //     } else {
    //         // Handle errors (e.g., API request failed)
    //         return response()->json(['error' => 'Could not verify email'], 500);
    //     }
    // }
    

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

        // Email Verification using Hunter.io API
        $apiKey = env('HUNTER_API_KEY');
        $email = $attributes['email'];

        // Make GET request to Hunter.io API
        $response = Http::get("https://api.hunter.io/v2/email-verifier", [
            'email' => $email,
            'api_key' => $apiKey,
        ]);

   
        // Check if request was successful
        if ($response->successful()) {
            $data = $response->json();
    
            // Process the response data
            $result = $data['data']['result'];
            $score = $data['data']['score'];
    
        // Verify the email validity based on Hunter.io response
        if ($data['data']['result'] !== 'deliverable') {
            // If the email is not deliverable, return with an error
            return back()->withErrors(['email' => 'The provided email is not valid or deliverable, please enter valid email.']);
            }
        } else {
            // Handle cases where the API request failed
            return back()->withErrors(['email' => 'Could not verify the email address. Please try again later.']);
        }

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



