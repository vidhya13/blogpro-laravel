<?php

namespace App\Http\Controllers;

use App\Owner;
use DB;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OwnerController extends Controller
{
    /**
     * @return mixed
     */
    public function create() {
        $owner = new Owner;
        $owner -> name = Input::get('oname');
        $owner -> email = Input::get('oemail');
        $owner -> mobile = Input::get('omobile');
        $owner -> secondary_mobile = Input::get('osecondary_mobile');
        $owner -> religion = Input::get('oreligion');
        $owner -> save();
        $owner = Owner::where('email','=',Input::get('oemail'))->first();
        Session::put('oid',$owner->id);
       // $owner = Owner::all();
       // return view('pages/cp_tenant',compact('owner'));
        return redirect()->action('TenantController@create')->withInput();
    }
}
