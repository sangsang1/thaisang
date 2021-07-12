<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\DonHang;
class AdminController extends Controller
{
    public function trangchu(){
    	$sanpham=SanPham::all();
    	$donhang=DonHang::all();
    	$tongtien=DonHang::sum('TongTien');
    	return view('admin.index',
    	[
    		'sanpham'		=>$sanpham,
    		'donhang'		=>$donhang,
    		'tongtien'		=>$tongtien,
    	]);
    }
}
