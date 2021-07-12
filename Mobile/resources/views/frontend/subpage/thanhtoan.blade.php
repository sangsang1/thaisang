@extends("frontend.index")
@section('content')
<div id="content">
            <div class="container">

                <div class="row">

				@if(session('ThongBao'))
					<div class="alert alert-success">
					{{session('ThongBao')}}
					</div>
				@endif
                    <div class="col-md-12">
                        <p class="text-muted lead">Thông Tin Thanh Toán</p>
                    </div>


                    <div class="col-md-9 clearfix" id="basket">

                        <div class="box">

                            <form method="post" action="shopping/donhang">
                            {{ csrf_field() }} 
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Sản Phẩm</th>
                                                <th>Số Lượng</th>
                                                <th>Đơn Giá</th>
                                                <th>Giá</th>
                                                <th colspan="2">Tổng Tiền</th>
                                            </tr>
										</thead>
									
                                        <tbody>
										<?php $stt=1; $sum=0; ?>
										@foreach($sanpham as $key=> $sp)
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <img src="images/sanpham/{{$sp->options->hinh}}" alt="White Blouse Armani">
                                                    </a>
                                                </td>
                                                <td><a href="#">{{$sp->name}}</a>
                                                </td>
                                                <td>
												<input class="soluong" type="number" name="soluong" value="{{$sp->qty}}" min=0 style="width: 50px">
                    							<input type="hidden" name="idsp" class="idsp"  value="{{$sp->id}}" >
                                                </td>
                                                <td>{{number_format($sp->price)}}</td>
                                                <td>{{number_format(($sp->price*$sp->qty))}}</td>
												<td>{{number_format(($sp->price*$sp->qty))}}</td>
												
											</tr>
											<?php $stt++;$sum+=$sp->price*$sp->qty?>
											@endforeach
										</tbody>
										
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th colspan="2">{{number_format($sum)}}</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i> Tiếp Tục Mua Sắm</a>
                                    </div>
                                    <div class="pull-right">
                                 
                                        <button type="submit" class="btn btn-template-main">Thanh Toán Thường <i class="fa fa-chevron-right"></i>  </button>
                                        <button type="submit" class="btn btn-template-main" name="payment" value="2">Thanh Toán Online <i class="fa fa-chevron-right"></i>  </button>
                           
                                        <div class="col-md-12">
                                        @php 
                                             $vnd_to_usd = $sum/23083;
                                        @endphp
                                            <div id="paypal-button"></div>
                                            <input type="hidden" id="vnd_to_usd" value="{{round($vnd_to_usd,2)}}" >
                                        </div>
                                        
                                        
                                    </div>
                                </div>
								
                            </form>

                        </div>
                        <!-- /.box -->

                       

                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">
                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Giao Đến</h3>
                            </div>
                           
						
                            <div class="table-responsive">
                                <table class="table" >
                                    <tbody>
										
                                        <tr>
                                            <td>Họ Tên:</td>
                                            <th>
											<input type="text" class="form-control" 
												value="{{Auth::guard('KhachHang')->user()->HoTen}}" id="exampleInputEmail1" 
												name="hoten"aria-describedby="emailHelp" >
											</th>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ:</td>
                                            <th>
											<input type="text" class="form-control" id="exampleInputPassword1"
												value="{{Auth::guard('KhachHang')->user()->DiaChi}}" 
												name="diachi">
											</th>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <th>
											<input type="text" class="form-control" id="inputAddress" 
												value="{{Auth::guard('KhachHang')->user()->SoDienThoai}}" name="sdt">
												
											</th>
                                        </tr>
                                        <tr class="total">
                                            <td>Tổng Tiền:</td>
                                            <th>
											<input type="text" class="form-control" 
												value="{{Cart::subtotal()}}"
												id="exampleInputPassword1" name="sum">
												
											</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
				
                        </div>


                       
					</span>
                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                </div>

            </div>
            <!-- /.container -->
        </div>

@endsection

@section('script')
<script type="text/javascript">
 

  $(document).ready(function(){
   $(".updatecart").click(function(){
      var soluong=$(this).parents("tr").find(".soluong").val();
      var idcart=$(this).attr("data-key");
      var idsp=$(this).parents("tr").find(".idsp").val();
      // alert(soluong);
      $.get("suagiohang/"+idcart+"/"+soluong+"/"+idsp+"/",function(data){
        $(".tien").append(data);
         if(data==1){
            alert("cap nhap thanh cong");
             location.reload();
           }else{
              alert("cap nhap that bai");
             location.reload();
           }
      });
   });
});
  
</script>
   

@endsection
