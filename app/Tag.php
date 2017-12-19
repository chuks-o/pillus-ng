<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = [
		'name'
	];

	protected $hidden = [];

	public function insights() {
		return $this->belongsToMany(Insight::class);
	}

	public function getRouteKeyName()
	{
		return 'name';
	}
}
