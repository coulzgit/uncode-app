<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    //

    public function formation(){
        return $this->belongsTo(Formation::class);
    }
}
