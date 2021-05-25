<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class MedeelelController extends Controller {

    public function getMedeelel() {
        if (Session::get('email') == '') {
            return Redirect::to('login');
        }
        $hunii_noots_select = DB::table('hunii_noots')->get();
        $tosow_sankhuu_select = DB::table('tosow_sankhuu')->get();
        $uil_ajillagaa_select = DB::table('uil_ajillagaa')->get();
        return view('medeelel-list', [
            'hunii_noots_select' => $hunii_noots_select,
            'tosow_sankhuu_select' => $tosow_sankhuu_select,
            'uil_ajillagaa_select' => $uil_ajillagaa_select
        ]);
    }

    public function editHuniiNoots($id) {
        if (Session::get('email') == '') {
            return Redirect::to('login');
        }
        $medeelel_select = DB::table('hunii_noots')
        ->where('id', $id)
        ->get();
        return view('huniinoots', ['select' => $medeelel_select]);
    }

    public function editTosowSankhuu($id) {
        if (Session::get('email') == '') {
            return Redirect::to('login');
        }
        $medeelel_select = DB::table('tosow_sankhuu')
        ->where('id', $id)
        ->get();
        return view('tosowsankhuu', ['select' => $medeelel_select]);
    }

    public function editUilAjillagaa($id) {
        if (Session::get('email') == '') {
            return Redirect::to('login');
        }
        $medeelel_select = DB::table('uil_ajillagaa')
        ->where('id', $id)
        ->get();
        return view('uilajillagaa', ['select' => $medeelel_select]);
    }

    public function updateHuniiNoots(Request $request, $id) {
        if (Session::get('email') == '') {
            return Redirect::to('login');
        }
        $data = array();
        $data['body'] = $request->body;

        $update = DB::table('hunii_noots')
        ->where('id', $id)
        ->update($data);

        return Redirect::to('medeelel-list');
    }

    public function updateTosowSankhuu(Request $request, $id) {
        if (Session::get('email') == '') {
            return Redirect::to('login');
        }
        $data = array();
        $data['body'] = $request->body;

        $update = DB::table('tosow_sankhuu')
        ->where('id', $id)
        ->update($data);

        return Redirect::to('medeelel-list');
    }

    public function updateUilAjillagaa(Request $request, $id) {
        if (Session::get('email') == '') {
            return Redirect::to('login');
        }
        $data = array();
        $data['body'] = $request->body;

        $update = DB::table('uil_ajillagaa')
        ->where('id', $id)
        ->update($data);

        return Redirect::to('medeelel-list');
    }
}
