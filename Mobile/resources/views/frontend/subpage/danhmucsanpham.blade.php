@extends('frontend.index')
@section('content')

<style>
    .product  {height:400px}
    .product .image .img-responsive {margin:auto;margin-top:20px;height:180px}
    .product .text h3 {height:32px; overflow:hidden; margin:15px;}


</style>


<div id="content">
            <div class="container">

                <div class="row">


                    <!-- *** LEFT COLUMN ***
			_________________________________________________________ -->

                    
                    <!-- /.col-md-3 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			_________________________________________________________ -->

            <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>{{$theloai1->Ten}}</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="#">Trang Chủ</a>
                            </li>
                            <li>{{$theloai1->Ten}}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
               

                <div class="row products">
                @foreach($sanpham as $sp)
                    <div class="col-md-3 col-sm-4">
                    
                        <div class="product">
                            <div class="image">
                                <a href="chitietsanpham/{{$sp->id}}/{{$sp->Ten_KhongDau}}.html">
                                    <img src="images/sanpham/{{$sp->Hinh}}" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="text">
                                <h3><a href="shop-detail.html">{{$sp->Ten}}</a></h3>
                                <p class="price">{{formatPrice($sp->Gia)}}</p>
                                <div class="add-to-cart text-center">
                                    <a href="themgiohang/{{$sp->id}}">Thêm giỏ hàng</a>
                                 </div>  
                                <p class="buttons">
                                    <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>

                 
                        <!-- /.product -->
                    </div>
                    @endforeach
               

             

                

                
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.products -->

               
                <!-- /.col-sm-12 -->

            </div>
            <!-- /.container -->
        </div>
                    <!-- /.col-md-9 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>

            </div>
            <!-- /.container -->
        </div>
@endsection