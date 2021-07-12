<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThuocTinh;
class ThuocTinhController extends Controller
{
    public function getDanhsach(){
    	$thuoctinh=ThuocTinh::all();
    	return view('admin.thuoctinh.danhsach',['thuoctinh'=>$thuoctinh]);
    }
    public function getThem(){
    	return view('admin.thuoctinh.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			'sim'					=>'required',
    			'dungluong'				=>'required',
    			'mausac'				=>'required',
    			'ram'					=>'required',
    		]
    		,[
    			'sim.required'			=>'Ban chua nhap sim',
    			'dungluong.required'	=>'Ban chua nhap dung luong',
    			'mausac.required'		=>'Ban chua nhap mau sac',
    			'ram.required'			=>'Ban chua nhap ram',
    		]);

    	$thuoctinh=new ThuocTinh;

    	$thuoctinh->Sim 		=$request->sim;
    	$thuoctinh->DungLuong 	=$request->dungluong;
    	$thuoctinh->MauSac 		=$request->mausac;
    	$thuoctinh->Ram 		=$request->ram;
    	$thuoctinh->save();

    	return redirect('admin/thuoctinh/danhsach')->with('ThongBao','Them thanh cong');
    }
    public function getSua($id){
    	$thuoctinh=ThuocTinh::find($id);
    	return view('admin.thuoctinh.sua',['thuoctinh'=>$thuoctinh]);
    }
    public function postSua(Request $request,$id){
    	$this->validate($request,
    		[
    			'sim'					=>'required',
    			'dungluong'				=>'required',
    			'mausac'				=>'required',
    			'ram'					=>'required',
    		]
    		,[
    			'sim.required'			=>'Ban chua nhap sim',
    			'dungluong.required'	=>'Ban chua nhap dung luong',
    			'mausac.required'		=>'Ban chua nhap mau sac',
    			'ram.required'			=>'Ban chua nhap ram',
    		]);
    	$thuoctinh=ThuocTinh::find($id);

    	$thuoctinh->Sim 		=$request->sim;
    	$thuoctinh->DungLuong 	=$request->dungluong;
    	$thuoctinh->MauSac 		=$request->mausac;
    	$thuoctinh->Ram 		=$request->ram;
    	$thuoctinh->save();

    	return redirect('admin/thuoctinh/danhsach')->with('ThongBao','Sua thanh cong');
    }
    public function getXoa($id){
    	$thuoctinh=ThuocTinh::find($id);
    	$thuoctinh->delete();
    	return redirect('admin/thuoctinh/danhsach')->with('ThongBao','Xoa thanh cong');
    }
}
