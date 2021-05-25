<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class NewsCategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Session::get('email') == '') {
            return Redirect::to('login');
        }
        $newscat_data = DB::table('category')
        ->orderby('id', 'DESC')
        ->get();
        return view('newscat-list', ['newscat'=>$newscat_data]);
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
        return view('newscat-nemeh');
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
        $name = $request->name;
        if ($name == '') {
            $result = 'Та мэдээллээ оруулна уу!';
            Session::put('msg', $result);
            return view('newscat-nemeh');
        } else {
            $data = array();
            $data['name'] = $name;

            $insert = DB::table('category')->insert($data);
            return Redirect::to('newscat-list');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
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
        $check = DB::table('category')
        ->selectRaw('Count(*) as Total')
        ->where('id',$id)
        ->first();

        if (intval($check->Total) > 0) {
            $newscat_data = DB::table('category')
            ->where('id', $id)
            ->get();
            return view('newscat-zasah', ['newscat_data'=>$newscat_data]);
        } else {
            return Redirect::to('newscat-list');
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
        $name = $request->name;
        if ($name == '') {
            $newscat_data = DB::table('category')
            ->where('id', $id)
            ->get();
            return view('newscat-zasah', ['newscat_data'=>$newscat_data]);
        } else {
            $data = array();
            $data['name'] = $name;
            $update = DB::table('category')
            ->where('id', $id)
            ->update($data);
            return Redirect::to('newscat-list');
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
        $delete = DB::table('category')
        ->where('id', $id)
        ->delete();
        if ($delete) {
            return Redirect::to('newscat-list');
        }
    }
}
