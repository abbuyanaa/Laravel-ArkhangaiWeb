<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class TenderTorolController extends Controller {

	public function showTenderTorol() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$get_tender_turul = DB::table('tender_torol')
		->orderby('id', 'desc')
		->get();
		$check_torol = DB::table('tender_torol')
		->selectRaw('Count(*) as Total')
		->first();
		if(intval($check_torol->Total) > 0){
			$count = $check_torol->Total;
		} else {
			$count = 0;
		}
		return view('tendertorol-list', ['get_tender_turul' => $get_tender_turul, 'check_torol' => $check_torol,]);
	}

	public function insertTenderTorol(Request $request){
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}

		$name = $request->name;

		if ($name == '') {
			Session::put('msg','Мэдээлэл хоосон байна!');
			return view('/tendertorol-nemeh');
		} else {
			$data = array();
			$data['name'] = $name;
			$insert_data = DB::table('tender_torol')
			->insert($data);
			if($insert_data){
				Session::put('message', 'Inserted!');
				return Redirect::to('/tendertorol-list');
			}
		}
	}

	public function createTenderTorol() {
		return view('/tendertorol-nemeh');
	}

	public function editTenderTorol($id){
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$check = DB::table('tender_torol')
		->selectRaw('Count(*) as Total')
		->where('id',$id)
		->first();
		if (intval($check->Total) > 0) {
			$get_tender_turul = DB::table('tender_torol')
			->where('id', $id)
			->get();
			return view('tendertorol-zasah', ['get'=>$get_tender_turul,]);
		} else {
			return Redirect::to('tendertorol-list');
		}
	}

	public function updateTenderTorol(Request $request, $id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$data = array();
		$data['name'] = $request->name;
		$update_data = DB::table('tender_torol')
		->where('id', $id)
		->update($data);
		if($update_data){
			Session::put('message', 'Inserted!');
			return Redirect::to('/tendertorol-list');
		}
	}

	public function deleteTenderTorol($id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$check = DB::table('tender_torol')
		->selectRaw('Count(*) as Total')
		->where('id',$id)
		->first();
		if (intval($check->Total) > 0) {
			$delete_data = DB::table('tender_torol')
			->where('id', $id)
			->delete();
			Session::put('message', 'Inserted!');
			return Redirect::to('/tendertorol-list');
		} else {
			return Redirect::to('tendertorol-list');
		}
	}
}
