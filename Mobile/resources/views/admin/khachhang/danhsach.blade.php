@extends('admin.layout.index')
@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">DANH SÁCH</h4>
            <div class="clearfix"></div>
			<!-- /.col-lg-12 -->
			@if(session('ThongBao'))
			<div class="alert alert-info">
				{{session('ThongBao')}}
			</div>
			@endif
			<div class="clearfix"></div>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Email</th>
						<th>SoDienThoai</th>
						<th>HoTen</th>
						<th>DiaChi</th>
						<th>Xoá</th>
						<th>Sửa</th>
					</tr>
				</thead>
				<tbody>
				@foreach($khachhang as $kh)
					<tr class="odd gradeX" align="center">
						<td>{{$kh->id}}</td>
						<td>{{$kh->Email}}</td>
						<td>{{$kh->SoDienThoai}}</td>
						<td>{{$kh->HoTen}}</td>
						<td>{{$kh->DiaChi}}</td>
						<td class="center"><i class="fa fa-pencil  fa-fw"></i><a href="admin/khachhang/sua/{{$kh->id}}"> Sửa</a></td>
						<td class="center"><i class="fa fa-trash-o fa-fw"></i> <a>Xoá</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>

 @endsection