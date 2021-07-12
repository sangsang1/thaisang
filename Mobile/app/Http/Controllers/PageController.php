<?php

namespace App\Http\Controllers;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Banner;
use App\TheLoai;
use App\TinTuc;
use App\SanPham;
use App\KhachHang;
use App\ChiTietThuocTinh;
use App\ChiTietDonHang;
use App\ThuocTinh;
use App\DonHang;
use Mail;
class PageController extends Controller
{
    public function __construct(){
        $theloai=TheLoai::where('TrangThai',1)->get();
        view()->share('theloai',$theloai);
    }
    
    function trangchu()
    {
        $sanpham=SanPham::where('TrangThai',1)->orderByRaw('id DESC')->get()->random(6);
        $banner=Banner::where('TrangThai',1)->get();
        $tintuc=TinTuc::get()->random(4);
        $iphone=SanPham::where('idTL',1)->get()->random(4);;
        $samsung=SanPham::where('idTL',2)->take(4)->get();
        $nokia=SanPham::where('idTL',4)->take(4)->get();
        $oppo=SanPham::where('idTL',3)->take(4)->get();
        $asus=SanPham::where('idTL',3)->take(5)->get();
     
        return view('pages.trangchu',
            compact(
                'banner',
                'tintuc',
                'sanpham',
                'iphone',
                'samsung',
                'nokia',
                'oppo',
                'asus'
            
             ));
           
    }
    

    public function danhmucsanpham($id){
       
        $theloai1=Theloai::find($id);
        $sanpham=SanPham::where('TrangThai',1)->where('idTL',$id)->paginate(12);
        return view('frontend.subpage.danhmucsanpham',
            [
               
                'sanpham'       =>$sanpham,
                'theloai1'       =>$theloai1,
            ]);
    }

    public function chitietsanpham($id){
        $sanpham=SanPham::find($id);
        $sanphamlienquan=SanPham::where('idTL',$sanpham->idTL)->where('TrangThai',1)->get()->random(4);
        return view('frontend.subpage.chitietsanpham',
            [
                'sanpham'           =>$sanpham,
                'sanphamlienquan'   =>$sanphamlienquan,
            ]);
    }

    public function chitiettintuc($id){
        $tintuc=TinTuc::find($id);
        $tinmoi=TinTuc::orderByRaw('id DESC')->where('id','<>',$id)->take(4)->get();
        $sanpham=SanPham::find($id);
        $sanphamlienquan=SanPham::where('idTL',$sanpham->idTL)->where('TrangThai',1)->get()->random(3);
        $theloai=TheLoai::all();
        return view('frontend.subpage.chitiettintuc',
            [
                'tintuc'    =>$tintuc,
                'tinmoi'    =>$tinmoi,
                'theloai'   =>$theloai,
                'sanpham'           =>$sanpham,
               'sanphamlienquan'   =>$sanphamlienquan,
            ]);
    }






    function getDangnhap()
    {
        return view ('pages.trangchu');
    }
  
    function postDangnhap(Request $request)
    {
        $this->validate($request,
        [
            'email'=>'required',
            'password'=>'required',

        ],[
            'email.required'=>'vui lòng nhập email',
            'password.required'=>'vui lòng nhập mật khẩu',
        ]);
        $credentials= array('Email'=>$request->email,'password'=>$request->password,'active'=>0);
        if(Auth::guard('KhachHang')->attempt($credentials))
        {
            return redirect('/');
        }
        else
        {
            return redirect()->back()->with('ThongBao','Bạn chưa kích hoạt tài khoản');
        }
    }

    function getDangky()
    {
        return view ('pages.dangky');
    }

