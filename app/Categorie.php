<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //

    public function formations(){
        return $this->hasMany(Formation::class);  
    } 
}
