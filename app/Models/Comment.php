<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    

    public function proyect(){
        return $this->belongTo(Proyect::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
