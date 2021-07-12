<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <base href="{{ asset('') }}">
        <link rel="shortcut icon" href="admin_asset/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

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