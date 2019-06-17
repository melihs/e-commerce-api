<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [

		'name','detail','price','stock','discount'

	];

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
}
