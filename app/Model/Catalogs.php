<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catalogs extends Model
{
    //
	protected $table = 'catalogs';
	protected $guarded = [];

	public function cat()
	{
		return $this->belongsTo('App\Model\Works', 'works_id');
	}
	public function products()
	{
		return $this->hasMany('App\Model\Products', 'catalogs_id');
	}
}
