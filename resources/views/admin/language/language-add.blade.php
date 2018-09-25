@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-12" align="center">
                            <h2 class="box-title"><b>Add Languages</b></h2>
                        </div>
                    </div>

                    <div class="box-body">

                        <form method="post" action="" class="form-horizontal form-label-left">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Language Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="name" type="text" id="name" class="form-control col-md-7 col-xs-12">
                                </div>
                                {{$errors->first('name')}}
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iso">Iso <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="iso" type="text" id="name" class="form-control col-md-7 col-xs-12">
                                </div>
                                {{$errors->first('iso')}}
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
                                    {{--<button class="btn btn-primary">Cancel</button>--}}
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