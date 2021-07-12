<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="admin_asset/images/users/avatar-1.jpg" alt="user-img"  class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        @if(Auth::guard('QuanTri')->check())
                        <h5><a href="">{{Auth::guard('QuanTri')->user()->HoTen}}</a> </h5>
                        @endif
                       
                        <ul class="list-inline">
                           
                            <li class="list-inline-item">
                                <a href="admin/logout" class="text-custom">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                      
                    </div>



                   
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="admin/trangchu" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            

                         

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span> Thể Loại </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/theloai/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/theloai/them">Thêm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span> Thuộc Tính </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/thuoctinh/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/thuoctinh/them">Thêm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span> Sản Phẩm </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/sanpham/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/sanpham/them">Thêm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span> Ảnh Slide Sản Phẩm </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/anhslidesanpham/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/anhslidesanpham/them">Thêm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span> Tin Tức </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/tintuc/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/tintuc/them">Thêm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span> Banner </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/banner/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/banner/them">Thêm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span> Khuyến Mãi </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/khuyenmai/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/khuyenmai/them">Thêm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="admin/donhang/danhsach" class="waves-effect"><i class="mdi mdi-texture"></i><span> Đơn Hàng </span> </a>
                               
                            </li>

                            <li class="has_sub">
                                <a href="admin/binhluan/danhsach" class="waves-effect"><i class="mdi mdi-texture"></i><span> Bình Luận </span> </a>
                              
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span> Quản Trị </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="admin/quantri/danhsach">Danh Sách</a></li>
                                    <li><a href="admin/quantri/them">Thêm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="admin/khachhang/danhsach" class="waves-effect"><i class="mdi mdi-texture"></i><span>Khách Hàng </span> </a>
                              
                            </li>

                        

                         

                        
                            

                        

                            


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>