@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-12" align="center">
                            <h2 class="box-title"><b>Translate Menu</b></h2>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="row">
                            <form action="" method="post" class="form-horizontal form-label-left">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="language">Language <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="language" class="form-control col-md-7 col-xs-12">
                                            @foreach($languages as $language)
                                                <option value="{{$language['iso']}}">{{$language['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{$errors->first('language')}}
                                </div>

                                    @foreach($menus as $menu)
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{$menu['link']}}">{{$menu['name']}}<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="{{$menu['link']}}" type="text" class="form-control col-md-7 col-xs-12" value="">
                                        </div>
                                        {{$errors->first('name')}}
                                    </div>

                                    @endforeach

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>

                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection