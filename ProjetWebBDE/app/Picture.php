<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    protected $fillable = [
        'url',
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product')->as('products');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->as('users');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
