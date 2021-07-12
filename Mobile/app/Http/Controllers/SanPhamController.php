<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\SanPham;
use App\TheLoai;
class SanPhamController extends Controller
{
    public function getDanhsach(){
    	$sanpham=SanPham::all();
    	return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }
    public function getThem(){
    	$theloai=TheLoai::all();
    	return view('admin.sanpham.them',['theloai'=>$theloai]);
    }
    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			'ten'				=>'required',
    			'tomtat'			=>'required',
    			'cauhinh'			=>'required',
    			'gia'				=>'required',
    			'soluong'			=>'required',
    			'hinh'				=>'required',
    			'noidung'			=>'required',
    		]
    		,[
    			'ten.required'		=>'Ban chua nhap ten',
    			'tomtat.required'	=>'Ban chua nhap tom tat',
    			'cauhinh.required'	=>'Ban chua nhap tom tat',
    			'gia.required'		=>'Ban chua nhap gia',
    			'soluong.required'	=>'Ban chua nhap so luong',
    			'hinh.required'		=>'Ban chua nhap hinh',
    			'noidung.required'	=>'Ban chua nhap noi dung',
    		]);
    	$sanpham=new SanPham;
    	$sanpham->Ten 			=$request->ten;
    	$sanpham->Ten_KhongDau	=changeTitle($request->ten);
    	$sanpham->TomTat 		=$request->tomtat;
    	$sanpham->CauHinh 		=$request->cauhinh;
    	$sanpham->Gia 			=$request->gia;
    	$sanpham->SoLuong 		=$request->soluong;
    	$sanpham->NoiDung 		=$request->noidung;
    	$sanpham->BanChay 		=$request->banchay;
    	$sanpham->TrangThai 	=$request->trangthai;
    	$sanpham->idTL 			=$request->theloai;
    	if($request->hasFile('hinh')){
    		$file=$request->file('hinh');
    		$name=$file->getClientOriginalName();
    		$anh=rand()."_".$name;
    		while (file_exists('images/sanpham/'.$anh)) {
				$anh=rand()."_".$name;
			}
			$file->move('images/sanpham',$anh);
			$sanpham->Hinh=$anh;
    	}else{
    		$sanpham->Hinh="";
    	}
    	$sanpham->save();
    	return redirect('admin/sanpham/danhsach')->with('ThongBao','Them thanh cong');
    }
    public function getSua($id){
    	$sanpham=SanPham::find($id);
    	$theloai=TheLoai::all();
    	return view('admin.sanpham.sua',['sanpham'=>$sanpham,'theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id){
    	$this->validate($request,
    		[
    			'ten'				=>'required',
    			'tomtat'			=>'required',
    			'cauhinh'			=>'required',
    			'gia'				=>'required',
    			'soluong'			=>'required',
    			'hinh'				=>'required',
    			'noidung'			=>'required',
    		]
    		,[
    			'ten.required'		=>'Ban chua nhap ten',
    			'tomtat.required'	=>'Ban chua nhap tom tat',
    			'cauhinh.required'	=>'Ban chua nhap tom tat',
    			'gia.required'		=>'Ban chua nhap gia',
    			'soluong.required'	=>'Ban chua nhap so luong',
    			'hinh.required'		=>'Ban chua nhap hinh',
    			'noidung.required'	=>'Ban chua nhap noi dung',
    		]);
    	$sanpham=SanPham::find($id);
    	$sanpham->Ten 			=$request->ten;
    	$sanpham->Ten_KhongDau	=$request->ten;
    	$sanpham->TomTat 		=$request->tomtat;
    	$sanpham->CauHinh 		=$request->cauhinh;
    	$sanpham->Gia 			=$request->gia;
    	$sanpham->SoLuong 		=$request->soluong;
    	$sanpham->NoiDung 		=$request->noidung;
    	$sanpham->BanChay 		=$request->banchay;
    	$sanpham->TrangThai 	=$request->trangthai;
    	$sanpham->idTL 			=$request->theloai;
    	if($request->hasFile('hinh')){
    		$file=$request->file('hinh');
    		$name=$file->getClientOriginalName();
    		$anh=rand()."_".$name;
    		while (file_exists('images/sanpham/'.$anh)) {
				$anh=rand()."_".$name;
			}
			$file->move('images/sanpham',$anh);
			
		
			$sanpham->Hinh=$anh;
    	}else{
    		$sanpham->Hinh=" ";
    	}
    	$sanpham->save();
    	return redirect('admin/sanpham/danhsach')->with('ThongBao','Sua thanh cong');
    }
    public function getXoa($id){
        $sanpham=SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('ThongBao','Xoa thanh cong');
    }
}
