<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rent';
    protected $guarded = [''];
    public function car () {
        return $this->belongsTo(Car::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }
}


