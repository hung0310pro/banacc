<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatalogChildModel;
use App\PriceMailModel;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\AccModel;
use App\User;

class HomeCatalogController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$user = Auth::user();
		$idCatalog = $request->idCatalog;
		$price = $request->price;
		$numberacc = $request->numberacc;
		$error = [];
		$check = $numberacc % 1;
		if ($numberacc == null || $numberacc == "" || $numberacc == 0 || $check != 0) {
			$error['number'][] = 'Số lượng không hợp lệ';
		}

		if ($price > $user->total_money) {
			$error['price'][] = 'Bạn không đủ số tiền';
		}

		if (count($error) > 0) {
			return 2;
		} else {
			$accModel = AccModel::where('catalog_id', $idCatalog)->where('accstatus', '1')->limit($numberacc)->get();
			if (count($accModel->toArray()) < $numberacc) {
				return 3;
			} else {
				$totalMoney = $user->total_money - $price;
				$array = [];
				$bien = 0;
				foreach ($accModel as $value) {
					$bien++;
					$array[$bien] = $value->id;
				}
				if (count($array) == $numberacc) {
					AccModel::whereIn('id', $array)
						->update([
							'accstatus' => '2',
							'user_id' => $user->id,
						]);

					$users = User::findOrFail($user->id);
					$users->total_money = $totalMoney;
					$users->save();
					return 1;
				}
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$priceMailModel = PriceMailModel::all();
		$usersAdmin = User::where('level',1)->get();
		$catalogChild = CatalogChildModel::select('id', 'name', 'price')->where('id_catalog', $id)->get();
		return view('acc.acc', ['catalogChild' => $catalogChild, 'priceMailModel' => $priceMailModel,'usersAdmin' => $usersAdmin]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}

	public function indexAccount(){
		$user = Auth::user();
		$listacc = AccModel::where('accstatus',2)->where('user_id',$user->id)->get();
		return view('acc.listacc',['listacc' => $listacc]);
	}
}
