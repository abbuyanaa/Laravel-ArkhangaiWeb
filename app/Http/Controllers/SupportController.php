<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class SupportController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
        $support_data = DB::table('support')
        ->orderby('id', 'DESC')
        ->get();
        return view('support', ['support_data'=>$support_data]);
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
    public function show($id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
        $check_data = DB::table('support')
        ->selectRaw('Count(*) as Total')
        ->where('id',$id)
        ->first();

        if (intval($check_data->Total) > 0) {
            $data = array();
            $data['visited'] = '1';

            $visited = DB::table('support')
            ->where('id',$id)
            ->update($data);
            
            $support_data = DB::table('support')
            ->where('id',$id)
            ->get();
            return view('support-view', ['support_data'=>$support_data]);
        } else {
            return Redirect::to('support');
        }
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
    public function destroy($id) {
		if (Session::get('email') == '') {
			return Redirect::to('login');
		}
        $check_data = DB::table('support')
        ->selectRaw('Count(*) as Total')
        ->where('id',$id)
        ->first();

        if (intval($check_data->Total) > 0) {
            $del_data = DB::table('support')
            ->where('id',$id)
            ->delete();
            if ($del_data) {
                return Redirect::to('support');
            }
        } else {
            return Redirect::to('support');
        }
    }
}
