<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';


    public function blog()
    {
    	return $this->hasMany('App\Blog');
    }
}
