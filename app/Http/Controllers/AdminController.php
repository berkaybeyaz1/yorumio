<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use Session;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['expect' => 'getLogout']);
    }
    public function getLogin()
    {
        if(Auth::check()){
            return redirect()->route('admin.pages.home');
        }
        return view('admin.pages.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' =>  'required',
            'password'  =>  'required'
        ]);
        if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])){
            return redirect()->route('admin.home')->with('success','Basarıyla Giriş Yaptınız');
        }else{
            return redirect()->route('admin.auth.login')->with('error','Hata var');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('admin.auth.login');
    }
}
