<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user(){
        
    return $this->belongsTomant('App\user');
        //return $this->belongsToMany('App\User');
    }
}
