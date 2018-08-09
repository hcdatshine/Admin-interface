<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\monans;
use App\User;


Route::get('/', 'HomeController@index');
Route::get('login','LoginController@getLogin')->name('showLoginForm');//dat ten giong file view 
//login la uri 
//goi den route nay can dat ten name('showLoginForm')

Route::post('login','LoginController@postLogin')->name('login');

Route::get('showButton', function () {
	return view('button');
});
//gửi nhận tham số trên request
// Route::get('getForm',function(){
// 	return view('nhapDuLieu');
// 	//goi getForm->view Welcome-> tro den route postForm
// 	//postForm lấy giá trị lưu vào mycontroller
// });

// Route::post('nhanDuLieu','MyController@nhanDuLieu')->name('postForm');
// Route::get('welcome','MyController@postForm');

//Middle ware
//vào php artisan tạo middle ware
Route::post('diem',function(){
	echo "bạn đã có điểm";
})->middleware('MyMiddle')->name('dacodiem');//tên middle.

Route::get('loi',function() {
    echo "bạn chưa có điểm";
})->name('loi');
//phải đặt tên route lỗi để có thể gọi đến route đấy
Route::get('nhapdiem', function() {
    return view('nhapdiem');
})->name('nhapdiem');


// //Auth
// Route::get('dangnhap',function(){
// 	return view('dangnhap');
// });
// //thu check
// Route::get('thu', function() {
//     return view('thanhcong');
// });

// Route::post('loginTest','AuthController@login')->name('loginTest');

//model insert table in database
// Route::get('model/save', function() {
//     $user = new App\User();//model la doi tuong nen phai khoi tao doi tuong
//     $user->name = "DatShine";
//     $user->email = "datvuquocbk@email.com";
//     $user->password = "12345678";
//     $user->save();
//     echo "Đã thực hiện save()";
// });

Route::get('logout','HomeController@logout')->name('logout');

Route::get('userInformation', 'HomeController@showUser')->name('userInformation');

Route::get('test', function() {
    $cacmonan = monans::all();
    foreach ($cacmonan as $monanN) {
        echo $monanN."<br>";
    }
    // dd($monan);
});

// Route::get('testHTTP', function() {
//     return view('admin.monan.list');
// });

//tao rout cho admin
Route::group(['prefix'=>'admin', 'middleware' => 'authAdmin'],function(){
//nhóm các thư mực của admin vào 
    Route::get('/','DashBoardController@index');
    Route::group(['prefix'=>'monan'],function(){
        Route::get('danhsach', 'MonAnController@getDanhSach')->name('danhsachMonAn');

        Route::get('sua/{id}', 'MonAnController@getSua');
        Route::post('sua/{id}', 'MonAnController@postSua');

        Route::get('them', 'MonAnController@getThem')->name('themMonAn');
        Route::post('them', 'MonAnController@postThem');

        Route::get('xoa/{id}','MonAnController@getXoa');
    });

    Route::group(['prefix'=>'user'],function(){
        Route::get('danhsach', 'UserController@getDanhSach')->name('danhsachUser');

        Route::get('sua/{id}', 'UserController@getSua');  
        Route::post('sua/{id}', 'UserController@postSua');

        Route::get('them', 'UserController@getThem')->name('themUser');
        Route::post('them', 'UserController@postThem');

        Route::get('xoa/{id}','UserController@getXoa');
    });
});

// Route::get('Time/{t}','Mycontroller@Time');

// Route::resource('products','ProductController')->only(['index', 'update']);
