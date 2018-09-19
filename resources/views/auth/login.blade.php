@extends('layouts.app')

@section('content')


    <!--background-->

    <div class="bg-agile">
        <div class="book-appointment">
            <h2>Login</h2>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="left-agileits-w3layouts same">

                    <div class="gaps">
                        <div class="form-group">

                            <p for="name" class="col-md-4 control-label">Login With</p>

                            <div class="col-md-6">

                                <a href=" {{ url('/auth/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>

                                <a href="{{ url('/auth/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>

                                <a href="{{ url('/auth/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>

                            </div>

                        </div>
                    </div>
                    <div class="gaps">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <p for="email" class="col-md-4 control-label">E-Mail Address</p>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="gaps">

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <p for="password" class="col-md-4 control-label">Password</p>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="gaps">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <p>Remember Me</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="gaps">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <p> Forgot Your Password?</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
