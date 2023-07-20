<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function questionnaires()
    {
        return $this->hasMany(UserQuestionnaire::class);
    }
}
