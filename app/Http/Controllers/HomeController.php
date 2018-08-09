<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->only('showUser');
	}//middleware làm controller không sử dụng được 

    public function index($value='')
    {
    	return view('pages.home');
    }

    public function showUser()
    {
    	// // dd('User : '.$request->user()->name);
     //    echo 'User : '.$request->user()->name.'<br>';
     //   	// dd('Mail of User : '.$request->user()->email);
     //    echo 'Mail of User : '.$request->user()->email;
        return view('thanhcong');

    }

    public function logout()
    {
    	Auth::logout();
    	return view('pages.home');
    }
}
