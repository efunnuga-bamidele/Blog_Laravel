<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

use SoftDeletes;


    // belongs to relationship for category
    public function category(){
        return $this->belongsTo('App\Category');
    }

    protected $fillable = [
        'title', 'content', 'category_id', 'featured', 'slug'
    ];

    // to convert image directory to address
    public function getFeaturedAttribute($featured){
        return asset($featured);
    }

    protected $dates = ['deleted_at'];
}
