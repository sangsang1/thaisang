<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <base href="{{ asset('') }}">
        <link rel="shortcut icon" href="admin_asset/images/favicon.ico">

        <title>Adminto </title>

        <!-- App css -->
        <link href="admin_asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_asset/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin_asset/css/style.css" rel="stylesheet" type="text/css" />

        <script src="admin_asset/js/modernizr.min.js"></script>

    </head>

    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="index.html" class="logo"><span>Admin<span>to</span></span></a>
                <h5 class="text-muted m-t-0 font-600">Thống Kê Nhanh</h5>
            </div>


            <div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Đăng Nhập</h4>
                </div>
                <div class="p-20">
                    
                        @if(count($errors)>0)
                          <div class="alert alert-danger">
                              @foreach($errors->all() as $err)
                                  {{$err}}
                                  <br>
                              @endforeach
                           </div>   
                      @endif
                      <br>
                      @if(session('ThongBao'))
                          <div class="btn btn-danger">
                              {{session('ThongBao')}}
                          </div>
                      @endif
                      <div class="classfix"></div>
                      <br>


                    <form class="form-horizontal m-t-20" action="admin/dangnhap" method="post">
                     
                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                    <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <a href="{{ url('admin/redirect/facebook') }}" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Nhớ Đăng Nhập
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Đăng Nhập</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Quên mật khẩu?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end card-box-->

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Bạn chưa có tài khoản? <a href="page-register.html" class="text-primary m-l-5"><b>Đăng Ký</b></a></p>
                </div>
            </div>
            
        </div>
        <!-- end wrapper page -->



        <!-- jQuery  -->
        <script src="admin_asset/assets/js/jquery.min.js"></script>
        <script src="admin_asset/assets/js/popper.min.js"></script>
        <script src="admin_asset/assets/js/bootstrap.min.js"></script>
        <script src="admin_asset/assets/js/detect.js"></script>
        <script src="admin_asset/assets/js/fastclick.js"></script>
        <script src="admin_asset/assets/js/jquery.blockUI.js"></script>
        <script src="admin_asset/assets/js/waves.js"></script>
        <script src="admin_asset/assets/js/jquery.nicescroll.js"></script>
        <script src="admin_asset/assets/js/jquery.slimscroll.js"></script>
        <script src="admin_asset/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="admin_asset/assets/js/jquery.core.js"></script>
        <script src="admin_asset/assets/js/jquery.app.js"></script>
    
    </body>
</html>