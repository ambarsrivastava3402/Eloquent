<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = "roles";
    public function getuser()
    {
    	return $this->belongsToMany(User::class,'role_users');
    }
}

