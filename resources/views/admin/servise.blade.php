@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Service</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('admin.service') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                                <label for="desc" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input id="desc" type="text" class="form-control" name="desc" value="{{ old('desc') }}" required>

                                    @if ($errors->has('desc'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Link</label>

                                <div class="col-md-6">
                                    <input id="link" type="text" class="form-control" name="link" required>

                                    @if ($errors->has('link'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label" for="image">Choose an image</label>
                                <div class="col-md-6">
                                    <input name="image" type="file" id="image" class="form-control">
                                </div>
                            </div>

                            {{--<!-- Form actions -->--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-12 text-right">--}}
                                    {{--<button type="submit" class="btn btn-primary" >Save</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}

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
