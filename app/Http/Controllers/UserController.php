<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserController extends Controller
{
    public function getDanhSach(){
    	$user = User::all();
    	return view('admin.user.danhsach',['nguoidung'=>$user]);//truyền giá trị user cho view qua $ nguoidung
    }
    public function getThem(){
        return view('admin.user.them');
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3',
            'email' =>'required|email|unique:users,email',//dùng dấu , để trỏ đến trường
            'password'=>'required|min:6|max:30',
            'passwordAgain'=>'required|same:password'
        ],[
            'name.required'=>'Bạn chưa đăng nhập',
            'name.min'=>'Tên ít nhất có 3 kí tự',
            'email.required'=>'Bạn chưa nhập email',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu có ít nhất 6 kí tự',
            'password.max'=>'mật khẩu nhiều nhất có 30 ký tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa đúng',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password = bcrypt($request->password);
        $user->quyen = $request->quyen;
        $user->save();

        return redirect('admin/user/them')->with('thongbao','Thêm Thành Công');
    }
    public function getSua($id){//nhận về id 
        $user = User::find($id);//tạo 1 biến model User
        return view('admin.user.sua',['nguoidung'=>$user]);
    }
    public function postSua(Request $request,$id){
        $user = User::find($id);
        $this->validate($request,
            [
            'name' => 'required|min:3|unique:users,name'
            ],
            [
            'name.required'=>'Bạn chưa nhập tên người dùng',
            'name.min'=>'Tên ít nhất có 3 kí tự',
            'name.unique'=>'Tên người dùng đã tồn tại',
            ]);
        $user->name = $request->name;
        $user->save();
        return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa Thành Công');

    }
    public function getXoa($id){//nhận id từ route
        // $user = User::find($id);
        // if ($user != NULL) {
        //     $user->delete();
        // }
        //quay lại trước khi đi vào
        $user = User::find($id);
        if ($user != NULL) {
            $user->delete();//xóa mềm
        }
        return redirect('admin/user/danhsach')->with('thongbao','Xoa Thành Công');
    }
}
