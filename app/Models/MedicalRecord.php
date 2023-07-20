<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable = [
        'user_id', 'psychologist_id', 'diagnosis', 'treatment_notes', 'evaluation_results',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
