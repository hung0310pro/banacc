<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccModel extends Model
{
	protected $table = "accs";

	protected $fillable = [
		'accname', 'accpass', 'notes','catalog_id','accstatus','user_id'
	];
}
