<?php

namespace App\Http\Controllers;
use DB;
use App\Tenant;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TenantController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        if(Session::has('oid'))

            $oid=Session::get('oid');

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
    public function show() {
        $tenant = Tenant::all();
        return view('pages/cp_tenant',compact('tenant'));
    }
    public function tedit($tenantId) {
        $tenant = Tenant::find($tenantId);
        return view('pages/tupdate', compact('tenant'));
    }
    public function postEdit($tenantId) {
        $tenant = Tenant::find($tenantId);
        $tenant -> name = e(Input::get('name'));
        $tenant -> email = e(Input::get('email'));
        $tenant -> mobile = e(Input::get('mobile'));
        $tenant -> secondary_mobile = e(Input::get('secondary_mobile'));
        $tenant -> religion = e(Input::get('religion'));
        $tenant -> save();
        $tenant = Tenant::all();
        return view('pages/cp_tenant',compact('tenant'));

    }
    public function tdelete($tenantId) {
        $tenant = Tenant::find($tenantId);
        $tenant -> delete();
        $tenant = Tenant::all();
        return view('pages/cp_tenant',compact('tenant'));
    }
}
