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
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="#about" class="scroll">About Us</a>
                                </li>
                                <li>
                                    <a href="#services" class="scroll">Services</a>
                                </li>

                                <li>
                                    <a href="#news" class="scroll">News</a>
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

    <!--grids -->
    <div class="popular-wthree" id="about">
        <div class="container">
            <h3 class="tittle-w3l">About Us
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <div class="col-xs-4 popular-wthree-grid">
                <img src="images/a3.jpg" class="img-responsive" alt="" />
                <div class="popular-wthree-text">
                    <h5>Nail Services</h5>
                </div>
            </div>
            <div class="col-xs-4 popular-wthree-grid">
                <img src="images/a2.jpg" class="img-responsive" alt="" />
                <div class="popular-wthree-text">
                    <h5>Hair Styling</h5>
                </div>
            </div>
            <div class="col-xs-4 popular-wthree-grid">
                <img src="images/a1.jpg" class="img-responsive" alt="" />
                <div class="popular-wthree-text">
                    <h5>Makeup</h5>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //grids -->
    <!-- services -->
    <div class="services-agile-w3l" id="services">

        <h3 class="tittle-w3l">Oure Servises
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="services-agile-w3l-right-grids">
            <div class="col-xs-4 services-agile-w3l-right-grid grid-1">
                <div class="services-agile-w3l-icon">
                    <span class="fa fa-female" aria-hidden="true"></span>
                </div>
                <div class="services-agile-w3l-icon-info">
                    <h5>Skin</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
                </div>
            </div>
            <div class="col-xs-4 services-agile-w3l-right-grid grid-2">
                <div class="services-agile-w3l-icon">
                    <span class="fa fa-bed" aria-hidden="true"></span>
                </div>
                <div class="services-agile-w3l-icon-info">
                    <h5>Body</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
                </div>
            </div>
            <div class="col-xs-4 services-agile-w3l-right-grid grid-3">
                <div class="services-agile-w3l-icon">
                    <span class="fa fa-scissors" aria-hidden="true"></span>
                </div>
                <div class="services-agile-w3l-icon-info">
                    <h5>Hair Cut</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="services-agile-w3l-right-grids">
            <div class="col-xs-4 services-agile-w3l-right-grid grid-4">
                <div class="services-agile-w3l-icon">
                    <span class="fa fa-cubes" aria-hidden="true"></span>
                </div>
                <div class="services-agile-w3l-icon-info">
                    <h5>Nails</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
                </div>
            </div>
            <div class="col-xs-4 services-agile-w3l-right-grid grid-5">
                <div class="services-agile-w3l-icon">
                    <span class="fa fa-code-fork" aria-hidden="true"></span>
                </div>
                <div class="services-agile-w3l-icon-info">
                    <h5>Makeup</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
                </div>
            </div>
            <div class="col-xs-4 services-agile-w3l-right-grid grid-6">
                <div class="services-agile-w3l-icon">
                    <span class="fa fa-external-link" aria-hidden="true"></span>
                </div>
                <div class="services-agile-w3l-icon-info">
                    <h5>Wax</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //services -->

    <!-- login -->

    <!-- Modal -->
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>



    <!-- //login -->



    <!-- register -->

    <!-- Modal -->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <select id="role" type="text" class="form-control" name="role" required>
                                    <option value="{{0}}">User</option>

                                    <option value="{{1}}">Servis user</option>
                                </select>
                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>



    <!-- //register -->

    <!-- pricing -->
    <div class="pricing-agile">
        <div class="container">
            <h3 class="tittle-w3l">Our Pricing
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <div class="pricing-agile-grids">
                <div class="col-xs-4 grid-info">
                    <h3>FAMILY PACK</h3>
                    <h4>$29.99
                        <sup>*</sup>
                    </h4>
                    <div class="pricing-agile-text">
                        <p>Manicure & Pedicure</p>
                        <p>Hair Styling</p>
                        <p>Nail Cutting</p>
                        <p>Wellness</p>
                    </div>
                    <a href="#register" class="scroll">Choose Plan</a>
                </div>
                <div class="col-xs-4 grid-info grid-two">
                    <h3>PREMIUM</h3>
                    <h4>$48.99
                        <sup>*</sup>
                    </h4>
                    <div class="pricing-agile-text">
                        <p>Hair Styling</p>
                        <p>Body massage</p>
                        <p>Wellness</p>
                        <p>Manicure</p>
                    </div>
                    <a href="#register" class="scroll">Choose Plan</a>
                </div>
                <div class="col-xs-4 grid-info grid-three">
                    <h3>LUXURY</h3>
                    <h4>$76.99
                        <sup>*</sup>
                    </h4>
                    <div class="pricing-agile-text">
                        <p>Hair Cut</p>
                        <p>Pedicure</p>
                        <p>Body massage</p>
                        <p>Styling</p>
                    </div>
                    <a href="#register" class="scroll">Choose Plan</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //pricing table -->
    <div class="news-section" id="news">
        <div class="container">
            <h3 class="tittle-w3l">Latest News
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <div class="news-grids-w3l">
                <div class="col-xs-6 news-grid">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="images/f4.jpg" class="img-responsive" alt="" />
                    </a>
                    <div class="news-text">
                        <div class="news-events-agile">
                            <h5>
                                <a href="#" data-toggle="modal" data-target="#myModal">07 Nov</a>
                            </h5>
                            <div class="post-img">
                                <a href="#" data-toggle="modal" data-target="#myModal">
                                    <ul>
                                        <li>
                                            <span class="fa fa-comments" aria-hidden="true"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-heart" aria-hidden="true"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-share" aria-hidden="true"></span>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail-bottom">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                                tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 news-grid">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="images/f6.jpg" class="img-responsive" alt="" />
                    </a>
                    <div class="news-text">
                        <div class="news-events-agile event-colo1">
                            <h5>
                                <a href="#" data-toggle="modal" data-target="#myModal">16 Nov</a>
                            </h5>
                            <div class="post-img">
                                <a href="#" data-toggle="modal" data-target="#myModal">
                                    <ul>
                                        <li>
                                            <span class="fa fa-comments" aria-hidden="true"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-heart" aria-hidden="true"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-share" aria-hidden="true"></span>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail-bottom">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                                tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="news-grids-w3l-2">
                <div class="col-xs-6 news-grid">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="images/f2.jpg" class="img-responsive" alt="" />
                    </a>
                    <div class="news-text">
                        <div class="news-events-agile event-colo4">
                            <h5>
                                <a href="#" data-toggle="modal" data-target="#myModal">22 Nov</a>
                            </h5>
                            <div class="post-img">
                                <a href="#" data-toggle="modal" data-target="#myModal">
                                    <ul>
                                        <li>
                                            <span class="fa fa-comments" aria-hidden="true"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-heart" aria-hidden="true"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-share" aria-hidden="true"></span>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail-bottom">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                                tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 news-grid">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="images/f5.jpg" class="img-responsive" alt="" />
                    </a>
                    <div class="news-text">
                        <div class="news-events-agile event-colo3">
                            <h5>
                                <a href="#" data-toggle="modal" data-target="#myModal">27 Nov</a>
                            </h5>
                            <div class="post-img">
                                <a href="#" data-toggle="modal" data-target="#myModal">
                                    <ul>
                                        <li>
                                            <span class="fa fa-comments" aria-hidden="true"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-heart" aria-hidden="true"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-share" aria-hidden="true"></span>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail-bottom">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <h6>Eiusmod tempor incididunt ut labore sed do eiusmod</h6>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
                                tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <section>
                    <div class="modal-body">
                        <h5>Beauty Style</h5>
                        <img src="images/1.jpg" alt=" " class="img-responsive" />
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                            consequatur? Quis autem vel eum iure reprehenderit qui in ea.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- //news -->
    <!-- team -->
    <div class="team-w3l" id="team">
        <div class="container">
            <h3 class="tittle-w3l">Our Team
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <div class="team-w3l-grids">
                <div class="col-xs-3 info-team-grid-w3l">
                    <img src="images/t1.jpg" alt="">
                    <div class="captn">
                        <h4>Mary</h4>
                        <div class="media-social-agile">
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 info-team-grid-w3l">
                    <img src="images/t2.jpg" alt="">
                    <div class="captn">
                        <h4>Peter</h4>
                        <div class="media-social-agile">
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 info-team-grid-w3l">
                    <img src="images/t4.jpg" alt="">
                    <div class="captn">
                        <h4>Johan</h4>
                        <div class="media-social-agile">
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 info-team-grid-w3l">
                    <img src="images/t3.jpg" alt="">
                    <div class="captn">
                        <h4>Steven</h4>
                        <div class="media-social-agile">
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //trainers -->

    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="contact-grid-agiles-w3l">
                <div class="col-md-7 contact-grid-agile">
                    <h3 class="tittle-w3l">Contact Us
                        <span class="heading-style">
							<i></i>
							<i></i>
							<i></i>
						</span>
                    </h3>
                    <form action="#" method="post">
                        <input type="text" placeholder="Name" name="name" required="">
                        <input type="email" placeholder="Email" name="email" required="">
                        <textarea placeholder="Message.." name="message" required=""></textarea>
                        <input type="submit" value="Send Now">
                    </form>
                </div>
                <div class="col-md-5 contact-grid-agile">
                    <div class="contact-right1">
                        <img src="images/con-img.jpg" alt="" />
                    </div>
                    <div class="contact-right2">
                        <div class="call ">
                            <div class="col-xs-4 contact-grdr-w3l">
                                <h3>Call us :</h3>
                            </div>
                            <div class="col-xs-8 contact-grdr-w3l">
                                <ul>
                                    <li>+3402 890 679</li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="call">
                            <div class="col-xs-4 contact-grdr-w3l">
                                <h3>Locate us :</h3>
                            </div>
                            <div class="col-xs-8 contact-grdr-w3l">
                                <ul>
                                    <li>345 Diamond Street</li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="call">
                            <div class="col-xs-4 contact-grdr-w3l">
                                <h3>Mail us :</h3>
                            </div>
                            <div class="col-xs-8 contact-grdr-w3l">
                                <ul>
                                    <li>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //contact -->

    <!-- flicker -->
    <div class="insta-text">
        {{--<h3>Instagram Post</h3>--}}
    </div>
    <div class="portfolio">
        <ul id="flexiselDemo1">
            <li>
                <div class="portfolio_grid-agile">
                    <img src="images/f6.jpg" alt=" " class="img-responsive" />
                </div>
            </li>
            <li>
                <div class="portfolio_grid-agile">
                    <img src="images/f3.jpg" alt=" " class="img-responsive" />
                </div>
            </li>
            <li>
                <div class="portfolio_grid-agile">
                    <img src="images/f4.jpg" alt=" " class="img-responsive" />
                </div>
            </li>
            <li>
                <div class="portfolio_grid-agile">
                    <img src="images/f5.jpg" alt=" " class="img-responsive" />
                </div>
            </li>
            <li>
                <div class="portfolio_grid-agile">
                    <img src="images/f6.jpg" alt=" " class="img-responsive" />
                </div>
            </li>
            <li>
                <div class="portfolio_grid-agile">
                    <img src="images/f2.jpg" alt=" " class="img-responsive" />
                </div>
            </li>
            <li>
                <div class="portfolio_grid-agile">
                    <img src="images/f4.jpg" alt=" " class="img-responsive" />
                </div>
            </li>
            <li>
                <div class="portfolio_grid-agile">
                    <img src="images/f5.jpg" alt=" " class="img-responsive" />
                </div>
            </li>
        </ul>
    </div>
    <!-- //flicker -->
    <!-- subscribe -->
    <div class="subscribe-info-w3l">
        <div class="container">
            <h4>Subscribe Our Newsletter</h4>
            <form action="#" method="post">
                <input type="email" name="email" placeholder="Enter your Email..." required="">
                <input type="submit" value="Submit">
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
    <!-- //subscribe -->


    @yield('content')


    <!-- footer -->
        <footer>
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
<!-- here stars scrolling script -->
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
<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
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
<!-- //scrolling script -->
<!-- flexisel -->
<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
<script type="text/javascript">
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

    });
</script>
<!-- //flexisel -->
<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->


</body>
</html>
