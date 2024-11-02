<?php

namespace App\Livewire;

use App\Models\Classes;
use App\Models\ClassSubjects;
use Livewire\Component;

class ClassSubject extends Component
{
    public $classSubject;
    public $classes;
    public $show = false;
    public $classValue;
    
        public function toggleShow(){
            $this->show = !$this->show;
        }

    public function mount($class, $section){

        $classValue = $class . $section;
        $this->classSubject = ClassSubjects::where('class', $classValue)->first();
        $this->classes = Classes::all();        
    }


    public function render()
    {
        return view('livewire.class-subject',[
            'classes' => $this->classes,
            'classSubject' => $this->classSubject,
        ]);
    }
}
