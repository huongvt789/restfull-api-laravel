<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyWork extends Model
{
    //
    protected $table="MyWork";
    protected $filltable = ['id', 'name','created_at','updated_at'];
    public $timestamps = false;
}
