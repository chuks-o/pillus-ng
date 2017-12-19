<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Admin extends Model implements AuthenticatableContract
{
	use AuthenticatableTrait, Notifiable;

    protected $fillable = [
		 'name', 'email', 'password'
	 ];
	 protected $hidden = [
		 'password', 'remember_token',
	 ];

	 public function insights()
	 {
		 return $this->hasMany(App\Insight::class);
	 }
}
