<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class NewsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$news_data = DB::table('news as n')
		->join('category as c', 'c.id', '=', 'n.cat_id')
		->select('n.id','n.title','n.body','n.image','c.name','n.view')
		->orderby('id', 'DESC')
		->get();
		return view('news',['news_data'=>$news_data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$cat_data = DB::table('category')
		->orderby('id', 'DESC')
		->get();
		return view('news-nemeh', ['cat_data'=>$cat_data]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$cat_data = DB::table('category')
		->orderby('id', 'DESC')
		->get();

		$title = $request->title;
		$body = $request->body;
		$cat = $request->cat;
		$image = $request->file('image');
		$file_ext = $image->getClientOriginalExtension();
		$file_name = $image->getClientOriginalName();
		$file_size = $image->getSize();

		$permited = array('png','jpg','jpeg','gif','PNG','JPG','JPEG','GIF');
		if (in_array($file_ext, $permited) === false) {
			$result = 'Хуулах боломжтой файлын өргөтгөл: '.implode(', ', $permited);
			Session::put('msg',$result);
			return view('news-nemeh', ['cat_data'=>$cat_data]);
		} else if ($file_size < 10240) {
			$result = 'Зурагны хэмжээ хэт өндөр байна. Max: 10MB';
			Session::put('msg',$result);
			return view('news-nemeh', ['cat_data'=>$cat_data]);
		} else {
			$rename = 'images/'.date('Y_m_d_').time().'_'.$file_name;
			$data = array();
			$data['cat_id'] = $cat;
			$data['title'] = $title;
			$data['body'] = $body;
			$data['image'] = $rename;

			$insert = DB::table('news')->insert($data);
			if ($insert) {
				if ($image->move('images/', $rename)) {
					return Redirect::to('news');
				}
			}
		}
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
	public function edit($id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$cat_data = DB::table('category')
		->orderby('id', 'DESC')
		->get();

		$check = DB::table('news')
		->selectRaw('Count(*) as Total')
		->where('id',$id)
		->first();
		if (intval($check->Total) > 0) {
			$news_data = DB::table('news')
			->where('id',$id)
			->get();
			return view('/news-zasah', ['cat_data'=>$cat_data, 'news_data'=>$news_data]);
		} else {
			return Redirect::to('/news');
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$cat_data = DB::table('category')
		->orderby('id', 'DESC')
		->get();

		$news_data = DB::table('news')
		->where('id',$id)
		->get();

		$etitle = $request->etitle;
		$ebody = $request->ebody;
		$ecat = $request->ecat;
		$delimg = $request->delimg;
		$image = $request->file('eimage');

		if ($image == '') {
			$data = array();
			$data['title'] = $etitle;
			$data['body'] = $ebody;
			$data['cat_id'] = $ecat;

			$update = DB::table('news')
			->where('id',$id)
			->update($data);
			if ($update) {
				return Redirect::to('news');
			}
		} else {
			$file_ext = $image->getClientOriginalExtension();
			$file_name = $image->getClientOriginalName();
			$file_size = $image->getSize();
			$permited = array('png','jpg','jpeg','gif','PNG','JPG','JPEG','GIF');
			if (in_array($file_ext, $permited) === false) {
				$result = 'Хуулах боломжтой файлын өргөтгөл: '.implode(', ', $permited);
				Session::put('msg',$result);
				return view('news-zasah', ['cat_data'=>$cat_data, 'news_data'=>$news_data]);
			} else if ($file_size < 10240) {
				$result = 'Зурагны хэмжээ хэт өндөр байна. Max: 10MB';
				Session::put('msg',$result);
				return view('news-zasah', ['cat_data'=>$cat_data]);
			} else {
				$rename = 'images/'.date('Y_m_d_').time().'_'.$file_name;
				$data = array();
				$data['title'] = $etitle;
				$data['body'] = $ebody;
				$data['cat_id'] = $ecat;
				$data['image'] = $rename;

				$update = DB::table('news')
				->where('id',$id)
				->update($data);
				if ($update) {
					if ($image->move('images/', $rename)) {
						if (file_exists($delimg)) {
							unlink($delimg);
						}
						return Redirect::to('news');
					}
				}
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$check_data = DB::table('news')
		->where('id',$id)
		->get();
		foreach($check_data as $row) {
			$image = $row->image;
			if (file_exists($image)) {
				unlink($image);
			}
			$delete = DB::table('news')
			->where('id',$id)
			->delete();
			return Redirect::to('news');
		}
	}
}
