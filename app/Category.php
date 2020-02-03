<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post(){
// Has many relationship to post
        return $this->hasMany('App\Post');
    }
}
