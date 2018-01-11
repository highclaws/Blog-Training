<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts(){

        return $this->morhedByMany('app\Post','taggable');
    }

    public function video(){

        return $this->morhedByMany('app\Post','taggable');
    }
}
