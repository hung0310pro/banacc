<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogsModel extends Model
{
	protected $table = "parentcatalogs";
	public $timestamps = false;

	protected $fillable = [
		'catalogname','notes','catalogstatus'
	];
}
