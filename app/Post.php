<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
        'title', 'description',
    ];
	
	
	public function photos()
	{
		return $this->morphMany('App\Photo', 'photographable');
	}
	
    public function comments()
    {
		return $this->hasMany('App\Comment');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
