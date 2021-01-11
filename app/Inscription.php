<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    //


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function formation(){
        return $this->belongsTo(Formation::class);
    }
}
