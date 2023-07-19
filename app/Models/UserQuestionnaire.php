<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuestionnaire extends Model
{
    protected $fillable = [
        'user_id', 'questionnaire_id', 'answers',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }
}
