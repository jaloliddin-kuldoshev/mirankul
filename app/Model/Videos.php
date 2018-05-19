<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    //
	protected $table = 'videos';
	protected $guarded = [];

	public function video()
	{
		return $this->belongsTo('App\Model\Works', 'works_id');
	}
}
