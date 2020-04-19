<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceMailModel extends Model
{
    protected $table = "giahotmail";
	public $timestamps = false;

	protected $fillable = [
		'name','price'
	];
}
