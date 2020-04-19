<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogsModel;

class CatalogController extends Controller
{
	public function index()
	{
		return view('catalogs.catalogs');
	}

	public function create(Request $request)
	{
		$this->validate($request,
			[
				'name' => 'required|min:3|max:100',
			],
			[
				'name.required' => 'Catalog Name is require field',
				'name.min' => 'Enter at least 3 characters',
				'name.max' => 'Enter up to 100 characters',
			]
		);
		if ($request->name) {
			CatalogsModel::create([
				'catalogname' => $request->name,
				'notes' => $request->note,
				'catalogstatus' => 1
			]);
			return redirect('home')->with('successcatalogs', 'Add catalog success');
		}

	}
}
