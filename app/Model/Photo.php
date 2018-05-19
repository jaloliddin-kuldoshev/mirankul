<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
	protected $table = 'photos';
	protected $guarded = [];

	public function photo()
	{
		return $this->belongsTo('App\Model\Alboums', 'alboums_id');
	}
}
