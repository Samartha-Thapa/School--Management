<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSubjects extends Model
{
    use HasFactory;

    protected $table = 'class_subjects';

    protected $fillable = ['class', '1period', '2period', '3period', '4period', '5period', '6period', '7period'];
}
    