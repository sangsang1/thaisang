<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\KhachHang;
use App\QuanTri;
use App\BinhLuan;
use Illuminate\Support\Facades\Auth;
class BinhLuanController extends Controller
{
	public function getDanhsach(){
		$binhluan=BinhLuan::all();
		return view('admin.binhluan.danhsach',['binhluan'=>$binhluan]);
	}

	public function postBinhluan($idsp,$noidung){
		$iduser=Auth::guard('KhachHang')->user()->id;
		$idqt=2;
		$idsp=$idsp;
		$noidung=$noidung;

		$binhluan=new BinhLuan;

		$binhluan->NoiDung 	=$noidung;
		$binhluan->idSP 	=$idsp;
		$binhluan->idKH 	=$iduser;
		$binhluan->idQT 	=$idqt;

		$binhluan->save();

		$binhluan1=BinhLuan::where('idSP',$idsp)->get();
		foreach ($binhluan1 as $bl) {
			$hoten=$bl->khachhang->HoTen;
			$noidung=$bl->NoiDung;
			$thoigian=$bl->created_at;
		}


	



		echo "<div id ='comments'>
			<div class='row comment'>
				<div class='col-sm-3 col-md-2 text-center-xs'>
					<p>
						<img src='images/image/doremon.png' class='img-responsive img-circle' alt=''>
					</p>
				</div>
				<div class='col-sm-9 col-md-10'>
					<h5 class='text-uppercase'>".$hoten."</h5>
					<p class='posted'><i class='fa fa-clock-o'></i>".$thoigian."</p>
					<p>".$noidung."</p>
					<p class='reply'><a href='#'><i class='fa fa-reply'></i> Reply</a>
					</p>
				</div>
		</div>
		
	</div>";




	}
}
