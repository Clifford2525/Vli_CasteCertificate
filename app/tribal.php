<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tribal extends Model
{
    protected $fillable = ['Name','Age','Gender'];

    public $timestamps=true;
}
