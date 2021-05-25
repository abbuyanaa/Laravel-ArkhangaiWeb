<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class IndexController extends Controller {

	public function index(){
		if (Session::get('email') == '') {
			return Redirect::to('login');
		} else {
			if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
				$IP = $_SERVER["HTTP_CLIENT_IP"];
			} elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
				$IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
			} else {
				$IP = $_SERVER["REMOTE_ADDR"];
			}
			$support_data = DB::table('support')
			->orderby('id','desc')
			->limit(5)
			->get();

			$most_news = DB::table('news')
			->orderby('view', 'desc')
			->limit(5)
			->get();
			$most_tender = DB::table('tender')
			->orderby('view', 'desc')
			->limit(5)
			->get();
			$visited = DB::table('web_visited')
			->orderby('datetime', 'desc')
			->limit(5)
			->get();
			return view('index', ['support'=>$support_data,'most_news'=>$most_news, 'most_tender'=>$most_tender, 'visited'=>$visited]);
		}
	}
}
