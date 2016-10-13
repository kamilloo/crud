<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['description','preface','status'];

	static protected $validationRules = [
            'description' => 'required|max:10000',
            'preface' => 'required|min:10|unique:posts,preface',
            'status' => 'required|boolean',
            ];

    static public function getValidationRules()
    {
    	return static::$validationRules;
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
