@extends('frontend.index')
@section('content')
<style>
    .product  {height:400px}
    .product .image .img-responsive {margin:auto;margin-top:20px;height:180px}
    .product .text h3 {height:32px; overflow:hidden; margin:15px;}

   
    .row .image .img-responsive {margin:auto;margin-top:20px;height:180px}
    .row .text h3 {height:32px; overflow:hidden; margin:15px;}
</style>
<div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                    @foreach($banner as $bn)
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <p>
                                        <img src="img/logo.png" alt="">
                                    </p>
                                    <h1>Iphone</h1>
                                    <p>{{$bn->NoiDung}}
                                        <br />Portfolio. Blog. E-commerce.</p>
                                </div>
                                <div class="col-sm-5">
                                    <img class="img-responsive" src="images/banner/{{$bn->Hinh}}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach 
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>
<section class="bar background-white">
            <div class="container">
                <div class="col-md-12">


                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <h3>@lang('lang.commitment')</h3>
                                <p>Chất lượng máy chính hãng.<br/>Sản phẩm đúng tiêu chuẩn với chất lượng tốt nhất.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-print"></i>
                                </div>
                                <h3>@lang('lang.covering')</h3>
                                <p>Giá tốt nhất thị trường. <br/> Hoàn tiền nếu có nơi nào giá thấp hơn.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>@lang('lang.guarantee')</h3>
                                <p>Tận tâm, Uy tín, Tiết kiệm. <br/>Một đổi một trong 15 ngày nếu xảy ra lỗi do NSX.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <h3>@lang('lang.delivery')</h3>
                                <p>Giao hàng trong phạm vi toàn quốc. <br/>Thời gian giao hàng từ 1 đến 4 ngày.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <h3>@lang('lang.pay')</h3>
                                <p>Trả góp với lãi suất ưu đãi. <br/>Thủ tục đơn giản, nhanh chóng, thuận tiện.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <h3>@lang('lang.technicalassistance')</h3>
                                <p>Đội ngũ kỹ thuật chuyên nghiệp, tậm tâm.<br/> Phục vụ khách hàng mọi toàn thời gian 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Sản Phẩm Mới</h2>
                        </div>

                      
                        <!-- *** TESTIMONIALS CAROUSEL ***
 _________________________________________________________ -->
 <div class="row">

                   @foreach($sanpham as $sp)
                    <div class="col-md-2 col-sm-6">
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
               
             
                   

                    </div>
                     
                        <!-- /.owl-carousel -->

                        <!-- *** TESTIMONIALS CAROUSEL END *** -->
                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                        </div>
                        <h3 class="text-uppercase">BẠN CÓ MUỐN TRẢI NGHIỆM DÙNG THỬ ĐIỆN THOẠI MỚI?</h3>
                        <p class="lead">Chúng tôi chờ đợi bạn,chào mừng đến với cửa hàng và thử nghiệm các sản phẩm mới nhất hoàn toàn miễn phí trong 7 ngày</p>
                        <p class="text-center">
                            <a href="index2.html" class="btn btn-template-transparent-black btn-lg">Liên hệ với chúng tôi</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Thông Tin Từ Cửa Hàng</h2>
                    </div>

                    <p class="lead">Các tin tức công nghệ, hướng dẫn sử dụng, giới thiệu điện thoại, tin tức khuyến mãi từ hệ thống cửa hàng của chúng tôi sẽ được publish thường xuyên vào đây để thông tin và hỗ trợ quý vi
                    </p>

                    <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

                    <div class="row">

                    @foreach($tintuc as $tt)
                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="images/tintuc/{{$tt->Hinh}}" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                   
                                </div>
                                <h4><a href="blog-post.html">{{$tt->TieuDe}}</a></h4>
                                <div class="content" style="text-align:left">
                                    
                                    <span class="meta-date">
											<time
                                                datetime="2015-08-11T06:27:49+00:00">
												<i class="fa fa-clock-o"> Thời Gian:</i>{{date( 'd/m/Y', strtotime($tt->created_at) )}}
											</time>
									</span><br>
                                    <span >
											<i class="fa fa-user"></i>Người Đăng:{{$tt->quantri->HoTen}}<br>
                                            
									</span>
                                       
                                    
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main"> Đọc Thêm</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>
                    @endforeach
             
                   

                    </div>
                    <!-- /.row -->

                    <!-- *** BLOG HOMEPAGE END *** -->

                </div>

            </div>
            <!-- /.container -->
        </section>

      
@endsection