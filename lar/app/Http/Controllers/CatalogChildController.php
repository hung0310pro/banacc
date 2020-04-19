<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogChildModel;
use App\CatalogsModel;

class CatalogChildController extends Controller
{
	public function index()
	{
		$catalogs = CatalogsModel::all();
		return view('catalogs.catalogchild',['catalogs' => $catalogs]);
	}

	public function create(Request $request)
	{
		$this->validate($request,
			[
				'name' => 'required|min:3|max:100',
				'price' => 'required'
			],
			[
				'name.required' => 'Name is require field',
				'name.min' => 'Enter at least 3 characters',
				'name.max' => 'Enter up to 100 characters',
				'price.required' => 'Price is require field',
			]
		);
		if ($request->id_catalog) {
			CatalogChildModel::create([
				'name' => $request->name,
				'price' => $request->price,
				'id_catalog' => $request->id_catalog,
			]);
			return redirect('home')->with('successcatalogschild', 'Add catalog child success');
		}else{
			return redirect('admin/catalogchild')->with('errorcatalogschild', 'Parent Catalog is require field');
		}
	}
}
