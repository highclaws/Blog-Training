<?php

/*
 * Created on Tue Jan 09 2018
 *
 * Copyright (c) 2018 Your Company
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    //
    //  protected $table = 'posts';

    //  protected $primaryKey = 'post_id';

protected $fillable = [
    'title',
    'content'
];
}
