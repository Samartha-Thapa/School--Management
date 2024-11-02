<?php

namespace App\Http\Controllers;

use App\Models\AdminNotifications;
use App\Models\StudentNotifications;
use Illuminate\Http\Request;

class AdminNotificationsController extends Controller
{
    public function index(){

        return view('notifications.adminNotifications.index', [
            'adminNotifications' => AdminNotifications::latest()->paginate(6),
        ]);
    }

    public function show($id) {
        $adminNotification = AdminNotifications::findOrFail($id);
        return view('notifications.adminNotifications.show',[
            'adminNotification' => $adminNotification,
        ]);
    }

    public function create(){
        return view('notifications.adminNotifications.create');
    }

    public function store(){
        $attributes = request()->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        StudentNotifications::create($attributes);

        return redirect('/admin/notifications');
    }
}
