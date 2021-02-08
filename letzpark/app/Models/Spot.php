<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// Will be related to the user's table

class Spot extends Model
{

    use HasFactory;

    // Connect to users table

    public function users()
    {
        return $this->belongsTo(User::class, 'spots_User');
    }
}
