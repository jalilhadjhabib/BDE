<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->as('users');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->as('products')->withPivot('quantity');
    }
}
