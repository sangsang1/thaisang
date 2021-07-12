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

        	@if(session('mess'))
					<div class="alert alert-danger">
					{{session('mess')}}
          </div>
          @endif
        
        
                    <div class="col-md-12">
                        <p class="text-muted lead">Sản Phẩm Đã Chọn</p>
                    </div>


                    <div class="col-md-9 clearfix" id="basket">

                        <div class="box">

                            <form method="post" >

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
												<td>
												<i class="fa fa-pencil  fa-fw " ></i><a class="updatecart" data-key={{$key}}> Sửa</a> 
                                                <a href="xoagiohang/{{$key}}"><i class="fa fa-trash-o"></i>xoá</a>
                                                </td>
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
                                        <a href="trangchu" class="btn btn-default"><i class="fa fa-chevron-left"></i> Tiếp Tục Mua Sắm</a>
                                    </div>
                                    <div class="pull-right">
                                    <div class="pull-left">
                                        <a href="shopping/donhang" class="btn btn-default"><i class="fa fa-chevron-right"></i> Thanh Toán</a>
                                    </div>

                                    </div>
                                </div>
								
                            </form>

                        </div>
                        <!-- /.box -->

                       

                
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
