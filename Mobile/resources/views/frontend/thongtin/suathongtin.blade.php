@extends('frontend.index')
@section('content')


<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
									<div class="box" id="order-summary">
										<div class="box-header">
											<h3>Cập Nhật Thông Tin</h3>
										</div>
									</div>
        <div class="col-lg-7" style="padding-bottom:120px">
				@if(count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
					{{$err}}
					<br>
					@endforeach
				</div>
				@endif
				<form action="suathongtin/{{$khachhang->id}}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Email</label>
						<input  class="form-control" disabled="true"  name="email" value="{{$khachhang->Email}}" placeholder="nhập email " />
					</div>
					<div class="form-group">
						<label>Mật khẩu</label>
						<input type="password" class="form-control" value="" name="matkhau" placeholder="nhập mat khau " />
					</div>
					<div class="form-group">
						<label>Nhập lại mật khẩu</label>
						<input type="password" class="form-control" value="" name="matkhauagain" placeholder="nhập lại mật khẩu " />
					</div>
					<div class="form-group">
						<label>Họ tên</label>
						<input class="form-control" name="ten" value="{{$khachhang->HoTen}}" placeholder="nhập họ tên " />
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input class="form-control"  name="sdt" value="{{$khachhang->SoDienThoai}}" placeholder="nhập sdt " />
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<input class="form-control" name="diachi" value="{{$khachhang->DiaChi}}" placeholder="nhập địa chỉ " />
					</div>
					<button type="submit" class="btn btn-default">Sửa</button>
					<button type="reset" class="btn btn-default"><a  href="#" style="color:#000000; text-decoration:none">Huỷ</a></button>
					<form>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>


  @endsection
