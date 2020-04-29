<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $fillable = [
        'storeName',
        'api_id',
    ];
	public function pans()
	{
		return $this->hasMany('App\Pan');
	}
}
