<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $fillable = [
    	'name',
        'slug',
        'email',
    	'phone',
    	'age',
        'gender',
    	'marital_status',
    	'image',
    	'description',
        'image_men',
    	'content',
        'name_wife',
        'image_woman',
        'content_woman',
    	'external_url',
    	'redirect',
        'order',
        'enabled',
        'status',
    	'user_id',
    	'association_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function association()
    {
        return $this->belongsTo('App\Association');
    }

    public function course()
    {
    	return $this->belongsTo('App\Course');
    }

    public function period()
    {
    	return $this->belongsTo('App\Period');
    }
}
