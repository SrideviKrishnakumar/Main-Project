<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Will be related to the user's table

class Bug extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'bugs_user');
    }
}
