<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\User;
use Hash;
class UserController extends Controller
{
     public static function processLogin() {
        $inputs = Input::except('_token');

        $inputs['password']=Hash::make($inputs['password']);
        
        User::create($inputs);
        
        $validate = Validator::make($inputs, User::$login_rules);
        if ($validate->fails()) {
            return Redirect::back()->withInput(Input::except('password'))->with('error_message', $validate->errors()->first());
        }
        $credemtial = [
            'email' => $inputs['email'],
            'password' => $inputs['password'],
            'user_role_id' => 3
        ];
        if (Auth::attempt($credemtial)) {
            $profile = App\UserProfile::getUserProfile(Auth::user()->id);
            Session::put('profile_image', $profile->image);
            return redirect()->route('dashboard');
        }
        return Redirect::back()->withInput(Input::except('password'))->with('error_message', 'Invalid login detail');
    }
}
