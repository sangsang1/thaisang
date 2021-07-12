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
                        <p class="text-muted lead">Chi Tiết Đơn Hàng</p>
                    </div>


                    <div class="col-md-12 clearfix" id="basket">

                        <div class="box">

                            <form method="post" action="shopping/donhang">
                            {{ csrf_field() }} 
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="thead-text">STT</th>
                                            <th class="thead-text">Sản Phẩm</th>
                                            <th class="thead-text">Số Lượng</th>
                                            <th class="thead-text">Giá</th>
                                            <th class="thead-text">Tổng Tiền</th>
                                        </tr>
										</thead>
									
                                        <tbody>
                                        <?php $stt = 0;?>
                                        
                                     @foreach($ctdh as $ctdh)
                                        <?php $stt++ ;?>
      
                                        <tr>
                                            <td>{{$stt}}</td>
                                            <td>
                                                <img src="images/sanpham/{{$ctdh->sanpham->Hinh}}" alt="">{{$ctdh->sanpham->Ten}}
                                            </td>
                                            <td>{{$ctdh->SoLuong}}</td>
                                            <td>{{$ctdh->Gia }}</td>
                                            <td>{{$ctdh->donhang->TongTien }}</td>		
										</tr>
                                            
                                    @endforeach
										</tbody>
										
                                        
                                    </table>

                                </div>
                                <!-- /.table-responsive -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i> Tiếp Tục Mua Sắm</a>
                                    </div>
                                 
                                </div>
								
                            </form>

                        </div>
                        <!-- /.box -->

                       

                    </div>
                    <!-- /.col-md-9 -->

                       
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

