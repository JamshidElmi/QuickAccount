<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Branch;
class LoginController extends Controller
{

    public function signin(){
        $data = [
            'category_name' => 'auth',
            'page_name' => 'auth_default',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];
        return view('ncms.auth.login')->with($data);
    }

    public function login(Request $request){
//        dd($request);
        if($request->isMethod('post')){
            $this->validate(
                $request,[
                    'email'=>'required|email',
                    'password'=>'required|min:6',
                ]
            );
            if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                if (Auth::user()->hasRole('Admin')){
                   return \redirect()->route('admin.home');
                }
                if(Auth::user()->hasRole('User')){
                    return \redirect()->route('user.home');
                }
            }
         return \redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return \redirect()->route('signIn');
    }

    public function lock() {
        $username=\Auth::user();
        Auth::logout();
        return view('cms.lock')->with(['username'=>$username->first_name]);
    }

    public function unlock(Request $request) {
        if($request->isMethod('post')){
            $this->validate(
                $request,[
                    'password'=>'required|min:6',
                ]
            );
            if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
                if (Auth::user()->hasRole('Admin')){
                    return \redirect()->route('admin.home');
                }
                if(Auth::user()->hasRole('User')){
                    return \redirect()->route('user.home');
                }
            }
            return \redirect()->back();
        }
    }
}
