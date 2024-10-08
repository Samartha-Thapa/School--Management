<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable; // Import this for authentication
use Illuminate\Auth\Authenticatable as AuthenticatableTrait; // Import this trait

class Admin extends Model implements Authenticatable // Implement the Authenticatable interface
{
    use HasFactory, Notifiable, AuthenticatableTrait; // Use the Authenticatable trait

    protected $table = 'admins';

    protected $fillable = ['adminUserName', 'adminEmail', 'adminPassword'];

    protected $hidden = [
        'adminPassword',
    ];

    public function getAuthIdentifierName()
    {
        return 'adminEmail'; // Tell Laravel that this is the identifier field
    }

    public function getAuthPassword()
    {
        return $this->adminPassword;
    }

    public function getIsAdminAttribute()
    {
        // Adjust this logic based on your application's definition of admin
        return $this->role === 'admin'; // Assuming you have a role column
    }
}
