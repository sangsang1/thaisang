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
                        <p class="text-muted lead">Đơn Hàng Đã Mua</p>
                    </div>


                    <div class="col-md-6 clearfix" id="basket">
                    <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Thông Tin Cá Nhân</h3>
                            </div>
                           
                            <form id="userloginModalForm"action="thongtinkhachhang" >
                            {{ csrf_field() }} 
                            <div class="table-responsive">
                                <table class="table" >
                                    <tbody>
										
                                        <tr>
                                            <td>Họ Tên:</td>
                                            <th>
											<input type="text" class="form-control" 
												value="{{Auth::guard('KhachHang')->user()->HoTen}}" id="exampleInputEmail1" 
												name="hoten"aria-describedby="emailHelp" disabled>
											</th>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <th>
											<input type="text" class="form-control" 
												value="{{Auth::guard('KhachHang')->user()->Email}}" id="exampleInputEmail1" 
												name="hoten"aria-describedby="emailHelp" disabled>
											</th>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ:</td>
                                            <th>
											<input type="text" class="form-control" id="exampleInputPassword1"
												value="{{Auth::guard('KhachHang')->user()->DiaChi}}" 
												name="diachi" disabled>
											</th>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <th>
											<input type="text" class="form-control" id="inputAddress" 
												value="{{Auth::guard('KhachHang')->user()->SoDienThoai}}" name="sdt" disabled>
												
											</th>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            </form>
                            <a href="suathongtin/{{Auth::guard('KhachHang')->user()->id}}"> Cập nhật</a>
                        </div>
                        
                        <!-- /.box -->

                       

                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-12">
                        <div class="box">
                            <form method="post" action="shopping/donhang">
                            {{ csrf_field() }} 
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>       
                                <th>Tên Khách Hàng</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Ngày Mua Hàng</th>
                                <th>Trạng Thái</th>
                                <th>Chi Tiết</th>
                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                        @foreach($donhang as $dh)
                                     
                                            <tr>
                                           
                                                <td>{{$dh->khachhang->HoTen}}</td>
                                                <td>{{$dh->khachhang->Email}}</td>
                                                <td>{{$dh->khachhang->SoDienThoai}}</td>
                                                <td>{{$dh->khachhang->DiaChi}}</td>
                                                <td>{!! $dh->created_at !!}</td>
                                                
                                                <td class=" 
                                                        @if($dh->TrangThai==0)
                                                        {{'btn-danger'}}
                                                        @elseif($dh->TrangThai==4)
                                                        {{'btn-danger'}}
                                                        @else
                                                        {{'btn-info'}}
                                                        @endif
                                                        ">
                                                        @if($dh->TrangThai==1)
                                                        {{'Xu Ly'}}
                                                        @elseif($dh->TrangThai==2)
                                                        {{'Dang giao hang'}}
                                                        @elseif($dh->TrangThai==3)
                                                        {{'Da giao hang'}}
                                                        @elseif($dh->TrangThai==4)
                                                        {{'Da huy'}}
                                                        @else
                                                        {{'Chua xu ly'}}
                                                        @endif

                          
                                                </td>
                                                <td>
                                                <a class="view" href="chitiet/{{$dh->id}}" >  
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                
                                                
                                            </tr>
                                            
                                        @endforeach
                                        
                                        </tbody>
                                        
                                      
                                    </table>

                                </div>
                                <!-- /.table-responsive -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i> Quay Lại</a>
                                    </div>
                                
                                </div>
                                
                            </form>

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

