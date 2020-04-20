<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $fillable = [
        'genreName',
    ];

    public function pans()
	{
		return $this->hasMany('App\Pan');
	}
}
