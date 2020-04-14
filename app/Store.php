<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $fillable = [
        'storeName',
    ];
	public function pans()
	{
		return $this->hasMany('App\Pan');
	}
}
