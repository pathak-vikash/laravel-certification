<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public $appends = ["full_content"];

    public function author(){
        return $this->belongsTo(\App\User::class, "author_id");
    }


    public function getContentAttribute($value){
        return substr($value, 0, 100);
    }

    public function getFullContentAttribute(){
        return $this->attributes['content'];
    }
}
