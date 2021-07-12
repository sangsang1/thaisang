<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
class KhachHangController extends Controller
{
	public function getDanhsach(){
		$khachhang=KhachHang::all();
		return view('admin.khachhang.danhsach',['khachhang'=>$khachhang]);
	}
	
	public function getSua(Request $request,$id){
		$khachhang=KhachHang::find($id);
		return view('admin.khachhang.sua',['khachhang'=>$khachhang]);
	}
	public function postSua(Request $request,$id){
		$this->validate($request,
			[
				'matkhau'				=>'required',
				'matkhauagain'			=>'required|same:matkhau',
				'ten'					=>'required',
				'sdt'					=>'required',
				'diachi'				=>'required',
			]
			,[
				'matkhau.required'		=>'Mat khau khong duoc bo trong',
				'matkhauagain.required'	=>'Chua nhap lai mat khau',
				'matkhauagain.same'		=>'Mat khau khong giong nhau',
				'ten.required'			=>'Ban chua nhap ten',
				'sdt.required'			=>'Ban chua nhap so dien thoai',
				'diachi.required'		=>'Ban chua chon dia chi',
			]);
		$khachhang=KhachHang::find($id);
		$khachhang->password 		=bcrypt($request->matkhau);
		$khachhang->HoTen 			=$request->ten;
		$khachhang->SoDienThoai 	=$request->sdt;
		$khachhang->DiaChi 			=$request->diachi;
		$khachhang->save();
		return redirect('admin/khachhang/danhsach')->with('ThongBao','Sua Thanh Cong');
	}





	
}
