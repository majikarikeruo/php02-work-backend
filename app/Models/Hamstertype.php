<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamstertype extends Model
{
    use HasFactory;



    public function hamsters()
    {
        return $this->hasMany(Hamster::class);
    }
}
