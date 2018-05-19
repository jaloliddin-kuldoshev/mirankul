<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    //

	protected $table = 'works';
	protected $guarded = [];

	public function cat()
	{
		return $this->hasMany('App\Model\Catalogs', 'works_id');
	}
	public function ben()
	{
		return $this->hasMany('App\Model\Benefits', 'works_id');
	}
	public function alb()
	{
		return $this->hasMany('App\Model\Alboums', 'works_id');
	}
	public function video()
	{
		return $this->hasMany('App\Model\Videos', 'works_id');
	}
	public function product()
	{
		return $this->hasMany('App\Model\Products', 'works_id');
	}
}
