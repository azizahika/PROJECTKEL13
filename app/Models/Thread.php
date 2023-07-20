<?php

// app/Models/Thread.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['content'];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
