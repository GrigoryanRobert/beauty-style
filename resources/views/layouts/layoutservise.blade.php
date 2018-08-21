<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <title>Beauty Styles</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slicebox.css') }}" />
    <!-- for banner-->
    <!-- font-awesome-icons -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- //custom-theme files-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //custom-theme files-->
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">
    <!-- //fonts -->
</head>
<body>
<div id="app">

    <!-- banner -->
    <div class="banner-w3l" id="home">
        <div class="header-main-agile">
            <div class="header-right-w3l">
                <div class="container">
                    <ul>
                        <li>
                            <span class="fa fa-home" aria-hidden="true"></span> 1PO Box 8568954 Melbourne
                        </li>
                        <li>
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <a href="mailto:info@example.com">info@mail.com</a>
                        </li>
                        <li>
                            <span class="fa fa-phone" aria-hidden="true"></span> +0(15) 315 6666
                        </li>

                        @if (Auth::guest())
                            <a id="myBtn1" class="scroll">Login</a>
                            <a id="myBtn2" class="scroll">Register</a>
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
                    </ul>
                </div>
            </div>
            <!-- navigation -->
            <div class="nav-links">
                <div class="container">
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <h1>
                                    <span>Be</span>auty
                                    <span>St</span>yle
                                </h1>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav link-effect">
                                <li class="active">
                                    <a href="{{url('/')}}">Home</a>
                                </li>

                                <li>
                                    <a href="#services" class="scroll">Services</a>
                                </li>

                                <li>
                                    <a href="#team" class="scroll">Team</a>
                                </li>

                                <li>
                                    <a href="#contact" class="scroll">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- /navigation -->
        </div>
        <div class="wrapper">
            <ul id="sb-slider" class="sb-slider">
                <li>
                    <a href="#">
                        <img src="images/1.jpg" alt="image1" />
                    </a>
                    <div class="sb-description">
                        <h3>Be<span>au</span>ty St<span>yl</span>e</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.Lorem ipsum dolor sit amet.</p>
                        <i></i>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="images/2.jpg" alt="image2" />
                    </a>
                    <div class="sb-description">
                        <h3>Be<span>au</span>ty St<span>yl</span>e</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.Lorem ipsum dolor sit amet.</p>
                        <i></i>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="images/3.jpg" alt="image1" />
                    </a>
                    <div class="sb-description">
                        <h3>Be<span>au</span>ty St<span>yl</span>e</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.Lorem ipsum dolor sit amet.</p>
                        <i></i>
                    </div>
                </li>
            </ul>
            <div id="nav-arrows" class="nav-arrows">
                <a href="#">Next</a>
                <a href="#">Previous</a>
            </div>

        </div>
        <!-- /wrapper -->
    </div>
    <!-- //banner -->



@yield('content')

<!-- footer -->
    <footer class="servisefooter">
        <div class="footer-bottom-agile">
            <div class="container">
                <div class="footer-bottom-agile-grids">
                    <div class="col-md-4 footer-logo">
                        <h2>
                            <span>Be</span>auty
                            <span>St</span>yle</h2>
                        <p>Suspendisse potenti. Pellentesque pulvinar tellus at est ullamcorper, at elementum nibh laoreet. Nunc id diam in nulla
                            sollicitudin auctor.</p>
                        <div class="footer-social-grids-w3l">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-rss"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-vk"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-4 footer-bottom-agile-left">
                        <h5>Our Events</h5>
                        <div class="footer-img-grids">
                            <div class="footer-img">
                                <img src="images/f4.jpg" alt="" />
                            </div>
                            <div class="footer-img-info">
                                <p>Suspese potenti. Pelleue pulvinar tellus at est.</p>
                                <span>20 Nov 2017</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="footer-img-grids grid-foot-2">
                            <div class="footer-img">
                                <img src="images/f6.jpg" alt="" />
                            </div>
                            <div class="footer-img-info">
                                <p>Suspese potenti. Pelleue pulvinar tellus at est.</p>
                                <span>24 Nov 2017</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-4 mk-footer one tweet footer-bottom-agile-right">
                        <h5>Tweets</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
                                    <i>http//example.com</i>
                                </a>
                                <span>About 15 minutes ago
									<span>
									</span>
								</span>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="copyright-agile">
            <div class="container">
                <p>© 2018 Beauty Style. All rights reserved. </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

</div>

<!-- Scripts -->
<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- for bootstrap working -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->

<script src="{{ asset('js/sourse.js') }}"></script>
<!-- banner slider js -->
<script type="text/javascript" src="{{ asset('js/modernizr.custom.46884.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slicebox.js') }}"></script>
<script type="text/javascript">
    $(function () {

        var Page = (function () {

            var $navArrows = $('#nav-arrows').hide(),
                $shadow = $('#shadow').hide(),
                slicebox = $('#sb-slider').slicebox({
                    onReady: function () {

                        $navArrows.show();
                        $shadow.show();

                    },
                    orientation: 'r',
                    cuboidsRandom: true
                }),

                init = function () {

                    initEvents();

                },
                initEvents = function () {

                    // add navigation events
                    $navArrows.children(':first').on('click', function () {

                        slicebox.next();
                        return false;

                    });

                    $navArrows.children(':last').on('click', function () {

                        slicebox.previous();
                        return false;

                    });

                };

            return {
                init: init
            };

        })();

        Page.init();

    });
</script>
<!-- //banner slider js -->

<!-- //here starts scrolling icon -->
<script type="text/javascript" src="{{ asset('js/SmoothScroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>


</body>
</html>
