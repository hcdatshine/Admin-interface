<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('Login');
    }
    public function postLogin(Request $request){
    	//truong yeu cau 
    	$rules = [
    			'email'=>'required|email',
    			'password'=>'required|min:8'
    	];
    	$messengs = [
    		'email.required'=>'Email là trường bắt buộc',
    		'email.email'=>'Email không đúng định dạng',
    		'password.required'=>'password là trường bắt buộc',
    		'password.min'=>'password phải có ít nhất 8 kí tự', 
    	];
    	//validator kiểm chứng
    	$validator = Validator::make($request->all(),$rules,$messengs);
    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput(); 
    	} else {
    		$email=$request->input('email');
    		$password = $request->input('password');

    		if(Auth::attempt(['email'=> $email,'password'=>$password])){
                $user = Auth::user();
                if ($user->quyen) {
                    return redirect('admin');
                }
    			return redirect()->intended('');
    		} else {
                $errors = new MessageBag(['errorlogin'=>'Email hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }
}
