<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class StudentController extends Controller
{
    public function show(){
        $classes = Classes::all();
        return view('students.show', ['classes' => $classes]);
    }

    public function create(){
        if(Auth::guard('admin')->check()){
            $classes = Classes::all();
            return view('students.create', ['classesId' => $classes]);
        }else{
            abort(403, 'Unauthorized action.');
        }

    }

    public function store() 
    {

        if(!Auth::guard('admin')->check()){
           abort(403);
        }
        
        $validatedData = request()->validate([
            'stdName' => ['required'],
            'stdAddress' => ['required'],
            'stdPhone' => ['required'],
            'Class' => ['required'],
            'Section' => ['required'],
            'stdEmail' => ['required', 'email', 'unique:students,stdEmail'],
            'stdPassword' => ['required'],
        ], [
            'stdEmail.unique' => 'The email has already been registered. Please use a different email.',
        ]);

        $class = Classes::where('Class', $validatedData['Class'])
                        ->where('Section', $validatedData['Section'])
                        ->first();

        if($class) {
            $class->increment('total');
        } else {
            $class = Classes::create([
                'Class' => $validatedData['Class'],
                'Section' => $validatedData['Section'],
                'total' => 1
            ]);
        }

        $validatedData['classes_id'] = $class->id;

        // dd($validatedData);
        Student::create($validatedData);

        return redirect('/students');
    }
}
