<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    //
    protected $fillable = [
        'name', 'description', 'price', 'recurrent',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->as('users');
    }

    public function creator()
    {
        return $this->belongsTo('App\User');
    }
}
