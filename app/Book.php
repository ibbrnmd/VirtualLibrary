<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    public $fillable     = ['name'];

    public function  authors (){
        //return $this->belongsTo(related: Author::class);
         return $this->hasMany(related:Author::class);


    } 

    // public function book(){
    //     return $this->belongsTo(related:Author::class);
    // }

}
