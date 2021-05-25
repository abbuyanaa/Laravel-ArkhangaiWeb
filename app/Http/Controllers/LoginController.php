<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class LoginController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('/login');
	}

	public function login(Request $request) {
		$email = $request->email;
		$password = md5($request->password);

		$check_user = DB::table('users')
		->selectRaw('Count(*) as Total')
		->where('email',$email)
		->where('password',$password)
		->first();
		if (intval($check_user->Total) > 0) {
			$user = DB::table('users as u')
			->select('u.email', 'u.profile', 'u.id', 'p.medee', 'p.tender', 'p.support', 'p.q_and_a', 'p.youtube', 'p.medeelel')
			->join('permission as p', 'u.id', '=', 'p.uid')
			->where('email', $email)
			->where('password', $password)
			->first();
			$data = array();
			$data['medee'] = $user->medee;
			$data['tender'] = $user->tender;
			$data['support'] = $user->support;
			$data['q_and_a'] = $user->q_and_a;
			$data['youtube'] = $user->youtube;
			$data['medeelel'] = $user->medeelel;
			Session::put('email', $user->email);
			Session::put('profile', $user->profile);
			Session::put('userid', $user->id);
			Session::put('permission', $data);
			return Redirect::to('/');
		} else {
			Session::put('msg', 'Цахим хаяг эсвэл Нууц үг буруу байна!');
			return view('/login');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function logout() {
		if (Session::get('email') != '') {
			Session::forget('email');
			return Redirect::to('/login');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