    function postDangky(Request $request)
    {
        $this->validate($request,
        [
            'email'					=>'required|unique:KhachHang,Email',
            'password'              =>'required|min:3|max:32',
            'passwordagain'         =>'required|same:password',
            'name'                  =>'required',
            'diachi'                =>'required',
            'sdt'                   =>'required',
        ]
        ,[
            'email.required'        =>'Ban chua nhap email',
            'email.unique'          =>'Email da ton tai',
            'password.required'     =>'Ban chua nhap mat khau',
            'password.min'          =>'mat khau khong duoc nho hon 3 ky tu',
            'password.max'          =>'mat khau khong duoc lon hon 32 ky tu',
            'passwordagain.required'=>'Ban chua nhap lai mat khau',
            'passwordagain.same'    =>'mat khau khong giong nhau',
            'name.required'         =>'Ban chua nhap ho ten',
            'diachi.required'       =>'Ban chua nhap dia chi',
            'sdt.required'          =>'Ban chua nhap so dien thoai',      
        ]);
                $email=$request->email;
                $code=bcrypt(md5(rand(1,99999)));
                $khachhang=new KhachHang();
                $khachhang->Email       =$email;
                $khachhang->password    =bcrypt($request->password);
                $khachhang->HoTen       =$request->name;
                $khachhang->DiaChi      =$request->diachi;
                $khachhang->SoDienThoai =$request->sdt;
                $khachhang->code        =$code;

                $khachhang->save();
                if($khachhang->id){
                    return redirect('dangky')->with('ThongBao','Đăng ký thành công');
                }else{
                    return redirect('dangky')->with('ThongBao','Đăng ký không thành công');
                }

                $url=route('get.link.xacnhan',[
                    'code'    =>$khachhang->code,
                    'email'   =>$email,
                ]);
                $data=[
                    'route'     =>$url,
                ];
                    //gui mail
                Mail::send('frontend.subpage.guimail_xacnhan',$data, function($message) use ($email){
                    $message->to($email, 'Xác nhận')->subject('Gửi mã xác nhận!');
                });
        
        
                if($khachhang->id){
                    return redirect('dangky')->with('ThongBao','Link xác nhận đăng ký đã được gửi vào email của bạn');
                }else{
                   return redirect()->back();
                }
    }

    function getDangXuat(){
        Auth::guard('KhachHang')->logout();
        return redirect('/');
        
    }

    function timkiem(Request $request){
        $tukhoa=$request->tukhoa;
        $sanpham=SanPham::where('Ten','like',"%$tukhoa%")->get();
        return view('frontend.subpage.timkiem',
            [
                'sanpham'       =>$sanpham,
                'tukhoa'       =>$tukhoa,
            ]);
    }
   
    public  function getCamon(){
        return view('frontend.subpage.camon');
    }

    



//----------------------------------




public  function getthongtinkhachhang(Request $request){
    $sanpham=SanPham::all();
    $khachhang=KhachHang::all();
    $donhang=DonHang::all();
return view('frontend.thongtin.thongtinkhachhang',
    compact(
        'sanpham',
        'khachhang',
        'donhang',
     ));

}



public  function getSuathongtin(Request $request,$id){

    $khachhang=KhachHang::find($id);
	return view('frontend.thongtin.suathongtin',['khachhang'=>$khachhang]);

}

function postSuathongtin(Request $request,$id)
    {
        $this->validate($request,
        [
            'matkhau'				=>'required',
            'matkhauagain'			=>'required|same:matkhau',
            'ten'					=>'required',
            'sdt'					=>'required',
            'diachi'				=>'required',
        ]
        ,[
            'matkhau.required'		=>'Mat khau khong duoc bo trong',
            'matkhauagain.required'	=>'Chua nhap lai mat khau',
            'matkhauagain.same'		=>'Mat khau khong giong nhau',
            'ten.required'			=>'Ban chua nhap ten',
            'sdt.required'			=>'Ban chua nhap so dien thoai',
            'diachi.required'		=>'Ban chua chon dia chi',
        ]);
            $khachhang=KhachHang::find($id);
            $khachhang->password 		=bcrypt($request->matkhau);
            $khachhang->HoTen 			=$request->ten;
            $khachhang->SoDienThoai 	=$request->sdt;
            $khachhang->DiaChi 			=$request->diachi;
            $khachhang->save();
            return redirect('thongtinkhachhang')->with('ThongBao','Sua Thanh Cong');
            }




            public function chitiet($id){
              
                $donhang=DonHang::all();
                
                $ctdh=ChiTietDonHang::all(); 
               
                return view('frontend.thongtin.chitiet',[
                    'donhang'=>$donhang,
                    'ctdh'=>$ctdh,
                    ]);
                    
            }
         
           
//------------------------------

}




//backend
       
