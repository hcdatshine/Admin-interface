<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\monans;
use Validator;

class MonAnController extends Controller
{
    public function getDanhSach()
    {
    	$monan = monans::all();
        return view('admin.monan.danhsach',['monan'=>$monan]);
    }

    public function getSua($id)
    {
        $monan = monans::find($id);
        return view('admin.monan.sua',['monan' => $monan]);
    }

    public function postSua(Request $request,$id)
    {
        $monan = new monans;
        $this->validate($request,
            [
                'nameMonAn'=>'required|min:3|unique:monans,nameMonAn', 
                'price'=>'required|min:0.1',
                'reviewMonAn'=>'required|min:10'
            ],
            [
                'nameMonAn.required'=>'Bạn chưa nhập tên món ăn',
                'nameMonAn.min'=>'Tên ít nhất có 3 kí tự',
                'nameMonAn.unique'=>'Tên người dùng đã tồn tại',
                'price.required'=>'Bạn chưa nhập giá món ăn',
                'price.min'=>'giá món ăn tối thiểu là 0.1$',
                'reviewMonAn.required'=>'Bạn chưa nhập revie Món Ăn',
                'reviewMonAn.min' =>'review tối thiểu có 10 ký tự',
            ]);
        $monan->nameMonAn= $request->nameMonAn;
        $monan->price = $request->price;
        $monan->reviewMonAn = $request->reviewMonAn;
        $monan->save();
        return redirect('admin/monan/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getThem()
    {
         return view('admin.monan.them',[]);
    }

    public function postThem(Request $request)
    {
        $monan = new monans;
        $this->validate($request,
            [
                'nameMonAn'=>'required|min:3|unique:monans,nameMonAn', 
                'price'=>'required|min:0.1',
                'reviewMonAn'=>'required|min:10'
            ],
            [
                'nameMonAn.required'=>'Bạn chưa nhập tên món ăn',
                'nameMonAn.min'=>'Tên ít nhất có 3 kí tự',
                'nameMonAn.unique'=>'Tên người dùng đã tồn tại',
                'price.required'=>'Bạn chưa nhập giá món ăn',
                'price.min'=>'giá món ăn tối thiểu là 0.1$',
                'reviewMonAn.required'=>'Bạn chưa nhập review Món Ăn',
                'reviewMonAn.min' =>'review tối thiểu có 10 ký tự',
            ]);
        $monan->nameMonAn= $request->nameMonAn;
        $monan->price = $request->price;
        $monan->reviewMonAn = $request->reviewMonAn;
        $monan->save();
        return redirect('admin/monan/them')->with('thongbao','Thêm thành công');
    }

    public function getXoa($id){//nhận id từ route
        $monan = monans::find($id);
        if($monan!= NULL){
            $monan->delete();
        }
        return redirect('admin/monan/danhsach')->with('thongbao','Xóa thành công');
    }

}
