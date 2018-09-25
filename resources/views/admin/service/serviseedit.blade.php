@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="modal-title">Update Data</h2>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('admin.serviceedit') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input id="serviceid" type="hidden" name="id" value="{{$serviceedit->id}}">

                            <div class="form-group{{ $errors->has('servicename') ? ' has-error' : '' }}">
                                <label for="servicename" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="servicename" type="text" class="form-control" name="servicename" value="{{$serviceedit->name}}" required autofocus>

                                    @if ($errors->has('servicename'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('servicename') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('servicedesc') ? ' has-error' : '' }}">
                                <label for="servicedesc" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input id="servicedesc" type="text" class="form-control" name="servicedesc" value=" {{$serviceedit->desc}}" required>

                                    @if ($errors->has('servicedesc'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('servicedesc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('servicelink') ? ' has-error' : '' }}">
                                <label for="servicelink" class="col-md-4 control-label">Link</label>

                                <div class="col-md-6">
                                    <input id="servicelink" type="text" class="form-control" name="servicelink" value="{{$serviceedit->link}}" required>

                                    @if ($errors->has('servicelink'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('servicelink') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row service-image-hide">
                                <label class="col-md-4 control-label" for="image">Image</label>
                                <div class="col-md-6">
                                    <image id="serviceimage" src="/{{$serviceedit->image}}" width="100%" height="100%"> </image>
                                </div>
                                <div class="col-sm-1">
                                <button type="button" class="service-image-delet" title="Delete image">X</button>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} service-image-input">
                                <label class="col-md-4 control-label" for="image">Choose an image</label>
                                <div class="col-md-6">
                                    <input name="image" type="file" id="image" class="form-control">
                                </div>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
