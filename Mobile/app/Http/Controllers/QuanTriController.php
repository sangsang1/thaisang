<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\QuanTri;
use App\User;
class QuanTriController extends Controller
{
    public function getDanhsach(){
    	$quantri=QuanTri::all();
    	return view("admin.quantri.danhsach",['quantri'=>$quantri]);
    }
    public function getThem(){
    	return view('admin.quantri.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			'email'					=>'required|unique:QuanTri,Email',
    			'matkhau'				=>'required',
    			'matkhauagain'			=>'required|same:matkhau',
    			'ten'					=>'required',
    			'sdt'					=>'required',
    			'quyen'					=>'required',
    		]
    		,[
    			'email.required'		=>'Email khong duoc bo trong',
    			'email.unique'			=>'Email da ton tai',
    			'matkhau.required'		=>'Mat khau khong duoc bo trong',
    			'matkhauagain.required'	=>'Chua nhap lai mat khau',
    			'matkhauagain.same'		=>'Mat khau khong giong nhau',
    			'ten.required'			=>'Ban chua nhap ten',
    			'sdt.required'			=>'Ban chua nhap so dien thoai',
    			'quyen.required'		=>'Ban chua chon quyen',
    		]);
    	$quantri=new QuanTri;
    	$quantri->Email 		=$request->email;
    	$quantri->password 		=bcrypt($request->matkhau);
    	$quantri->HoTen 		=$request->ten;
    	$quantri->SoDienThoai 	=$request->sdt;
    	$quantri->Quyen 		=$request->quyen;
    	$quantri->save();
    	return redirect('admin/quantri/danhsach')->with('ThongBao','Them Thanh Cong');

    }
    public function getSua($id){
    	$quantri=QuanTri::find($id);
    	return view('admin.quantri.sua',['quantri'=>$quantri]);
    }
    public function postSua(Request $request,$id){
    	$this->validate($request,
    		[
    			'matkhau'				=>'required|min:3|max:32',
    			'matkhauagain'			=>'required|same:matkhau',
    			'ten'					=>'required',
    			'sdt'					=>'required',
    			'quyen'					=>'required',
    		]
    		,[
				'matkhau.required'		=>'Mat khau khong duoc bo trong',
				'matkhau.min'         	=>'mat khau khong duoc nho hon 3 ky tu',
				'matkhau.max'          	=>'mat khau khong duoc lon hon 32 ky tu',
    			'matkhauagain.required'	=>'Chua nhap lai mat khau',
    			'matkhauagain.same'		=>'Mat khau khong giong nhau',
    			'ten.required'			=>'Ban chua nhap ten',
    			'sdt.required'			=>'Ban chua nhap so dien thoai',
    			'quyen.required'		=>'Ban chua chon quyen',
    		]);
    	$quantri=QuanTri::find($id);
    	$quantri->password 		=bcrypt($request->matkhau);
    	$quantri->HoTen 		=$request->ten;
    	$quantri->SoDienThoai 	=$request->sdt;
    	$quantri->Quyen 		=$request->quyen;
    	$quantri->save();
    	return redirect('admin/quantri/danhsach')->with('ThongBao','Sua Thanh Cong');
	    }
   
        public function getXoa($id){
            $quantri=QuanTri::find($id);
            $quantri->delete($id);
            return redirect('admin/quantri/danhsach')->with('ThongBao','Xoa thanh cong');
        }


  
    public function getDangnhap(){
        return view('admin.login');
    }
    public function postDangnhap(Request $request)
    {
        $this->validate($request,
        [
            'email'=>'required',
            'password'=>'required',

        ],[
            'email.required'=>'vui lòng nhập email',
            'password.required'=>'vui lòng nhập mật khẩu',
        ]);
        $credentials= array('email'=>$request->email,'password'=>$request->password);
        if(Auth::guard('QuanTri')->attempt($credentials))
        {
            return redirect('admin/trangchu');
        }
        else
        {
            return redirect()->back()->with('ThongBao','Bạn chưa kích hoạt tài khoản');
        }
    }
    public function getDangxuat(){
		Auth::guard('QuanTri')->logout();
		
        return redirect('admin/dangnhap');
    }
}
