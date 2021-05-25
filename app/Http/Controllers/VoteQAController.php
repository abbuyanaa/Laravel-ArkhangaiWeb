<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class VoteQAController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$vote_data = DB::table('vote_question')
		->orderby('id','DESC')
		->get();
		return view('votes',['vote_data'=>$vote_data]);
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
		return view('vote-nemeh');
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
		$body = $request->body;
		$answer = $request->answer;
		$timeleft = $request->timeleft;

		if ($body == '' || $answer[0] == '' || $answer[1] == '' || $answer[2] == '' || $timeleft == '') {
			$msg = Session::put('msg', 'Та мэдээллээ гүйцэт оруулна уу.');
			return view('/vote-nemeh');
		} else {
			$data1 = array();
			$data1['title'] = $body;
			$data1['end_time'] = $timeleft;
			$ques_insert = DB::table('vote_question')
			->insert($data1);

			if ($ques_insert) {
				$ques_lastid = DB::table('vote_question')
				->orderby('id', 'DESC')
				->take(1)
				->first();

				$data2 = array();
				foreach($answer as $val) {
					$data2['ques_id'] = $ques_lastid->id;
					$data2['answer'] = $val;

					$ans_isnert = DB::table('vote_answer')
					->insert($data2);
				}
				return Redirect::to('votes');
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
		$check = DB::table('vote_question')
		->selectRaw('Count(*) as Total')
		->where('id',$id)
		->first();
		if (intval($check->Total) > 0) {
			$ques = DB::table('vote_question')
			->where('id',$id)
			->get();

			$ans = DB::table('vote_answer')
			->where('ques_id',$id)
			->get();
			return view('vote-zasah',['ques_data'=>$ques,'ans_data'=>$ans]);
		} else {
			return Redirect::to('votes');
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
		$title = $request->body;
		$answer = $request->answer;
		$answerid = $request->answerid;
		$timeleft = $request->timeleft;

		if ($title == '' || $answer[0] == '' || $answer[1] == '' || $answer[2] == '' || $timeleft == '') {
			$msg = Session::put('msg', 'Та мэдээллээ гүйцэт оруулна уу.');
			$ques = DB::table('vote_question')
			->where('id',$id)
			->get();

			$ans = DB::table('vote_answer')
			->where('ques_id',$id)
			->get();
			return view('/vote-zasah', ['ques_data'=>$ques,'ans_data'=>$ans]);
		} else {
			$data2 = array();
			for ($i=0; $i < count($answer); $i++) {
				$data2['answer'] = $answer[$i];
				$update = DB::table('vote_answer')
				->where('id', $answerid[$i])
				->update($data2);
			}
			$data1 = array();
			$data1['title'] = $title;
			$data1['end_time'] = $timeleft;

			$update = DB::table('vote_question')
			->where('id',$id)
			->update($data1);
			return Redirect::to('/votes');
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
		$check_ques = DB::table('vote_question')
		->selectRaw('Count(*) as Total')
		->where('id',$id)
		->first();

		if (intval($check_ques->Total) > 0) {
			$vote = DB::table('vote')
			->where('question', $id)
			->delete();

			$vote_answer = DB::table('vote_answer')
			->where('ques_id',$id)
			->delete();

			$vote_question = DB::table('vote_question')
			->where('id', $id)
			->delete();

			return Redirect::to('/votes');
		} else {
			return Redirect::to('/votes');
		}
	}
}
