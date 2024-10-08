<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['thName','thSubject', 'thAddress', 'thPhone', 'thEmail', 'thPassword'];
    
    public function Class() {
        return $this->belongsTo(Classes::class);
    }
}
