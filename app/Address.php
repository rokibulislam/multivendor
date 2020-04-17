<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
    	'name',
    	'city',
    	'postal_code'
    ];

    public static function boot()
    {
        parent::boot();

	}
}
