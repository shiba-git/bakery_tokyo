<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tagName',
    ];
    public function pans()
	{
		return $this->belongsToMany('App\Pan');
	}
}
