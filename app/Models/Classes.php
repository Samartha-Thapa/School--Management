<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;


    protected $fillable = ['Class', 'Section', 'total'];

    public function student()
    {
        return $this->hasMany(Student::class, 'Class', 'Class')->where('Section', $this->Section);
    }

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
