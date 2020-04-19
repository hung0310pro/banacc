<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$user = Auth::user();
		if ($user->level === 1) {
			$listUsers = User::all(['id', 'name', 'email', 'phone', 'level']);
			return view('users.listusers', ['listUsers' => $listUsers]);
		} else {
			return redirect('home');
		}
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
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		try {
			$user = User::findOrFail($id, ['id', 'name', 'email', 'phone', 'level']);
		} catch (ModelNotFoundException $exception) {
			return back()->withError($exception->getMessage());
		}
		return view('users.edituser', ['user' => $user]);
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
		if ($id) {
			$users = User::findOrFail($id);
			if ($users->email == $request->email) {
				$this->validate($request,
					[
						'name' => 'required',
						'email' => 'required',
						'phone' => 'regex:/(0)[0-9]{9}/',
					],
					[
						'email.required' => 'This is require field',
						'name.required' => 'This is require field',
						'phone.regex' => 'The phone number is not in the correct format',
					]
				);
			} else {
				$this->validate($request,
					[
						'name' => 'required',
						'email' => 'required|unique:users',
						'phone' => 'regex:/(0)[0-9]{9}/',
					],
					[
						'email.required' => 'This is require field',
						'email.unique' => 'This email is valid',
						'name.required' => 'This is require field',
						'phone.regex' => 'The phone number is not in the correct format',
					]
				);
			}
			if ($id) {
				$users->name = $request->name;
				$users->email = $request->email;
				$users->phone = $request->phone;
				$users->save();
				return redirect('admin/listuser/' . $id)->with('success', 'Update success');
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$users = User::findOrFail($id);
		$users->delete();
		return redirect('admin/listuser/')->with('deletesuccess', 'Delete success');
	}
}
