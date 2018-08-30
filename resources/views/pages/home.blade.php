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
                <div class="form-group">
                    <div class="row">

                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="row">

                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
