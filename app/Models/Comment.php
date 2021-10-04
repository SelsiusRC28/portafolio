<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    

    public function proyect(){
        $this->belongTo(Proyect::class);
    }

    public function user(){
        $this->belongsTo(User::class);
    }
}
