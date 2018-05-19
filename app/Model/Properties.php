<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    //
	protected $table = 'properties';
	protected $guarded = [];

	public function pro()
	{
		return $this->belongsTo('App\Model\Products', 'products_id');
	}
}
