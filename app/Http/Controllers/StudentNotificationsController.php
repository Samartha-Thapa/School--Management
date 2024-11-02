<?php

namespace App\Http\Controllers;

use App\Models\AdminNotifications;
use App\Models\StudentNotifications;
use Illuminate\Http\Request;

class StudentNotificationsController extends Controller
{
    public function index() {
        return view('notifications.studentNotifications.index',[
            'studentNotifications' => StudentNotifications::latest()->paginate(8),
        ]);
    }

    public function show($id) {
        $studentNotification = StudentNotifications::findOrFail($id);
        return view('notifications.studentNotifications.show',[
            'studentNotification' => $studentNotification,
        ]);
    }

    public function create() {
        return view('notifications.studentNotifications.create');
    }

    public function store(){

        // Get the currently authenticated student
        $student = auth()->guard('student')->user();

        // Validating request data
        $attributes = request()->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        // Adding the sender name to the notification
        $attributes['sender'] = $student->studentUserName;

        // Now you can create the StudentNotification   
        AdminNotifications::create($attributes);

        return redirect('/students/notifications');
    }
}
