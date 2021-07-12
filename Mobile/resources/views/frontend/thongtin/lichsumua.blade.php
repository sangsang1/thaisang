@extends("frontend.index")
@section('content')

<div class="box">

    <form method="post" action="">
    {{ csrf_field() }} 
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                                <th>stt</th>
                                <th>Tên khách hàng</th>
                                <th>email</th>
                                <th>dienthoai</th>
                                <th>diachi</th>
                                <th>Ngày mua hàng</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                </thead>
            
                <tbody>
                <?php $stt = 0; ?>
                @foreach($donhang as $dh)
                
                     
                            <?php $stt++ ;?>
                    <tr>
                        <td>{!! $stt !!}</td>
                        <td>{{$dh->khachhang->HoTen}}</td>
                        <td>{{$dh->khachhang->Email}}</td>
                        <td>{{number_format($dh->TongTien)}}</td>
                        <td>{{$dh->khachhang->DiaChi}}</td>
                        <td>{!! $dh->created_at !!}</td>
                        <td>{!! $dh->TrangThai !!}</td>
                        <td>cai nay l link cua xem chitiet, ti tao trang</td>
                        
                        
                    </tr>
                    
                @endforeach
                </tbody>
                
                <tfoot>
                    <tr>
                        <th colspan="5">Total</th>
                        <th colspan="2">f</th>
                    
                    </tr>
                </tfoot>
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
@endsection