<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alboums extends Model
{
    //
	protected $table = 'alboums';
	protected $guarded = [];

	public function alb()
	{
		return $this->belongsTo('App\Model\Works', 'works_id');
	}
	public function photo()
	{
		return $this->hasMany('App\Model\Photo', 'alboums_id');
	}
}
