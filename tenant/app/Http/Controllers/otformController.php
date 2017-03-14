<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class otformController extends Controller
{
    //
    public function create() {
        $owner = new Owner;
        $owner -> name = Input::get('oname');
        $owner -> email = Input::get('oemail');
        $owner -> mobile = Input::get('omobile');
        $owner -> secondary_mobile = Input::get('osecondary_mobile');
        $owner -> religion = Input::get('oreligion');
        $owner -> save();
        $owner = Owner::where('email','=',Input::get('oemail'))->first();
        //Session::put('oid',$owner->id);
        $oid = $owner -> id;
        if($owner -> save()) {
            $tenant = new Tenant;

            $tenant -> name = Input::get('name');
            $tenant -> email = Input::get('email');
            $tenant -> mobile = Input::get('mobile');
            $tenant -> secondary_mobile = Input::get('secondary_mobile');
            $tenant -> religion = Input::get('religion');
            $tenant -> oid = $oid;
            $tenant -> save();
            $tenant = Tenant::all();
            return view('pages/cp_tenant',compact('tenant'));
        }
    }
}
