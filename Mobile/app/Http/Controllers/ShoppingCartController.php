<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\SanPham;
use App\TheLoai;
use App\DonHang;
use App\PayMent;
use App\ChitietDonHang;

use Illuminate\Support\Facades\Auth;
class ShoppingCartController extends Controller
{
	public function __construct(){
		$theloai=TheLoai::where('TrangThai',1)->get();
		view()->share('theloai',$theloai);
	}
	public function themgiohang($id){
		$sanpham=SanPham::find($id);
		if($sanpham){
			\Cart::add([
				'id'		=>$sanpham->id,
				'name' 		=>$sanpham->Ten,
				'qty'		=>1,
				'weight'	=>1,
				'price'	 	=>$sanpham->Gia,
				'options' 	=>['hinh' => $sanpham->Hinh],
			]);
		}

		return redirect()->back();
	}
	public function getGiohang(){
		
		if(\Cart::count()>0)
		{
			$banner=Banner::where('TrangThai',1)->get();
			$sanpham=\Cart::content();
			return view('frontend.subpage.giohang',
			[
				'sanpham'=>$sanpham,
				'banner' =>$banner,
			]
			);
		}
		else
		{
			return redirect('/');
		}
	}
	public function suagiohang($idcart,$soluong,$idsp){
		$idcart=$idcart;
		$soluong=(int)$soluong;
		$idsp=$idsp;
		$sanpham=SanPham::find($idsp);
		$soluongsanpham=$sanpham->SoLuong;
		if($soluong>$soluongsanpham)
		{
			echo"<script> alert('so luong vuot qua so luong con lai');
			location.herf='giohang';
			</script>";
		}
		else{
			\Cart::update($idcart,$soluong);
			echo 1;
		}
	}
	public function xoagiohang($idcart){
		\Cart::remove($idcart);
		return redirect('giohang')->with('ThongBao','Xoa thanh cong');
	}

	public function getDonhang(){
		$sanpham=\Cart::content();
		return view('frontend.subpage.thanhtoan',['sanpham'=>$sanpham]);
	}
	public function postDonhang(Request $request){
	
		$sum=str_replace(',', '', \Cart::subtotal(0,3));
		$iduser=Auth::guard('KhachHang')->user()->id;
		$idqt=2;

		if($request->payment==2){
			
			$sum=str_replace(',', '', \Cart::subtotal(0,3));
			$iduser=Auth::guard('KhachHang')->user()->id;
			
		
			return view('frontend.subpage.trangvnpay',compact('sum'));
		}

		$donhangId=DonHang::insertGetId([
			'TongTien' 			=>$sum,
			'GhiChu' 			=>$request->ghichu,
			'idQT'				=>$idqt,
			'idKH'				=>$iduser,
		]);
		if($donhangId){
			$sanpham=\Cart::content();

			foreach($sanpham as $sp){

				ChitietDonHang::insert([
					'SoLuong' 		=>$sp->qty,
					'Gia'			=>$sp->price,
					'idDH'			=>$donhangId,
					'idSP'			=>$sp->id,
				]);
			}
		}
			\Cart::destroy();
    		return redirect('camon');
	}

	//public  function getvnpay(){
       // return view('frontend.subpage.trangvnpay');
  //  }
	
public function createpayment(Request $request){
	session(['cost_id' => $request->id]);
	session(['url_prev' => url()->previous()]);
	$vnp_TmnCode = "UDOPNWS1"; //Mã website tại VNPAY 
	$vnp_HashSecret = "EBAHADUGCOEWYXCMYZRMTMLSHGKNRPBN"; //Chuỗi bí mật
	$vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
	$vnp_Returnurl = "http://localhost/Mobile/shopping/vnpay/return";
	$vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
	$vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
	$vnp_OrderType = 'billpayment';
	$vnp_Amount = $request->input('amount') * 100;
	$vnp_Locale = 'vn';
	$vnp_IpAddr = request()->ip();

	$inputData = array(
		"vnp_Version" => "2.0.0",
		"vnp_TmnCode" => $vnp_TmnCode,
		"vnp_Amount" => $vnp_Amount,
		"vnp_Command" => "pay",
		"vnp_CreateDate" => date('YmdHis'),
		"vnp_CurrCode" => "VND",
		"vnp_IpAddr" => $vnp_IpAddr,
		"vnp_Locale" => $vnp_Locale,
		"vnp_OrderInfo" => $vnp_OrderInfo,
		"vnp_OrderType" => $vnp_OrderType,
		"vnp_ReturnUrl" => $vnp_Returnurl,
		"vnp_TxnRef" => $vnp_TxnRef,
	);

	if (isset($vnp_BankCode) && $vnp_BankCode != "") {
		$inputData['vnp_BankCode'] = $vnp_BankCode;
	}
	ksort($inputData);
	$query = "";
	$i = 0;
	$hashdata = "";
	foreach ($inputData as $key => $value) {
		if ($i == 1) {
			$hashdata .= '&' . $key . "=" . $value;
		} else {
			$hashdata .= $key . "=" . $value;
			$i = 1;
		}
		$query .= urlencode($key) . "=" . urlencode($value) . '&';
	}

	$vnp_Url = $vnp_Url . "?" . $query;
	if (isset($vnp_HashSecret)) {
	   // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
		$vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
		$vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
	}
	return redirect($vnp_Url);

	}


	public function vnpayReturn(Request $request){
		$vnpaydata= $request->all();

		$sum=str_replace(',', '', \Cart::subtotal(0,3));
		$iduser=Auth::guard('KhachHang')->user()->id;
		$idqt=2;
		
	

		$donhangId=DonHang::insertGetId([
			'TongTien' 			=>$sum,
			'GhiChu' 			=>$request->ghichu,
			'idQT'				=>$idqt,
			'idKH'				=>$iduser,
		]);

		$dataPayments=[
			'p_transaction_id'		=>$idqt,
			'p_user_id'				=>$iduser,
			'p_money'				=>$sum,
			'p_transaction_code'	=>$vnpaydata['vnp_TxnRef'],
			'p_note'				=>$vnpaydata['vnp_OrderInfo'],
			'p_vnp_response_code'	=>$vnpaydata['vnp_ResponseCode'],
			'p_code_vnpay'			=>$vnpaydata['vnp_TransactionNo'],
			'p_code_bank'			=>$vnpaydata['vnp_BankCode'],
			'p_time'				=>date('Y-m-d H:i', strtotime($vnpaydata['vnp_PayDate'])),
			
		];
		PayMent::insert($dataPayments);
	
		if($donhangId){
			$sanpham=\Cart::content();

			foreach($sanpham as $sp){

				ChitietDonHang::insert([
					'SoLuong' 		=>$sp->qty,
					'Gia'			=>$sp->price,
					'idDH'			=>$donhangId,
					'idSP'			=>$sp->id,
				]);
			}
		}
			\Cart::destroy();
    		//return redirect('frontend.subpage.vnpay_return',compact('vnpaydata'));
		return view('frontend/subpage/vnpay_return',compact('vnpaydata'));
	}




	  
	 
	  
	


}

