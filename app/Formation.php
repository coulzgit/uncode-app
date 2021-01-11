<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //

    public function inscriptions(){
        return $this->hasMany(Inscription::class);  
    } 

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function temoignages(){
        return $this->hasMany(Temoignage::class);  
    }
}
