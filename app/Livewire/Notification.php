<?php

namespace App\Livewire;

use App\Models\AdminNotifications;
use App\Models\StudentNotifications;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notification extends Component
{
    public $show = false;

    public $data;

    public function mount() {
        if (Auth::guard('admin')->check()){
            $this->data = AdminNotifications::latest()->take(8)->get();
        }elseif (Auth::guard('student')->check()){
            $this->data = StudentNotifications::latest()->take(8)->get();
        }
    }

    public function handleOutsideClick() {
        $this->show = false;
    }

    public function toogleShow(){
        $this->show = !$this->show;
    }

    public function render()
    {
        return view('livewire.notification');
    }
}
