<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonHang;
use App\ChiTietDonHang;
class AjaxController extends Controller
{
  public function getChitietdonhang($id){
   $chitietdonhang=ChiTietDonHang::where('idDH',$id)->get();
   echo 	"<thead>
   <tr align='center'>
   <th>ID</th>
   <th>Ten</th>
   <th>Hinh</th>
   <th>SoLuong</th>
   <th>Gia</th>
   <th>Imei</th>
   <th>Update</th>
   </tr>
   </thead>";
   foreach ($chitietdonhang as $cthd) {

     echo    "<tr align='center'>
     <th>".$cthd->id."</th>
     <th><a href='chitietsanpham/".$cthd->sanpham->id."'>".$cthd->sanpham->Ten."</a></th>
     <th><img width='70px' height='70px' src='images/sanpham/".$cthd->sanpham->Hinh."' ></th>
     <th>".$cthd->SoLuong."</th>
     <th>".formatPrice($cthd->Gia)."</th>
     <th>".$cthd->IMEI."</th>
     <th><a href='admin/donhang/xuly/".$cthd->id."'>Sua</th>
     </tr>";

   }

 }
}
