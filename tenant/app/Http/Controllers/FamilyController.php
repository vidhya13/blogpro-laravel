<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Log;
use App\Family;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class FamilyController extends Controller
{
    //

    public function create()
   {

    $family = new Family;

   foreach ($family as $famil) {
       die($famil);
       die("Hello");
       foreach ($famil as $sku=>$v) {



     die($v);
         /*  $famil->name = Input::get('ten' . $famil . 'name');
           $famil->gender = Input::get('ten' . $famil . 'gender');
           $famil->age = Input::get('ten' . $famil . 'age');
           $famil->relation = Input::get('ten' . $famil . 'relation');
           $famil->save();*/
       }
   }
    $family = Input::all();
   // return view('pages/cp_otform');



  }
}
