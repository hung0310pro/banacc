<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogChildModel extends Model
{
	protected $table = "catalogchild";

	protected $fillable = [
		'name', 'id_catalog', 'price'
	];
}
