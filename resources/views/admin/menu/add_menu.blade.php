@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-12" align="center">
                            <h2 class="box-title"><b>Add Menu</b></h2>
                        </div>
                    </div>

                    <div class="box-body">

                        <form method="post" action="" class="form-horizontal form-label-left">
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

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Menu Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="name" type="text" id="name" class="form-control col-md-7 col-xs-12">
                                </div>
                                {{$errors->first('name')}}
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link">Menu Link <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="link" type="text" id="link" class="form-control col-md-7 col-xs-12">
                                </div>
                                {{$errors->first('link')}}
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="active">Active <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="active" class="form-control col-md-7 col-xs-12">
                                        <option>0</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>

                            <!-- /.form-group -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection