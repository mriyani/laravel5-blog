<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['title'];

    public function catogories()
    {
    	return $this->hasMany('App\Categories');
    }




}
