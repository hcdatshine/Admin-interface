<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
    	// echo "dang nhap thanh cong";
    	$username = $request['username'];
    	$password = $request['password'];
    	// $user = User::find(2);
    	// Auth::login($user);
    	// return view('thanhcong',['user'=> Auth::user()]);

    	if(Auth::attempt(['name'=>$username,'password'=>$password], true))
    	{

    		return view('thanhcong',['user'=> Auth::user()]);
    	}
    	else 
    		return view('dangnhap',['error'=>'Đăng nhập thất bại']);
    }
    public function logout()
    {
    	Auth::logout();
    	return view('dangnhap');
    }
}
