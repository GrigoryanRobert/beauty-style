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
                        <form class="form-horizontal" method="POST" action="{{ url('admin/edit_categories/'.$category->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input id="serviceid" type="hidden" name="id" value="{{$category->id}}">

                            <div class="form-group{{ $errors->has('categoryename') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{$category->name}}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lang_iso') ? ' has-error' : '' }}">

                                <label class="col-md-4 control-label" for="lang_iso">Language</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="lang_iso">
                                        <option value="{{$category['lang_iso']}}" selected>{{$category['lang_iso']}}</option>
                                        @foreach($languages as $language)
                                            <option value="{{$language['iso']}}">{{$language['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{$errors->first('lang_iso')}}
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
