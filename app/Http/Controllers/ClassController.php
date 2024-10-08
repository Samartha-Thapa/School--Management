<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        $classes = Classes::all();
        return view('classes.index', ['classesData' => $classes]);
    }

    public function show() {
        $classes = Classes::all();
        return view('classes.show', ['classes' => $classes]);
    }
}
