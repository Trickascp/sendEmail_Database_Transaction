<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{


	protected $table = 'blogs';

	public function kategori()
	{
		return $this->belongsTo('App\Kategori');
	}

}
