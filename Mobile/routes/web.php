<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/','PageController@trangchu');

Route::get('lang/{locale}',function($locale){
    
    session()->put('locale',$locale);
    return back();
});




//backend
Route::get('admin/dangnhap','QuanTriController@getDangnhap');
Route::post('admin/dangnhap','QuanTriController@postDangnhap');

Route::get('admin/logout','QuanTriController@getDangxuat');


//----------------------------------------------------------------------------------

Route::group(['prefix'=>'admin','middleware'=>'CheckLoginAdmin'],function(){
	//trang chu admin
	Route::get('trangchu','AdminController@trangchu');

	Route::group(['prefix'=>'ajax'],function(){
		Route::get('chitietdonhang/{id}','AjaxController@getChitietdonhang');
	});
	Route::group(['prefix'=>'theloai'],function(){
		Route::get('danhsach','TheLoaiController@getDanhsach');
		Route::get('them','TheLoaiController@getThem');
		Route::post('them','TheLoaiController@postThem');
		Route::get('sua/{id}','TheLoaiController@getSua');
		Route::post('sua/{id}','TheLoaiController@postSua');
		Route::get('xoa/{id}','TheLoaiController@getXoa');
        Route::get('xuly/{id}','TheLoaiController@getXuly');
        
	});
    Route::group(['prefix'=>'thuoctinh'],function(){
        Route::get('danhsach','ThuocTinhController@getDanhsach');
        Route::get('them','ThuocTinhController@getThem');
        Route::post('them','ThuocTinhController@postThem');
        Route::get('sua/{id}','ThuocTinhController@getSua');
        Route::post('sua/{id}','ThuocTinhController@postSua');
        Route::get('xoa/{id}','ThuocTinhController@getXoa');
    });
    Route::group(['prefix'=>'sanpham'],function(){
        Route::get('danhsach','SanPhamController@getDanhsach');
        Route::get('them','SanPhamController@getThem');
        Route::post('them','SanPhamController@postThem');
        Route::get('sua/{id}','SanPhamController@getSua');
        Route::post('sua/{id}','SanPhamController@postSua');
        Route::get('xoa/{id}','SanPhamController@getXoa');
    });
    Route::group(['prefix'=>'chitietthuoctinh'],function(){
        Route::get('danhsach','ChiTietThuocTinhController@getDanhsach');
        Route::get('them','ChiTietThuocTinhController@getThem');
        Route::post('them','ChiTietThuocTinhController@postThem');
        Route::get('sua/{id}','ChiTietThuocTinhController@getSua');
        Route::post('sua/{id}','ChiTietThuocTinhController@postSua');
        Route::get('xoa/{id}','ChiTietThuocTinhController@getXoa');
    });
    Route::group(['prefix'=>'anhslidesanpham'],function(){
        Route::get('danhsach','AnhSlileSanPhamController@getDanhsach');
        Route::get('them','AnhSlileSanPhamController@getThem');
        Route::post('them','AnhSlileSanPhamController@postThem');
        Route::get('sua/{id}','AnhSlileSanPhamController@getSua');
        Route::post('sua/{id}','AnhSlileSanPhamController@postSua');
        Route::get('xoa/{id}','AnhSlileSanPhamController@getXoa');
    });
    Route::group(['prefix'=>'banner'],function(){
        Route::get('danhsach','BannerController@getDanhsach');
        Route::get('them','BannerController@getThem');
        Route::post('them','BannerController@postThem');
        Route::get('sua/{id}','BannerController@getSua');
        Route::post('sua/{id}','BannerController@postSua');
        Route::get('xoa/{id}','BannerController@getXoa');
    });
    Route::group(['prefix'=>'khuyenmai'],function(){
        Route::get('danhsach','KhuyenMaiController@getDanhsach');
        Route::get('them','KhuyenMaiController@getThem');
        Route::post('them','KhuyenMaiController@postThem');
        Route::get('sua/{id}','KhuyenMaiController@getSua');
        Route::post('sua/{id}','KhuyenMaiController@postSua');
        Route::get('xoa/{id}','KhuyenMaiController@getXoa');
    });
    Route::group(['prefix'=>'donhang'],function(){
        Route::get('danhsach','DonHangController@getDanhsach');
        //them imei cho chitiet san pham
        Route::get('xuly/{id}','DonHangController@getXuly');
        Route::post('xuly/{id}','DonHangController@postXuly');
        //xu ly don hang
        Route::get('xulydonhang/{id}','DonHangController@getXulydonhang');
        Route::post('xulydonhang/{id}','DonHangController@postXulydonhang');
        Route::get('xoa/{id}','DonHangController@getXoa');
    });
    Route::group(['prefix'=>'binhluan'],function(){
            Route::get('danhsach','BinhLuanController@getDanhsach');
        });
    Route::group(['prefix'=>'khachhang'],function(){
        Route::get('danhsach','KhachHangController@getDanhsach');
        Route::get('them','KhachHangController@getThem');
        Route::post('them','KhachHangController@postThem');
        Route::get('sua/{id}','KhachHangController@getSua');
        Route::post('sua/{id}','KhachHangController@postSua');
        Route::get('xoa/{id}','KhachHangController@getXoa');


    });
    Route::group(['prefix'=>'quantri'],function(){
        Route::get('danhsach','QuanTriController@getDanhsach');
        Route::get('them','QuanTriController@getThem');
        Route::post('them','QuanTriController@postThem');
        Route::get('sua/{id}','QuanTriController@getSua');
        Route::post('sua/{id}','QuanTriController@postSua');
        Route::get('xoa/{id}','QuanTriController@getXoa');
    });
    Route::group(['prefix'=>'tintuc'],function(){
        Route::get('danhsach','TinTucController@getDanhsach');
        Route::get('them','TinTucController@getThem');
        Route::post('them','TinTucController@postThem');
        Route::get('sua/{id}','TinTucController@getSua');
        Route::post('sua/{id}','TinTucController@postSua');
        Route::get('xoa/{id}','TinTucController@getXoa');
    });


});



