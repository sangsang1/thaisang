<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTri;
use App\KhuyenMai;
class KhuyenMaiController extends Controller
{
	public function getDanhsach(){
		$khuyenmai=KhuyenMai::all();
		return view('admin.khuyenmai.danhsach',['khuyenmai'=>$khuyenmai]);
	}
	public function getThem(){
		$quantri=QuanTri::all();
		return view('admin.khuyenmai.them',['quantri'=>$quantri]);
	}
	public function postThem(Request $request){
		$this->validate($request,
			[		
				'ten'					=>'required',
				'noidung'				=>'required',
			]
			,[
				'ten.required'			=>'Ban chua nhap ten',
				'noidung.required'		=>'Ban chua nhap noi dung',
			]);
		$khuyenmai=new KhuyenMai;
		$khuyenmai->Ten 		=$request->ten;
		$khuyenmai->Ten_KhongDau=$request->ten;
		$arr = explode ("/", $request->ngayketthuc);
		if (count($arr)==3) $request->ngayketthuc = $arr[2]."-".$arr[1]."-".$arr[0];
		else $request->ngayketthuc = date("Y-m-d");
		$khuyenmai->NgayKetThuc	=$request->ngayketthuc;
		$khuyenmai->NoiDung 	=$request->noidung;
		$khuyenmai->TrangThai 	=$request->trangthai;
		$khuyenmai->idQT 		=$request->quantri;
		$khuyenmai->save();
		return redirect('admin/khuyenmai/danhsach')->with('ThongBao','Them thanh cong');
	}
	public function getSua($id){
		$khuyenmai=KhuyenMai::find($id);
		$quantri=QuanTri::all();
		return view('admin.khuyenmai.sua',['quantri'=>$quantri,'khuyenmai'=>$khuyenmai]);
	}
	public function postSua(Request $request,$id){
		$this->validate($request,
			[		
				'ten'					=>'required',
				'noidung'				=>'required',
			]
			,[
				'ten.required'			=>'Ban chua nhap ten',
				'noidung.required'		=>'Ban chua nhap noi dung',
			]);
		$khuyenmai=KhuyenMai::find($id);
		$khuyenmai->Ten 		=$request->ten;
		$khuyenmai->Ten_KhongDau=$request->ten;
		$arr = explode ("/", $request->ngayketthuc);
		if (count($arr)==3) $request->ngayketthuc = $arr[2]."-".$arr[1]."-".$arr[0];
		else $request->ngayketthuc = date("Y-m-d");
		$khuyenmai->NgayKetThuc	=$request->ngayketthuc;
		$khuyenmai->NoiDung 	=$request->noidung;
		$khuyenmai->TrangThai 	=$request->trangthai;
		$khuyenmai->idQT 		=$request->quantri;
		$khuyenmai->save();
		return redirect('admin/khuyenmai/danhsach')->with('ThongBao','Sua thanh cong');
	}
	public function getXoa($id){
		$khuyenmai=KhuyenMai::find($id);
		$khuyenmai->delete();
		return redirect('admin/khuyenmai/danhsach')->with('ThongBao','Xoa thanh cong');
	}
}
