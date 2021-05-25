<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class TenderController extends Controller {
	
	public function showTender() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$tender_data = DB::table('tender as t')
		->join('tender_torol as tt', 't.torol_id', '=', 'tt.id')
		->select('t.id', 't.title', 't.body', 't.file', 'tt.name','t.view')
		->orderby('t.id', 'DESC')
		->get();
		return view('tenderlist', ['tender_data'=>$tender_data]);
	}

	public function comboTenderTorolNemeh() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$torol_data = DB::table('tender_torol')
		->orderby('id', 'DESC')
		->get();
		return view('tender-nemeh', ['tender_torol'=>$torol_data]);
	}

	public function insertTender(Request $request) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$torol_data = DB::table('tender_torol')
		->orderby('id', 'DESC')
		->get();

		$title = $request->title;
		$body = $request->body;
		$cat = $request->cat;
		$file = $request->file('file');

		if ($title == '' || $body == '' || $cat == 0 || $file == '') {
			Session::put('msg', 'Та мэдээллээ дахин шалгана уу!');
			return view('tender-nemeh', ['tender_torol'=>$torol_data,]);
		} else {
			$file_name = $file->getClientOriginalName();
			$file_ext = $file->getClientOriginalExtension();
			$file_tmp = $file->getBasename();
			$permited = array('pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx');
			if (in_array($file_ext, $permited) === false) {
				$result = 'Хуулах боломжтой файлын өргөтгөл: '.implode(', ', $permited);
				Session::put('msg', $result);
				return view('tender-nemeh', ['tender_torol'=>$torol_data,]);
			} else {
				$rename = 'files/'.date('Y_m_d_').time().'_'.$file_name;
				$data = array();
				$data['torol_id'] = $cat;
				$data['title'] = $title;
				$data['body'] = $body;
				$data['file'] = $rename;
				
				$insert_data = DB::table('tender')
				->insert($data);
				if ($file->move('files/', $rename)) {
					return Redirect::to('/tenderlist');
				}
			}
		}
	}

	public function editTender($id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$torol_data = DB::table('tender_torol')
		->orderby('id', 'DESC')
		->get();

		$edit_tender = DB::table('tender')
		->where('id', $id)
		->get();
		return view('tender-zasah', ['edit_tender'=>$edit_tender, 'tender_torol'=>$torol_data]);
	}

	public function updateTender(Request $request, $id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$etitle = $request->etitle;
		$ebody = $request->ebody;
		$ecat = $request->ecat;
		$efile = $request->file('efile');
		$getfile = $request->getfile;

		if ($etitle == '' || $ebody == '' || $ecat == 0) {
			$result = 'Та мэдээллээ гүйцэт оруулна уу!';

			$torol_data = DB::table('tender_torol')
			->orderby('id', 'DESC')
			->get();
	
			$edit_tender = DB::table('tender')
			->where('id', $id)
			->get();
			Session::put('msg', $result);
			return view('tender-zasah', ['edit_tender'=>$edit_tender, 'tender_torol'=>$torol_data]);
		} else {
			if (empty($efile)) {
				$data['torol_id'] = $ecat;
				$data['title'] = $etitle;
				$data['body'] = $ebody;
				
				$insert_data = DB::table('tender')
				->where('id', $id)
				->update($data);
				return Redirect::to('/tenderlist');
			} else {
				$file_name = $efile->getClientOriginalName();
				$file_ext = $efile->getClientOriginalExtension();
				$permited = array('pdf', 'doc', 'docx', 'ppt', 'pptx', 'xls', 'xlsx');
				if (in_array($file_ext, $permited) === false) {
					$result = 'Хуулах боломжтой файлын өргөтгөл: '.implode(', ', $permited);

					$torol_data = DB::table('tender_torol')
					->orderby('id', 'DESC')
					->get();
			
					$edit_tender = DB::table('tender')
					->where('id', $id)
					->get();
					Session::put('msg', $result);
					return view('tender-zasah', ['edit_tender'=>$edit_tender, 'tender_torol'=>$torol_data]);
				} else {
					$rename = 'files/'.date('Y_m_d_').time().'_'.$file_name;
					$data = array();
					$data['torol_id'] = $ecat;
					$data['title'] = $etitle;
					$data['body'] = $ebody;
					$data['file'] = $rename;
					
					$insert_data = DB::table('tender')
					->where('id', $id)
					->update($data);

					if ($efile->move('files/', $rename)) {
						if (file_exists($getfile)) {
							unlink($getfile);
						}
						return Redirect::to('/tenderlist');
					}
				}
			}
		}
	}

	public function deleteTender($id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$delete_data = DB::table('tender')
		->where('id', $id)
		->get();
		foreach($delete_data as $row) {
			$delfile = $row->file;
			if (file_exists($delfile)) {
				unlink($delfile);
			}
		}
		$delete_data = DB::table('tender')
		->where('id', $id)
		->delete();
		return Redirect::to('/tenderlist');
	}
}
