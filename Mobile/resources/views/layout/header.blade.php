<div id="top">

                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            
                        
                        <form  action ="timkiem">
                            <input type="hidden" name="_token" value="{{csrf_token()}}";>
                            <input type="search" class="searchinput" name="tukhoa" value="" style="color:#000000" placeholder="Search..."/>
                            <input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    @lang('lang.languge')
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('lang/vi')}}">Tiếng Việt</a></li>
                                    <li><a href="{{url('lang/en')}}">English</a></li>
                                </ul>
                            </div>
                            
                        </form>
        
                       
                            
                          
              
                           
                        </div>

                        


                        <div class="col-xs-7">
                            <div class="social">
                                <a href="" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>



                            @if(Auth::guard('KhachHang')->check())
                            <div class="login">
                                <a href="thongtinkhachhang"> <span class="hidden-xs text-uppercase">@lang('lang.customer')</span></a>

                                <a href="" ><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">{{Auth::guard('KhachHang')->user()->HoTen}}</span></a>
                                
                                <a href="logout"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">@lang('lang.logout')</span></a>
                            </div>
                            @else
                            <div class="login">
                            
                            <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">@lang('lang.login')</span></a>
                            <a href="dangky"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">@lang('lang.signup')</span></a>
                            </div>


                            @endif
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Đăng Nhập</h4>
                    </div>
                    <div class="modal-body">
                        <form action="dangnhap" method="post">
                        {{ csrf_field() }} 
                            <div class="form-group">
                                <input  type="text" class="form-control" id="username" name="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password"  name="password" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in" name="dangnhap"></i> Đăng Nhập</button>
                            </p>
                            <a href=" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        </form>

                        <p class="text-center text-muted">Bạn chưa đăng ký ?</p>
                        <p class="text-center text-muted"><a href="dangky"><strong>Đăng Ký Ngay</strong></a></p>

                    </div>
                </div>
            </div>
        </div>
