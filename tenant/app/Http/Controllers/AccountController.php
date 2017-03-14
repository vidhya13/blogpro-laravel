<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use Input;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
use Hash;
use App\User;

class AccountController extends Controller
{

    /**
     * @return mixed
     */
    public function login()
    {
        // Getting all post data
        $data = Input::all();
        // Applying validation rules.
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            // If validation falis redirect back to login.
            return Redirect::to('/login')->withInput(Input::except('password'))->withErrors($validator);
        } else {
            $userdata = array(
                'email' => Input::get('email'),
                'password' =>Input::get('password'),
            );
            // doing login.
            if (Auth::validate($userdata)) {
                if (Auth::attempt($userdata)) {
                    $user = new User;
                    $user = User::where('email', '=', Input::get('email'))->first();
                   Session::put('name' , $user -> name);
Image::make();
                    return Redirect::to('pages/cp_otform');
                }
            } else {
                // if any error send back with message.
                Session::flash('error', 'Something went wrong');
                return Redirect::to('login');
            }
        }
    }

    public function create()
    {

      /*  $data = Input::all();

        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {

            return Redirect::to('/register')->withInput(Input::except('password'))->withErrors($validator);
        } else { */

                $user = new User;
                $user->name = Input::get('name');
                $user -> email = Input::get('email');
                $user -> password = Hash::make(Input::get('password'));
                $user->save();
                return view('login');

       // }
    }
}

