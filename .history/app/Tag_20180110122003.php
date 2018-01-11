<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts(){

        return $this->morhedByMany('App\Post','taggable');
    }

    public function videos(){

        return $this->morhedByMany('App\Video','taggable');
    }


}
