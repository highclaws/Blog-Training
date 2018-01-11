<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function posts(){
        return $this->hasManythrough('App\Post', 'App\User');
    }
}
