<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\AnhSlideSP;
class AnhSlileSanPhamController extends Controller
{
    //
    public function getDanhsach(){
    	$anhslidesp=AnhSlideSP::all();
    	return view('admin.anhslidesanpham.danhsach',['anhslidesp'=>$anhslidesp]);
    }
    public function getThem(){
    	$sanpham=SanPham::all();
    	return view('admin.anhslidesanpham.them',['sanpham'=>$sanpham]);
    }
    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			'anhtren' 			=>'required',
    			'anhduoi'			=>'required',
    			'sanpham'			=>'required',
    		]
    		,[
    			'anhtren.required'	=>'Ban chua chon hinh tren',
    			'anhduoi.required'	=>'Ban chua chon hinh duoi',
    			'sanpham.required'	=>'Ban chua chon san pham',
    		]);
    	$anhslidesp=new AnhSlideSP;
    	$anhslidesp->idSP=$request->sanpham;
    	if($request->hasFile('anhtren')){
    		$file=$request->file('anhtren');
    		$name=$file->getClientOriginalName();
    		$anhtren=rand()."_".$name;
    		while (file_exists('images/anhslidesp/'.$anhtren)) {
    			$anhtren=rand()."_".$name;
    		}
    		$file->move('images/anhslidesp',$anhtren);
    		$anhslidesp->AnhTren=$anhtren;
    	}
    	if($request->hasFile('anhduoi')){
    		$file=$request->file('anhduoi');
    		$name=$file->getClientOriginalName();
    		$anhduoi=rand()."_".$name;
    		while (file_exists('images/anhslidesp/'.$anhduoi)) {
    			$anhduoi=rand()."_".$name;
    		}
    		$file->move('images/anhslidesp',$anhduoi);
    		$anhslidesp->AnhDuoi=$anhduoi;
    	}
    	$anhslidesp->save();
    	return redirect('admin/anhslidesanpham/danhsach')->with('ThongBao','Them thanh cong');
    }
    public function getSua($id){
    	$anhslidesp=AnhSlideSP::find($id);
    	$sanpham=SanPham::all();
    	return view('admin.anhslidesanpham.sua',['anhslidesp'=>$anhslidesp,'sanpham'=>$sanpham]);
    }
    public function postSua(Request $request,$id){
    	$this->validate($request,
    		[
    			'anhtren' 			=>'required',
    			'anhduoi'			=>'required',
    			'sanpham'			=>'required',
    		]
    		,[
    			'anhtren.required'	=>'Ban chua chon hinh tren',
    			'anhduoi.required'	=>'Ban chua chon hinh duoi',
    			'sanpham.required'	=>'Ban chua chon san pham',
    		]);
    	$anhslidesp=AnhSlideSP::find($id);
    	$anhslidesp->idSP=$request->sanpham;
    	if($request->hasFile('anhtren')){
    		$file=$request->file('anhtren');
    		$name=$file->getClientOriginalName();
    		$anhtren=rand()."_".$name;
    		while (file_exists('images/anhslidesp/'.$anhtren)) {
    			$anhtren=rand()."_".$name;
    		}
    		$file->move('images/anhslidesp',$anhtren);
    		unlink('images/anhslidesp/'.$anhslidesp->AnhTren);
    		$anhslidesp->AnhTren=$anhtren;
    	}
    	if($request->hasFile('anhduoi')){
    		$file=$request->file('anhduoi');
    		$name=$file->getClientOriginalName();
    		$anhduoi=rand()."_".$name;
    		while (file_exists('images/anhslidesp/'.$anhduoi)) {
    			$anhduoi=rand()."_".$name;
    		}
    		$file->move('images/anhslidesp',$anhduoi);
    		unlink('images/anhslidesp/'.$anhslidesp->AnhDuoi);
            $anhslidesp->AnhDuoi=$anhduoi;
    	}
    	$anhslidesp->save();
    	return redirect('admin/anhslidesanpham/danhsach')->with('ThongBao','Sua thanh cong');

    }
    public function getXoa($id){
    	$anhslidesp=AnhSlideSP::find($id);
    	$anhslidesp->delete();
    	return redirect('admin/anhslidesanpham/danhsach')->with('ThongBao','Xoa thanh cong');
    }
}
