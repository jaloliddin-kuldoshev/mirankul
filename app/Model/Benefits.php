<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Benefits extends Model
{
    //
	protected $table = 'benefits';
	protected $guarded = [];

	public function ben()
	{
		return $this->belongsTo('App\Model\Works', 'works_id');
	}
}
