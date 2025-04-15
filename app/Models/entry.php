<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Entry extends Model
{
    //Entry->user
	//Entry n - 1 User
	//Eager loading
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	//mutator
	public function setTitleAttribute($value)
	{
			$this->attributes['title'] = $value;
			$this->attributes['slug'] = Str::slug($value);
	}

	public function getUrl()
	{
		return url("entries/$this->slug-$this->id");
	}
}
