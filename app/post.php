<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table = "posts";

    public function getcomment()
    {
    	return $this->hasMany('App\Comment');
    }

}



 