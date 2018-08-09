<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function postForm(Request $request)
    {
    	echo "them thanh cong";
    	echo $request->name;
    }
    public function nhanDuLieu(Request $request)
    {
    	echo 'Tên của bạn là: '.$request->hoTen.'<br>';
    	echo 'Email của bạn là:'.$request->mail.'<br>';
    }

    public function Time($t){
        return view('myView',['time'=>$t]);
    }
}
