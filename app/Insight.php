<?php

namespace App;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
		use Taggable;

    protected $fillable = [
		 'title', 'content'
	 ];

	 protected $hidden = [];

	 public function getRouteKeyName()
    {
		return 'title';
    }

	 public function user()
	 {
		 return $this->belongsTo(User::class);
	 }

}
