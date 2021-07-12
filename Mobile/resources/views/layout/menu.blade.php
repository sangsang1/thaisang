<style>
    .product  {height:400px}
 


</style>

<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

<div class="navbar navbar-default yamm" role="navigation" id="navbar">

    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.html">
                <img src="img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                <img src="img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                    <a href="#" >@lang('lang.home')</b></a>
                    
                </li>
                @foreach($theloai as $tl)
                <li class="dropdown use-yamm yamm-fw">
                    <a href="danhmucsanpham/{{$tl->id}}/{{$tl->Ten_KhongDau}}.html" class="dropdown-toggle" >{{$tl->Ten}}</b></a>
                   
                </li>

                
                @endforeach
           

               
  
      
  
             
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<span class="minicart-icon">
																<i class="fa fa-shopping-cart cart-icon"></i>
																<span style="color:red">{{Cart::count()}}</span>
															</span>
                    </a>
                        <ul class="dropdown-menu">
                       <!----------------------------------------- -->
                       <?php  $sum=0; ?>
                       <span style="color:#000000;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><div class="containerr">
                        <div class="shopping-cart">
                            <div class="shopping-cart-header">
                            <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">{{Cart::count()}}</span>
                            
                            </div> <!--end shopping-cart-header -->
                        
                            <ul class="shopping-cart-items">
                        
                            @if(Cart::count() <= 0)
                            <div class="minicart-header no-items show">
                                            Bạn chưa có sản phẩm nào.
                                        </div>
                                    @else
                                        @php
                                            $carts = \Cart::content();
                                        @endphp
                                        @foreach($carts as $cart)
                            <li class="clearfix">
                                <img width="100px" height='100px' src="images/sanpham/{{$cart->options->hinh}}" alt="item1" />
                                <span class="item-name">{{$cart->name}}</span>
                                <span class="item-price">{{number_format($cart->qty*$cart->price)}}</span><br>
                                <span class="item-quantity">Số lượng:{{$cart->qty}}</span>
                                <?php $sum+=$cart->qty*$cart->price; ?>
                            </li>
                            @endforeach
                                    @endif


                            </ul>
                            <h4>Tổng:{{number_format($sum)}}</h4>
                            <a href="giohang" class="button">Giỏ Hàng</a>
                        </div> <!--end shopping-cart -->
                        </div> <!--end container --></span></span></span>






                        <!-- ------------------------------------------------>
                        </ul>
                </li>

  
              
                                        
                                  
                                         

            </ul>

        </div>
        <!--/.nav-collapse -->



        
        <!--/.nav-collapse -->

    </div>


</div>
<!-- /#navbar -->

</div>


<style>
    <span style="color:#000000;"><span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
*, *:before, *:after {
  box-sizing: border-box;
}
  
body {
  font: 14px/22px "Lato", Arial, sans-serif;
  background: #0000;
}
  
.lighter-text {
  color: #ABB0BE;
}
  
.main-color-text {
  color: #6394F8;
}
  
nav {
  padding: 20px 0 40px 0;
  background: #F8F8F8;
  font-size: 16px;
}
nav .navbar-left {
  float: left;
}
nav .navbar-right {
  float: right;
}
nav ul li {
  display: inline;
  padding-left: 10px;
}
nav ul li a {
  color: #777777;
  text-decoration: none;
}
nav ul li a:hover {
  color: black;
}
  
.containerr {
  margin: auto;
  width: 100%;
}
  
.badge {
  background-color: #6394F8;
  border-radius: 10px;
  color: white;
  display: inline-block;
  font-size: 12px;
  line-height: 1;
  padding: 3px 7px;
  text-align: center;
  vertical-align: middle;
  white-space: nowrap;
}
  
.shopping-cart {
  margin: 20px 0;
  float: right;
  background: white;
  width: 320px;
  position: relative;
  border-radius: 3px;
  padding: 20px;
}
.shopping-cart .shopping-cart-header {
  border-bottom: 1px solid #E8E8E8;
  padding-bottom: 15px;
}
.shopping-cart .shopping-cart-header .shopping-cart-total {
  float: right;
}
.shopping-cart .shopping-cart-items {
  padding-top: 20px;
}
.shopping-cart .shopping-cart-items li {
  margin-bottom: 18px;
}
.shopping-cart .shopping-cart-items img {
  float: left;
  margin-right: 12px;
}
.shopping-cart .shopping-cart-items .item-name {
  display: block;
  padding-top: 10px;
  font-size: 16px;
}
.shopping-cart .shopping-cart-items .item-price {
  color: #6394F8;
  margin-right: 8px;
}
.shopping-cart .shopping-cart-items .item-quantity {
  color: #ABB0BE;
}
  
.shopping-cart:after {
  bottom: 100%;
  left: 89%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: white;
  border-width: 8px;
  margin-left: -8px;
}
  
.cart-icon {
  color: #515783;
  font-size: 24px;
  margin-right: 7px;
  float: left;
}
  
.button {
  background: #0099aa;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  display: block;
  border-radius: 3px;
  font-size: 16px;
  margin: 25px 0 15px 0;
}
.button:hover {
  background: #729ef9;
}
  
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}</span></span></span>
</style>
