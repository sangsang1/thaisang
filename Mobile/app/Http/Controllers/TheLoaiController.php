<?php

namespace App\Http\Controllers;
use App\TheLoai;
use App\SanPham;
use Illuminate\Http\Request;

class TheLoaiController extends Controller
{
    public function getDanhSach()
    {
        $theloai=TheLoai::all(); 
        return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }

     public function getThem(){
    	return view('admin.theloai.them');
	}
	
	public function postThem(Request $request){
    	$this->validate($request,
    		[
    			'ten'				=>'required',
    			'trangchu'			=>'required',
    			'trangthai' 		=>'required',
    		]
    		,[
    			'ten.required'		=>'Ban chua nhap ten',
    			'trangthai.required'=>'Ban chua chon trang thai',
    			'trangchu.required' =>'Ban chua chon trang chu',
    		]);
    	$theloai=new TheLoai;
    	$theloai->Ten 			=$request->ten;
    	$theloai->Ten_KhongDau	=$request->ten;
    	$theloai->TrangChu 		=$request->trangchu;
    	$theloai->TrangThai 	=$request->trangthai;

    	$theloai->save();

    	return redirect('admin/theloai/danhsach')->with('ThongBao','Thêm Thành Công');
    }

	public function getSua($id){
    	$theloai=TheLoai::find($id);
    	return view('admin.theloai.sua',['theloai'=>$theloai]);

    }
    public function postSua(Request $request,$id){
    	$theloai=TheLoai::find($id);
    	$this->validate($request,
    		[
    			'ten'				=>'required',
    			'trangchu'			=>'required',
    			'trangthai' 		=>'required',
    		]
    		,[
    			'ten.required'		=>'Ban chua nhap ten',
    			'trangthai.required'=>'Ban chua chon trang thai',
    			'trangchu.required' =>'Ban chua chon trang chu',
    		]);
    	$theloai->Ten 		   =$request->ten;
    	$theloai->Ten_KhongDau =$request->ten;
    	$theloai->trangchu 	   =$request->trangchu;
    	$theloai->trangthai    =$request->trangthai;

    	$theloai->save();
    	return redirect('admin/theloai/danhsach')->with('ThongBao','Sửa Thành Công');		
    }
    public function getXoa($id){
    	$theloai=TheLoai::find($id);
        $theloai->delete();
        return redirect('admin/theloai/danhsach')->with('ThongBao',' Xoá Thành Công');
       /* if($theloai->sanpham == true){
            return redirect('admin/theloai/danhsach')->with('ThongBao','khong xoa duoc');
        }else{
        	$theloai->delete();
            return redirect('admin/theloai/danhsach')->with('ThongBao','Xoa Thanh Cong');
        }
    	*/

    }
    public function getXuly($id){
    	$theloai=TheLoai::find($id);
    	if($theloai->TrangChu==0){
    		$theloai->TrangChu=1;
    	}else{
    		$theloai->TrangChu=0;
		}
		

    	$theloai->save();
    	return redirect('admin/theloai/danhsach')->with('ThongBao','Sửa thành công');
	}
	
	
}
    
   