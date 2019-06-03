<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = array('dis_img','dis_type','dis_name','dis_body');
}
