<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = [
        'psychologist_id', 'question', 'options',
    ];

    public function psychologist()
    {
        return $this->belongsTo(Psychologist::class);
    }
}
