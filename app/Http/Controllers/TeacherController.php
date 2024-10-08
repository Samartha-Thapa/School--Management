<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Facades\Agent;

class TeacherController extends Controller
{
    public function show(){
    $teachers = Teacher::all();
    
    return view('teachers.show', ['teachers' => $teachers]);
    }

    public function create(){
        if(Auth::guard('admin')->check()){
            return view('teachers.create');
        }else{
            abort(403, 'Unauthorized action.');
        }

    }

    public function store(){
        if(!Auth::guard('admin')->check()){
            abort(403);
         }
        $validatedData = request()->validate([
            'thName' => ['required'],
            'thSubject' => ['required'],
            'thAddress' => ['required'],
            'thPhone' => ['required'],
            'thEmail' => ['required', 'email'],
            'thPassword' => ['required'],
        ]);

        // dd($validatedData);
        Teacher::create($validatedData);

        return redirect('/teachers');
    }
}
