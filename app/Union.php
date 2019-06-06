<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    protected $fillable = [
    	'initials', 'slug', 'name'
    ];

    public function associations()
    {
    	return $this->hasMany('App\Association');
    }
}
