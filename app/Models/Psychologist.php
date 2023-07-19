<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Psychologist extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }
}
