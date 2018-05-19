<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
	protected $table = 'products';
	protected $guarded = [];

	public function products()
	{
		return $this->belongsTo('App\Model\Catalogs', 'catalogs_id');
	}
	public function product()
	{
		return $this->belongsTo('App\Model\Works', 'works_id');
	}
	public function pro()
	{
		return $this->hasMany('App\Model\Properties', 'products_id');
	}
}
