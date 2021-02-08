<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Will be related to the user's table


class Rental extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class, 'rental_user');
       
    }
}
