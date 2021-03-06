@extends('layouts.pages')

@section('content')
    <div class="container profileuser">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 " align="center">
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="profile" >
                                        <div class="col-md-12col-sm-12 col-xs-12 ">
                                            <div class="form-group">
                                                <div class="profile-pic" style="">
                                                    <div class="profile-pic-box" style="">
                                                        <img src="/images/1.jpg" alt="Picture" >

                                                        <button type="button" class="close" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group image-upload">
                                                <input type="button" value="upload image" class="btn-primary form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-6 col-lg-6 col-sm-6" align="center">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <form class="form-horizontal profile-form" method="POST" action="{{ route('userprofile') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-9 col-md-offset-1">
                                                        <div class="relative">
                                                            <i class="glyphicon glyphicon-phone input-icon"></i>
                                                            <input type="text" name="userphone" class="form-control input-with-icon" placeholder="Phone">

                                                        </div>

                                                        @if ($errors->has('userphone'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('userphone') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-9 col-md-offset-1">
                                                        <input type="hidden" name="userid" value="{{Auth::user()->id}}">

                                                        <div class="relative">

                                                            <i class="glyphicon glyphicon-map-marker input-icon"></i>
                                                            <input type="text" name="useradress" class="form-control input-with-icon" placeholder="Address">

                                                        </div>


                                                        @if ($errors->has('useradress'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('useradress') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-12 col-md-offset-2">
                                                        <button type="submit" class="btn btn-danger">Send</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>


                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>



                </div>


            </div>


        </div>


        </div>

    </div>



@endsection
