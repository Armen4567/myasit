<?php

namespace App;
use App\Like ;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
       protected $fillable = ['title', 'category_id','description','image'];

    // posts belongs to one user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }


    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function likes()
    {
        return $this->morphMany('App\Like', 'likeable');
    }

}

