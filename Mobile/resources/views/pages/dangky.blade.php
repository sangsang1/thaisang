@extends('frontend.index')
@section('content')
<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Đăng Ký Tài Khoản</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="#">Trang Chủ</a>
                            </li>
                            <li>Đăng Ký Tài Khoản</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">Đăng Ký </h2>

                         
                            @if(count($errors)>0)
							<div class="alert alert-danger">
								@foreach($errors->all() as $err)
								{{$err}}
								<br>
								@endforeach
							</div>   
							@endif        

							@if(session('ThongBao'))
							<div class="alert alert-info">
								{{session('ThongBao')}}
							</div>
							@endif     
                            <form action="dangky" method="POST">
                {{ csrf_field() }}  
                   
                    <div class="modal-body">
                        <div class="user-login-or"><span style="background: #67c737"></span></div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input type="email" id="email" name="email" required class="form-control" value="" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu</label>
                            <input type="password" id="password" required value="" name="password" class="form-control" placeholder="Mật Khẩu">
                        </div>
                        <div class="form-group">
                            <label for="password">Nhập Lại Mật Khẩu</label>
                            <input type="password" id="password" required value="" name="passwordagain" class="form-control" placeholder="Nhập Lại Mật Khẩu">
                        </div>
                        <div class="form-group">
                            <label for="password"> Họ Tên</label>
                            <input type="text" id="name" required value="" name="name" class="form-control" placeholder="Họ Tên">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ</label>
                            <input type="text" id="addresss" required value="" name="diachi" class="form-control" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <label for="sdt">Số Điện Thoại</label>
                            <input type="text" id="phone" required value="" name="sdt" class="form-control" placeholder="Số Điện Thoại">
                        </div>                        
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-outline" name="dangky">Đăng Ký</button>
                    </div>
                </form>
                        </div>
                    </div>

                  

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        
@endsection