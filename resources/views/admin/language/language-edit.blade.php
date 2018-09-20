@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-12" align="center">
                            <h2 class="box-title"><b>Edit Language</b></h2>
                        </div>
                    </div>

                    <div class="box-body">

                        <form id="demo-form2" class="form-horizontal form-label-left" method="post" action="" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="name" type="text" id="name" class="form-control col-md-7 col-xs-12" value="{{$language['name']}}">
                                </div>
                                {{$errors->first('name')}}
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iso">Iso <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="iso" name="iso" class="form-control col-md-7 col-xs-12" value="{{$language['iso']}}">
                                </div>
                                {{$errors->first('iso')}}
                            </div>
                            <div class="form-group">
                                <label for="active" class="control-label col-md-3 col-sm-3 col-xs-12">Active</label>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="active" name="active" class="form-control col-md-7 col-xs-12">
                                        <option value="{{$language['active']}}">{{$language['active']}}</option>
                                        <option>0</option>
                                        <option>1</option>
                                    </select>
                                </div>
                                {{----}}
                                {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<input id="active" class="form-control col-md-7 col-xs-12" type="text" name="active" value="{{$language['active']}}">--}}
                                {{--</div>--}}
                                {{$errors->first('active')}}
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    {{--<button class="btn btn-primary">Cancel</button>--}}
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection