<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="admin_asset/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>
        <base href="{{ asset('') }}">
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="admin_asset/plugins/morris/morris.css">

        <!-- App css -->
        <link href="admin_asset/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="admin_asset/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="admin_asset/css/style.css" rel="stylesheet" type="text/css" />

        <script src="admin_asset/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('admin.layout.header')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.layout.menu')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">


                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 m-b-30">Sản Phẩm</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                               data-bgColor="#F9B9B9" value="{{count($sanpham)}}"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                        </div>

                                        <div class="widget-detail-1">
                                            <h2 class="p-t-10 mb-0"> {{count($sanpham)}} </h2>
                                            <p class="text-muted m-b-10"><a href="#">
                                                <div class="panel-footer">
                                                    <span class="pull-left"><a href="admin/sanpham/danhsach">Xem chi tiết</a></span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        
                                       
                                    </div>

                                    <h4 class="header-title mt-0 m-b-30">Số Tiền</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2">
                                            <span class="badge badge-success badge-pill pull-left m-t-20">42% <i class="mdi mdi-trending-up"></i> </span>
                                            <h2 class="mb-0"> {{number_format($tongtien)}} </h2>
                                            <p class="text-muted m-b-25"> <a href="#">
                                                <div class="panel-footer">
                                                    <span class="pull-left"><a href="admin/donhang/danhsach">Xem chi tiết</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a></p>
                                        </div>
                                        <div class="progress progress-bar-success-alt progress-sm mb-0">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 50%;">
                                                <span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                       
                                    </div>

                                    <h4 class="header-title mt-0 m-b-30">Đơn Hàng</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                               data-bgColor="#FFE6BA" value="40"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                        </div>
                                        <div class="widget-detail-1">
                                            <h2 class="p-t-10 mb-0"> {{count($donhang)}} </h2>
                                            <p class="text-muted m-b-10"><a href="#">
                                                <div class="panel-footer">
                                                    <span class="pull-left"><a href="admin/donhang/danhsach">Xem chi tiết</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                           

                        </div>
                      

                </div> <!-- content -->

                <footer class="footer text-right">
                    2020 - 2021 © Admin  LuongThaiSang@gmail.com
                </footer>

            </div>

            <!-- ============================================================== -->
            @yield('content')


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
         
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="admin_asset/js/jquery.min.js"></script>
        <script src="admin_asset/js/popper.min.js"></script>
        <script src="admin_asset/js/bootstrap.min.js"></script>
        <script src="admin_asset/js/detect.js"></script>
        <script src="admin_asset/js/fastclick.js"></script>
        <script src="admin_asset/js/jquery.blockUI.js"></script>
        <script src="admin_asset/js/waves.js"></script>
        <script src="admin_asset/js/jquery.nicescroll.js"></script>
        <script src="admin_asset/js/jquery.slimscroll.js"></script>
        <script src="admin_asset/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="admin_asset/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
		<script src="admin_asset/plugins/morris/morris.min.js"></script>
		<script src="admin_asset/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="admin_asset/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="admin_asset/js/jquery.core.js"></script>
        <script src="admin_asset/js/jquery.app.js"></script>

        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
    @yield('script')
    </body>
</html>