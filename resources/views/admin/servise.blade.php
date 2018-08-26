@extends('layouts.admin')

@section('content')
    <div class="container servise-container">
        <div class="row">

            <table class="table table-hover table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($servises as $servise)
                    <tr id="servise-{{$servise['id']}}">
                        <td>{{$servise['id']}}</td>
                        <td>{{$servise['name']}}</td>
                        <td>{{$servise['desc']}}</td>
                        <td>{{$servise['link']}}</td>
                        <td><image src="/{{$servise['image']}}" width="100" height="50"> </image></td>
                        <td><a href="{{url('admin/service-edit/'.$servise['id'])}}"><button type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm "><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                        <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{--<div id="edit" class="modal fade" role="dialog">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal">X</button>--}}
                    {{--<h4 class="modal-title">Update Data</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<form>--}}
                        {{--<input id="serviceid" type="hidden" name="id" value="">--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input id="servicename" type="text" class="form-control" name="name" value="">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Description</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input id="servicedesc" type="text" class="form-control" name="desc" value="">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Link</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input id="servicelink" type="text" class="form-control" name="link" value="">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row service-image-hide">--}}
                            {{--<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Image</label>--}}
                            {{--<div class="col-sm-9">--}}
                                {{--<image id="serviceimage" src="" width="100%" height="100%"> </image>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-1">--}}
                                {{--<button type="button" class="service-image-delet" title="Delete image">X</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row service-image-input">--}}
                            {{--<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Upload Image</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input name="image" type="file" class="form-control">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}

                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" id="up" class="btn btn-warning" data-dismiss="modal">Update</button>--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div id="delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">�</button>
                    <h4 class="modal-title">Delete Data</h4>
                </div>
                <div class="modal-body">
                    <strong>Are you sure you want to delete this data?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" id="del" class="btn btn-danger" data-dismiss="modal">Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="serviseadd" >
        <a href="{{route('admin.serviceadd')}}"><button class="btn btn-primary ">Add services</button></a>
    </div>

@endsection
