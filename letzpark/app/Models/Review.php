<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Will be related to the user's and the rentals table

class Review extends Model
{
    use HasFactory;

    public $timestamps=false;

    public function users()
    {
        return $this->belongsTo(User::class, 'reviews_user');
    }

    public function rentals()
    {
        return $this->belongsTo(Rental::class, 'reviews_parking');
    }

}
