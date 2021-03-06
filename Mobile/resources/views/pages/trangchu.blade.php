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
                                <p>Ch???t l?????ng m??y ch??nh h??ng.<br/>S???n ph???m ????ng ti??u chu???n v???i ch???t l?????ng t???t nh???t.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-print"></i>
                                </div>
                                <h3>@lang('lang.covering')</h3>
                                <p>Gi?? t???t nh???t th??? tr?????ng. <br/> Ho??n ti???n n???u c?? n??i n??o gi?? th???p h??n.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>@lang('lang.guarantee')</h3>
                                <p>T???n t??m, Uy t??n, Ti???t ki???m. <br/>M???t ?????i m???t trong 15 ng??y n???u x???y ra l???i do NSX.</p>
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
                                <p>Giao h??ng trong ph???m vi to??n qu???c. <br/>Th???i gian giao h??ng t??? 1 ?????n 4 ng??y.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <h3>@lang('lang.pay')</h3>
                                <p>Tr??? g??p v???i l??i su???t ??u ????i. <br/>Th??? t???c ????n gi???n, nhanh ch??ng, thu???n ti???n.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <h3>@lang('lang.technicalassistance')</h3>
                                <p>?????i ng?? k??? thu???t chuy??n nghi???p, t???m t??m.<br/> Ph???c v??? kh??ch h??ng m???i to??n th???i gian 24/7</p>
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
                            <h2>S???n Ph???m M???i</h2>
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
                                    <a href="themgiohang/{{$sp->id}}">Th??m gi??? h??ng</a>
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
                        <h3 class="text-uppercase">B???N C?? MU???N TR???I NGHI???M D??NG TH??? ??I???N THO???I M???I?</h3>
                        <p class="lead">Ch??ng t??i ch??? ?????i b???n,ch??o m???ng ?????n v???i c???a h??ng v?? th??? nghi???m c??c s???n ph???m m???i nh???t ho??n to??n mi???n ph?? trong 7 ng??y</p>
                        <p class="text-center">
                            <a href="index2.html" class="btn btn-template-transparent-black btn-lg">Li??n h??? v???i ch??ng t??i</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Th??ng Tin T??? C???a H??ng</h2>
                    </div>

                    <p class="lead">C??c tin t???c c??ng ngh???, h?????ng d???n s??? d???ng, gi???i thi???u ??i???n tho???i, tin t???c khuy???n m??i t??? h??? th???ng c???a h??ng c???a ch??ng t??i s??? ???????c publish th?????ng xuy??n v??o ????y ????? th??ng tin v?? h??? tr??? qu?? vi
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
												<i class="fa fa-clock-o"> Th???i Gian:</i>{{date( 'd/m/Y', strtotime($tt->created_at) )}}
											</time>
									</span><br>
                                    <span >
											<i class="fa fa-user"></i>Ng?????i ????ng:{{$tt->quantri->HoTen}}<br>
                                            
									</span>
                                       
                                    
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main"> ?????c Th??m</a>
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