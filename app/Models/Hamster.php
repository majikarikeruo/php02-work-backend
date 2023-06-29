<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamster extends Model
{
    use HasFactory;





    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function hamstertype()
    {
        return $this->belongsTo(Hamstertype::class);
    }
}
