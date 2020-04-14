<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pan extends Model
{
    protected $fillable = [
        'panname',
        'storename',
        'image',
        'permit',
        'closeststation',
        'instagramid',
        'storepath',
        'tag_id',
        'store_id',
    ];

    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
