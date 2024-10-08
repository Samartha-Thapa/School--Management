<?php


namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class AuthStudentUser extends Model implements Authenticatable
{
    use Notifiable, HasFactory, AuthenticatableTrait;

    protected $fillable = ['studentUserName', 'studentEmail', 'studentPassword'];

    protected $hidden = [
        'studentPassword',
    ];

    public function getAuthPassword()
    {
        return $this->studentPassword;
    }

    public function getIsAdminAttribute()
    {
        // Adjust this logic based on your application's definition of admin
        return $this->role === 'admin'; // Assuming you have a role column
    }
    
    protected $table='authstudentsuser';
}
