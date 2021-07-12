

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mobile Shop</title>
    <base href="{{asset('')}}">
    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    @yield('css')
</head>

<body>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
@include("layout.header")

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

    @include("layout.menu")

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        
        

        <!-- *** LOGIN MODAL END *** -->

        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            

       

       
        <!-- /.bar -->

       
        @yield('content')
        
        <!-- /.bar -->

        <section class="bar background-gray no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Đối Tác Của Chúng Tôi</h2>
                        </div>

                        <ul class="owl-carousel customers">
                            <li class="item">
                                <img src="img/customer-1.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-2.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-3.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-4.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-5.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/customer-6.png" alt="" class="img-responsive">
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->
                    </div>

                </div>
            </div>
        </section>


        <!-- *** GET IT ***
_________________________________________________________ -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Do you want cool website like this one?</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="btn btn-template-transparent-primary">Buy this template now</a>
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

        @include('layout.footer')
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2021. Lương Thái Sang</p>
                   

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

<!-- paypal-->

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    var usd = document.getElementById("vnd_to_usd").value;
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AT0IK3OHsrIMBELDXVE8PaTGn_p4I-oU6Si12iR8l3oEoJu_mGAgJiBJkxMl41tQ0UOZY1Dt1I_3i66z',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: `${usd}`,
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Cảm ơn bạn đã mua hàng của chúng tôi');
      });
    }
  }, '#paypal-button');

</script>








<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "108146341507226");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    @yield('script')


</body>

</html>