@extends('layouts.layoutservise')

@section('content')

<div class="profileuser">
    <div class="container ">
        <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-12 ">

                <div class="col-md-12 profile" >
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">

                        <div class="form-group">
                            <div class="profile-pic" style="">
                                <div class="profile-pic-box" style="">
                                    <img src="https://gazettereview.com/wp-content/uploads/2016/03/facebook-avatar.jpg" alt="Picture">

                                    <button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="button" value="upload image" class="btn-primary form-control">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="profile-border">
                    <form class="form-horizontal" method="POST" action="{{ route('userprofile') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-9 col-md-offset-1">
                                    <input type="text" name="userphone" class="form-control" placeholder="Phone">
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
                                    <input type="text" name="useradress" class="form-control" placeholder="Address">

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

                                <div class="col-md-9 col-md-offset-1">
                                    <button type="submit" class="btn btn-danger">Send</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
