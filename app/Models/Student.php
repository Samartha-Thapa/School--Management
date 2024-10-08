<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['stdName', 'stdAddress', 'stdPhone', 'Class', 'Section', 'stdEmail', 'stdPassword', 'classes_id'];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'Class', 'Class')->where('Section', $this->Section);
    }

}
