<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassSubjects;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        

        $classes = Classes::all();
        return view('classes.index', ['classesData' => $classes]);
    }

    public function show($class, $section) {

        $classValue = $class . $section;
        
        $classSubject = ClassSubjects::where('class', $classValue)->first();

        $classes = Classes::all();
        return view('classes.show', ['classes' => $classes], ['classSubject' => $classSubject]);
    }

    public function store($class, $section) {

        $classValue = $class . $section;

        $attributes = request()->validate([
            '1period' => 'required|string',
            '2period' => 'required|string',
            '3period' => 'required|string',
            '4period' => 'required|string',
            '5period' => 'required|string',
            '6period' => 'required|string',
            '7period' => 'required|string',
        ]);

        $attributes['class'] = $classValue;

        // Check if the class with this classValue already exists

        $existingClassSubject = ClassSubjects::where('class', $classValue)->first();

        if($existingClassSubject){
            $existingClassSubject->update($attributes);
        } else {
            ClassSubjects::create($attributes);
        }
        
        return redirect('/classes');

    }
}
