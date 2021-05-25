<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class ProfileController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$user_data = DB::table('users')
		->where('id', Session::get('userid'))
		->get();
		return view('profile', ['user_data'=>$user_data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function profile() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$user_data = DB::table('users')
		->where('id', Session::get('userid'))
		->get();
		return view('/profile', ['getuser'=>$user_data]);
	}

	public function create() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		} else {
			return view('/user-nemeh');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$fname = $request->fname;
		$lname = $request->lname;
		$email = $request->email;
		$phone = $request->phone;
		$password1 = $request->password1;
		$password2 = $request->password2;
		$image = $request->file('profile');

		if ($fname == '' || $lname == '' || $email == '' || $phone == '' || $password1 == '' || $password2 == '' || $password2 == '') {
			Session::put('msg', 'Мэдээлэл дутуу байна!');
			return view('/user-nemeh');
		} else {
			$file_ext = $image->getClientOriginalExtension();
			$file_name = $image->getClientOriginalName();

			$permited = array('png','jpg','jpeg','gif','PNG','JPG','JPEG','GIF');
			if (in_array($file_ext, $permited) === false) {
				Session::put('msg', 'Хуулах боломжтой файлын өргөтгөл: '.implode(', ', $permited));
				return view('/user-nemeh');
			} else {
				$rename = 'assets/images/users/'.date('Y_m_d_').time().'_'.$file_name;
				$data = array();
				$data['first_name'] = $fname;
				$data['last_name'] = $lname;
				$data['email'] = $email;
				$data['phone'] = $phone;
				$data['password'] = md5($password2);
				$data['profile'] = $rename;
				$data['permission'] = 0;

				$insert = DB::table('users')->insert($data);
				if ($image->move('assets/images/users/', $rename)) {
					return Redirect::to('/users');
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
	public function show() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$users = DB::table('users')
		->orderby('id', 'desc')
		->whereNotIn('id', [1])
		->get();
		return view('/users', ['users'=>$users]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function userEdit($id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$getuser = DB::table('users as u')
		->join('permission as p', 'u.id', '=', 'p.uid')
		->select('u.id', 'u.first_name', 'u.last_name', 'u.email', 'u.phone', 'u.profile', 'p.medee', 'p.tender', 'p.support', 'p.q_and_a', 'p.youtube', 'p.medeelel')
		->where('u.id', $id)
		->get();
		return view('/user-zasah', ['getuser'=>$getuser]);
	}

	public function permission($text) {
		if ($text == '') {
			return 0;
		} else {
			return 1;
		}
	}

	public function userUpdate(Request $request, $id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$umedee = $request->umedee;
		$utender = $request->utender;
		$usupport = $request->usupport;
		$uques = $request->uques;
		$uyoutube = $request->uyoutube;
		$umedeelel = $request->umedeelel;

		$per_medee = $this->permission($umedee);
		$per_tender = $this->permission($utender);
		$per_support = $this->permission($usupport);
		$per_ques = $this->permission($uques);
		$per_youtube = $this->permission($uyoutube);
		$per_medeelel = $this->permission($umedeelel);

		$data = array();
		$data['medee'] = $per_medee;
		$data['tender'] = $per_tender;
		$data['support'] = $per_support;
		$data['q_and_a'] = $per_ques;
		$data['youtube'] = $per_youtube;
		$data['medeelel'] = $per_medeelel;

		$per_update = DB::table('permission')
		->where('uid', $id)
		->update($data);
		return Redirect::to('/users');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
		$userid = Session::get('userid');
		$user_data = DB::table('users')
		->where('id', $userid)
		->get();

		$fname = $request->fname;
		$lname = $request->lname;
		$email = $request->email;
		$phone = $request->phone;
		$editprofile = $request->editprofile;
		$password1 = $request->password1;
		$password2 = $request->password2;
		$image = $request->file('profile');

		$permited = array('png','jpg','jpeg','gif','PNG','JPG','JPEG','GIF');
		if ($fname == '' || $lname == '' || $email == '' || $phone == '' || $password1 == '' || $password2 == '') {
			Session::put('msg', 'Мэдээлэл хоосон байна!');
			return view('/profile', ['getuser' => $user_data]);
		} else {
			if ($password1 != $password2) {
				Session::put('msg', 'Нууц үг буруу байна!');
				return view('/profile', ['getuser' => $user_data]);
			} else {
				if ($image != '') {
					$file_ext = $image->getClientOriginalExtension();
					$file_name = $image->getClientOriginalName();
					if (in_array($file_ext, $permited) === false) {
						Session::put('msg', 'Хуулах боломжтой файлын өргөтгөл: '.implode(', ', $permited));
						return view('/profile', ['getuser' => $user_data]);
					} else {
						$rename = 'assets/images/users/'.date('Y_m_d_').time().'_'.$file_name;
						Session::put('profile', $rename);
						$data = array();
						$data['first_name'] = $fname;
						$data['last_name'] = $lname;
						$data['email'] = $email;
						$data['phone'] = $phone;
						$data['password'] = md5($request->password2);
						$data['profile'] = $rename;

						$update = DB::table('users')
						->where('id', Session::get('userid'))
						->update($data);
						if ($update) {
							if (file_exists($editprofile)) {
								unlink($editprofile);
							}
							if ($image->move('assets/images/users/', $rename)) {
								return Redirect::to('/profile');
							}
						}
					}
				} else {
					$data = array();
					$data['first_name'] = $fname;
					$data['last_name'] = $lname;
					$data['email'] = $email;
					$data['phone'] = $phone;
					$data['password'] = md5($request->password2);

					$update = DB::table('users')
					->where('id', $userid)
					->update($data);
					return Redirect::to('/profile');
				}
			}
		}
	}

	public function perteg($id) {
		$check = DB::table('users')
		->selectRaw('Count(*) as Total')
		->where('id', $id)
		->first();

		if (intval($check->Total) > 0) {
			$data = array();
			$data['permission'] = 0;
			$getdata = DB::table('users')
			->where('id', $id)
			->update($data);
			return Redirect::to('/users');
		} else {
			return Redirect::to('/users');
		}
	}

	public function perneg($id) {
		$check = DB::table('users')
		->selectRaw('Count(*) as Total')
		->where('id', $id)
		->first();

		if (intval($check->Total) > 0) {
			$data = array();
			$data['permission'] = 1;
			$getdata = DB::table('users')
			->where('id', $id)
			->update($data);
			return Redirect::to('/users');
		} else {
			return Redirect::to('/users');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$check = DB::table('users')
		->selectRaw('Count(*) as Total')
		->where('id', $id)
		->first();

		if (intval($check->Total) > 0) {
			$getdata = DB::table('users')
			->where('id', $id)
			->get();
			foreach ($getdata as $value) {
				$delimage = $value->profile;
				if (file_exists($delimage)) {
					unlink($delimage);
				}
				$delete = DB::table('users')
				->where('id', $id)
				->delete();
			}
			return Redirect::to('/users');
		} else {
			return Redirect::to('/users');
		}
	}

	public function reqpass() {
		return view('/reqpass');
	}

	public function request(Request $request) {
		$token = bin2hex(random_bytes(16));
		$data = array();
		$data['token'] = $token;
		$data['recover'] = 1;

		$email = $request->email;
		$data = DB::table('users')
		->where('email', $email)
		->update($data);

		if ($data) {
			$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'].'/recover/'.$token.'/'.$email;
			$to = $email;
			$subject = 'Нууц үг сэргээх';
			$headers = 'From: Архангай аймаг admin@arkhangai.gov.mn' . "\r\n";
			$headers .= 'Reply-To: admin@arkhangai.gov.mn' . "\r\n";
			$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1';
			$message = '<p>Сайн байна уу. '.$email.'</p>';
			$message .= '<p>Дараах холбоос дээр дарж цахим хаягаа баталгаажуулж нууц үгээ сэргээнэ үү.</p>';
			$message .= '<p><a href="'.$url.'">'.$url.'</a></p>';

			if (mail($to, $subject, $message, $headers)) {
				Session::put('msg', 'Цахим хаягаа шалгана уу.');
				return view('/reqpass');
			}
		}
	}

	public function recover($token, $email) {
		$checkUser = DB::table('users')
		->where('token', $token)
		->where('email', $email)
		->where('recover', 1)
		->first();

		if ($checkUser) {
			$updateUser = array();
			$updateUser['token'] = '';
			$updateUser['recover'] = 0;

			$data = DB::table('users')
			->where('email', $email)
			->update($updateUser);

			if ($data) {
				$reset = DB::table('users')
				->where('email', $email)
				->first();
				Session::put('msg', 'Цахим хаяг баталгаажлаа.');
				return view('/recover', ['user' => $reset]);
			}
		} else {
			return Redirect::to('/login');
		}
	}

	public function resetpass(Request $request) {
		$password1 = $request->password1;
		$password2 = $request->password2;
		$id = $request->id;

		if ($password1 != $password2) {
			$reset = DB::table('users')
			->where('id', $id)
			->first();
			Session::put('msg', 'Нууц үг таарахгүй байна!');
			return view('/recover', ['user' => $reset]);
		} else {
			$data = array();
			$data['password'] = $password1;
			$data['recover'] = 0;

			$dataUpdate = DB::table('users')
			->where('id', $id)
			->update($data);
			if ($dataUpdate) {
				return Redirect::to('/login');
			}
		}
	}
}
