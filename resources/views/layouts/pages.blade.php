
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beauty Salon </title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Beauty Salon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->
    <!-- Style Sheets -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Bootstrap-CSS -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!--// Font-Awesome-CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" property="" />
    <!--// Owl-Carousel-CSS -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/style2.css" rel="stylesheet" type="text/css" media="all" />

    <link href="/css/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="all" />

    <!-- //Style Sheets -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <!--// web-fonts -->
</head>

<body>
<!-- banner -->
<div class="banner jarallax" id="home">
    <header>
        <div class="container">
            <div class="header-bottom-agileits">
                <div class="w3-logo">
                    <h1><a href="index.html">Beauty Salon</a></h1>
                </div>
                <div class="address">
                    <p>4th block,New York City.</p>
                    <p class="para-y"><a href="{{route('about')}}">Get more info</a></p>
                </div>
                <div class="nav-contact-w3ls ">
                    <p>+0 111 222 333<span class="fa fa-phone" aria-hidden="true"></span></p>
                    <p class="para-y"><a href="mailto:info@example.com">info@example.com</a><span class="fa fa-envelope-o" aria-hidden="true"></span></p>
                </div>
                <div class="login">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!-- navigation -->
    <div class="nav-bg">
        <div class="container">
            <nav class="navbar navbar-default shift">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="/">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('service')}}">Services</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Pages<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="icons.html">Web Icons</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->

            </nav>
        </div>
    </div>
    <!-- //navigation -->
    <div class="container">
        <!-- header -->
        <!-- //header -->
        <div class="agileits_w3layouts_banner_info">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="banner-text-w3-agileits">
                                <h5>Experienced hair stylists </h5>
                                <h2>Enjoy Professional Beauty Services!</h2>
                                <p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
                                <div class="botton">
                                    <a href="contact.html">Contact Now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-text-w3-agileits">
                                <h5>The best and fastest service</h5>
                                <h2>Are You Planning to Pamper Yourself?</h2>
                                <p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
                                <div class="botton">
                                    <a href="contact.html">Contact Now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-text-w3-agileits">
                                <h5>Experienced hair stylists </h5>
                                <h2>Enjoy Professional Beauty Services!</h2>
                                <p>Providing expert skin care advice & beauty services using natural products to cater for any skin.</p>
                                <div class="botton">
                                    <a href="contact.html">Contact Now</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //banner -->



<!-- Modal1 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Beauty Salon</h4>
                <img src="/images/11.jpg" alt=" " class="img-responsive">
                <h5>Neque porro quisquam est qui dolorem </h5>
                <p>Ut in ligula sollicitudin, auctor elit vel, mollis tortor. Nullam id magna in eros mollis porttitor vel et eros.Phasellus
                    sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros
                    tortor, ultrices in lectus quis, aliquet commodo lectus.Donec eros tortor, ultrices in lectus quis, aliquet commodo
                    lectus.</p>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->


@yield('content')


<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="f-bg-w3l">
            <div class="col-md-4 w3layouts_footer_grid">
                <h2>Contact <span>Information</span></h2>
                <ul class="con_inner_text">
                    <li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, <label> New York City.</label></li>
                    <li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
                    <li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
                </ul>

                <ul class="social_agileinfo">
                    <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 w3layouts_footer_grid">
                <h2>Subscribe <span>Newsletter</span></h2>
                <p>By subscribing to our mailing list you will always get latest news from us.</p>
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                    <button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                    <div class="clearfix"> </div>
                </form>
            </div>
            <div class="col-md-4 w3layouts_footer_grid">
                <h3>Recent <span>Works</span></h3>
                <ul class="con_inner_text midimg">
                    <li><a href="#"><img src="/images/p2.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="/images/p3.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="/images/p4.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="/images/p5.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="/images/p6.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="/images/p7.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="/images/p8.jpg" alt="" class="img-responsive" /></a></li>
                    <li><a href="#"><img src="/images/p9.jpg" alt="" class="img-responsive" /></a></li>
                </ul>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <p class="copyright">© 2017 Beauty Salon. All Rights Reserved. </p>
</div>
<!-- //footer -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type='text/javascript' src='/js/jquery-2.2.3.min.js'></script>
<!-- start-smoth-scrolling -->
<script src="/js/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- flexSlider -->
<script  src="/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->

<!-- Owl-Carousel-JavaScript -->
<script src="/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 2,
            lazyLoad: true,
            autoPlay: false,
            pagination: true,
        });
    });
</script>
<!-- //Owl-Carousel-JavaScript -->
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->

<!-- stats -->
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!--js for bootstrap working-->
<script src="/js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<!--js for page-->
<script src="/js/sourse.js"></script>
<!-- //for page working -->
</body>
</html>