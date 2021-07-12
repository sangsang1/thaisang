@extends('frontend.index')
@section('content')

<style>
#mainImage img {height:500px; }
#productMain #thumbs img {height:80px}
#productMain #thumbs div {text-align:center}
#productMain #thumbs a {border:none;}

</style>
<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Trang Chủ</a>
                            </li>
                            <li><a href="shop-category.html">{{$sanpham->theloai->Ten}}</a>
                            </li>
                            
                            <li>{{$sanpham->Ten}}</li>
                       
                        
                            </li>
                            
                            
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

                    <div class="col-md-9">

                       

                        <div class="row" id="productMain">
                            
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="images/sanpham/{{$sanpham->Hinh}}" alt="" class="img-responsive">
                                </div>

                               
                                <!-- /.ribbon -->

                            </div>
                            <div class="col-sm-6">
                                <div class="box">

                                    <form>
                                        <div class="sizes">

                                            <h3>{{$sanpham->Ten}}</h3>

                                            

                                        </div>

                                        <p class="price" style="color:red">Giá:{{formatPrice($sanpham->Gia)}}</p>
                                        <h4>Cấu Hình Chi Tiết</h4>
                                        <li> {!!$sanpham->CauHinh!!}</li>
                                        
                                        <p class="text-center">
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> <a href="themgiohang/{{$sanpham->id}}">MUA NGAY</a></button>
                                            <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                                            </button>
                                        </p>

                                    </form>
                                </div>

                                <div class="row" id="thumbs">
                                    <div class="col-xs-4">
                                        <a href="images/sanpham/{{$sanpham->Hinh}}" class="thumb">
                                            <img src="images/sanpham/{{$sanpham->Hinh}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    @foreach($sanpham->anhslidesp as $anhsl)
                                    <div class="col-xs-4">
                                        <a href="images/anhslidesp/{{$anhsl->AnhDuoi}}" class="thumb">
                                            <img src="images/anhslidesp/{{$anhsl->AnhDuoi}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    @endforeach
                                    @foreach($sanpham->anhslidesp as $anhsl)
                                    <div class="col-xs-4">
                                        <a href="images/anhslidesp/{{$anhsl->AnhTren}}" class="thumb">
                                            <img src="images/anhslidesp/{{$anhsl->AnhTren}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>


                        <div class="box" id="details">
                            <p>
                                <h4>{!!$sanpham->TomTat!!} </h4>
                                       
                              
                                <ul>
                                    <li>{!!$sanpham->NoiDung!!}</li>
                                
                                </ul>
                                
                              

                                
                        </div>
<!-- /.Bình luận -->
<div class="content-inner">
                <div class="inner max-width-83 padding-top-33">
                    
                        <p class="ketqua"></p>
                               

                        @foreach($sanpham->binhluan as $bl)
                        <div id="comments" >
                         


                            <div class="row comment">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <img src="images/image/doremon.png" class="img-responsive img-circle" alt="">
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">{{$bl->khachhang->HoTen}}</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i>{{$bl->created_at}}</p>
                                    <p>{{$bl->NoiDung}}</p>
                                    <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.comment -->


                         
                            
                        </div>

                        @endforeach
                        {{-- ket thuc binh luan --}}
                       
                    </li><!-- /.review-list -->
                    @if(Auth::guard('KhachHang')->check())
                    
                    <div id="comment-form">

                    <h4 class="text-uppercase">Viết Bình Luận</h4>

                    <form class="comment-form review-form" id="commentform" method="get">
                           {{ csrf_field() }}
                           <input type="hidden" id="idsp" value="{{$sanpham->id}}">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="comment">Nội Dung <span class="required">*</span>
                                        </label>
                                        <textarea class="form-control" rows="4" id="noidung"  name="noidung" required ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    
                                    <input type="button" id="binhluan" value="Bình Luận">
                                </div>
                            </div>


                        </form>

                    </div>
             @endif     
                                                  
         
         </div>      

     </div>
<!-- /.comment-respond -->
                        <div class="row">
                            
                              
                                    <h3>Sản Phẩm Liên Quan</h3>
                              
                            @foreach($sanphamlienquan as $splq)
                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="chitietsanpham/{{$splq->id}}/{{$splq->Ten_KhongDau}}.html">
                                            <img src="images/sanpham/{{$splq->Hinh}}" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>{{$splq->Ten}}</h3>
                                        <p class="price">{{formatPrice($splq->Gia)}}</p>

                                    </div>
                                    <div class="add-to-cart text-center">
                                        <a href="themgiohang/{{$sanpham->id}}">THÊM GIỎ HÀNG</a>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>
                            @endforeach
                           

                           

                        </div>

                        <div class="row">
                        
                                    <h3>Products viewed recently</h3>
                            


                            <div class="col-md-3 col-sm-6">
                                <div class="product">
                                    <div class="image">
                                        <a href="#">
                                            <img src="img/product3.jpg" alt="" class="img-responsive image1">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h3>Fur coat</h3>
                                        <p class="price">$143</p>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>

                          


                       

                        </div>

                    </div>
                    <!-- /.col-md-9 -->


                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
		  _________________________________________________________ -->

                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
               

                   

                        <!-- *** MENUS AND FILTERS END *** -->

                        
                        <!-- /.banner -->
                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>

        @endsection
        @section('script')
<script>
    $(document).ready(function(){
        $("#binhluan").click(function(){
            var idsp=$("#idsp").val();
            var noidung=$("#noidung").val();
            if(noidung==" "){
                alert('Bạn chưa nhập nội dung mà!!!');
            }
            $.get("binhluan/"+idsp+"/"+noidung,function(data){
            $(".ketqua").prepend(data);
        });
    });
});
</script>
@endsection