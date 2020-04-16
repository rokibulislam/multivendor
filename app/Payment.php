<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'id';

   	protected $attributes = [];
   	protected $fillable   = [];
   	protected $guarded 	  = [];
    protected $hidden     = [];
   	protected $dispatchesEvents = [];
    protected $casts = [];

   	public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

   	protected static function booted() 
   	{

   	}
}
