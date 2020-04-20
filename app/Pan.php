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
        'genre_id',
        'store_id',
    ];

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