//frontend
Route::get('dangky','PageController@getDangky');
Route::post('dangky','PageController@postDangky');
Route::get('dangnhap','PageController@getDangnhap');
Route::post('dangnhap','PageController@postDangnhap');
Route::get('logout','PageController@getDangXuat');
Route::get('xacnhan','PageController@getXacnhan')->name('get.link.xacnhan');
Route::post('xacnhan','PageController@postXacnhan');


Route::get('thongtinkhachhang','PageController@getthongtinkhachhang');
Route::get('suathongtin/{id}','PageController@getSuathongtin');
Route::post('suathongtin/{id}','PageController@postSuathongtin');
Route::get('chitiet/{id}','PageController@chitiet');




Route::get('admin/redirect/{provider}', 'SocialController@redirect');
Route::get('callback/{provider}', 'SocialController@callback');


Route::get('danhmucsanpham/{id}/{Ten_KhongDau}.html','PageController@danhmucsanpham');
Route::get('chitietsanpham/{id}/{Ten_KhongDau}.html','PageController@chitietsanpham');
Route::get('chitiettintuc/{id}/{Ten_KhongDau}.html','PageController@chitiettintuc');
Route::get('timkiem','PageController@timkiem');
Route::get('binhluan/{idsp}/{noidung}','BinhLuanController@postBinhluan');
Route::get('camon','PageController@getCamon');



//gio hang
Route::get('themgiohang/{id}','ShoppingCartController@themgiohang');
Route::get('giohang','ShoppingCartController@getGiohang');
Route::get('suagiohang/{idcart}/{soluong}/{idsp}','ShoppingCartController@suagiohang');
Route::get('xoagiohang/{idcart}','ShoppingCartController@xoagiohang');

//dang nhap moi cho thanh toan
Route::group(['prefix'=>'shopping','middleware'=>'CheckLoginKhachHang'],function(){

	Route::get('donhang','ShoppingCartController@getDonhang');
    Route::post('donhang','ShoppingCartController@postDonhang');
    Route::post('payment/online','ShoppingCartController@createpayment')->name('payment.online');
    Route::get('vnpay/return','ShoppingCartController@vnpayReturn')->name('vnpay.return');
    Route::post('zalo/online','ShoppingCartController@createZalo')->name('payment.zalo');

});

   
        
       
