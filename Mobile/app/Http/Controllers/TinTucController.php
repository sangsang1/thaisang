<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\QuanTri;
class TinTucController extends Controller
{
	public function getDanhsach(){
		$tintuc=TinTuc::all();
		return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
	}
	public function getThem(){
		$quantri=QuanTri::all();
		return view('admin.tintuc.them',['quantri'=>$quantri]);
	}
	public function postThem(Request $request){
		$this->validate($request,
			[
				'tieude'			=>'required',
				'noidung'			=>'required',
				'quantri'			=>'required',
			]
			,[
				'tieude.required'	=>'Ban chua nhap tieu de',
				'noidung.required'	=>'Ban chua nhap noi dung',
				'quantri.required'	=>'Ban chua chon quan tri',
			]);
		$tintuc=new TinTuc;
		$tintuc->TieuDe 			=$request->tieude;
		$tintuc->TieuDe_KhongDau	=$request->tieude;
		$tintuc->NoiDung 			=$request->noidung;
		$tintuc->idQT 				=$request->quantri;
		if($request->hasFile('hinh')){
			$file=$request->file('hinh');
			$name=$file->getClientOriginalName();
			$anh=rand()."_".$name;
			while (file_exists('images/tintuc/'.$anh)) {
				$anh=rand()."_".$name;
			}
			$file->move('images/tintuc',$anh);
			$tintuc->Hinh=$anh;
		}else{
			$tintuc->Hinh='';
		}
		$tintuc->save();

		return redirect('admin/tintuc/danhsach')->with('ThongBao','Them thanh cong');
	}
	public function getSua($id){
		$tintuc=TinTuc::find($id);
		$quantri=QuanTri::all();
		return view('admin.tintuc.sua',['tintuc'=>$tintuc,'quantri'=>$quantri]);
	}
	public function postSua(Request $request,$id){
		$tintuc=TinTuc::find($id);
		$this->validate($request,
			[
				'tieude'			=>'required',
				'noidung'			=>'required',
				'quantri'			=>'required',
			]
			,[
				'tieude.required'	=>'Ban chua nhap tieu de',
				'noidung.required'	=>'Ban chua nhap noi dung',
				'quantri.required'	=>'Ban chua chon quan tri',
			]);
		$tintuc->TieuDe 			=$request->tieude;
		$tintuc->TieuDe_KhongDau	=changeTitle($request->tieude);
		$tintuc->NoiDung 			=$request->noidung;
		$tintuc->idQT 				=$request->quantri;
		if($request->hasFile('hinh')){
			$file=$request->file('hinh');
			$name=$file->getClientOriginalName();
			$anh=rand()."_".$name;
			while (file_exists('images/tintuc/'.$anh)) {
				$anh=rand()."_".$name;
			}
			$file->move('images/tintuc',$anh);
		
			$tintuc->Hinh=$anh;
		}else{
			$tintuc->Hinh='';
		}
		$tintuc->save();

		return redirect('admin/tintuc/danhsach')->with('ThongBao','Sua thanh cong');
	}
	public function getXoa($id){
		$tintuc=TinTuc::find($id);
		$tintuc->delete();
		return redirect('admin/tintuc/danhsach')->with('ThongBao','Xoa thanh cong');
	}
}
