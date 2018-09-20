@extends('layouts.admin')

@section('content')

    <div class="box-header">
        <div class="col-xs-12" align="center">
            <h2 class="box-title"><b>Edit Menu</b></h2>
        </div>
    </div>

    <div class="row">

        <div class="x_panel">

            <div class="x_content">

                <form id="demo-form2" class="form-horizontal form-label-left" method="post" action="" >
                    {{ csrf_field() }}

                    <div class="form-group ">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="language_iso">
                            Language
                   <span class="asteriskField">
                    *
                   </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="language_iso">
                                <option value="{{$menu['language_iso']}}" selected>{{$menu['language_iso']}}</option>
                                @foreach($languages as $language)
                                    <option value="{{$language['iso']}}">{{$language['name'] }}</option>
                                @endforeach
                            </select>
                         </div>

                        {{$errors->first('language')}}
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="name" type="text" id="name" class="form-control col-md-7 col-xs-12" value="{{$menu['name']}}">
                        </div>
                        {{$errors->first('name')}}
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Link <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="link" type="text" id="link" class="form-control col-md-7 col-xs-12" value="{{$menu['link']}}">
                        </div>
                        {{$errors->first('link')}}
                    </div>

                    <div class="form-group">
                        <label for="active" class="control-label col-md-3 col-sm-3 col-xs-12">Active</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="active" class="form-control col-md-7 col-xs-12" type="text" name="active" value="{{$menu['active']}}">
                        </div>
                        {{$errors->first('active')}}
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection