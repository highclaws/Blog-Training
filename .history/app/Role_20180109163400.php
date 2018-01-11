<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users(){
return $this->belongsTomant('App\user')->withPivot('created_at','' );
        //return $this->belongsToMany('App\User');
    }
}
