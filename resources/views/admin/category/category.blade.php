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
                    {{--<th>Image</th>--}}
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
                        {{--<td><image src="/{{$servise['image']}}" width="100" height="50"> </image></td>--}}
                        <td><a href="{{url('admin/service-edit/'.$servise['id'])}}"><button type="button" data-toggle="modal" data-target="#edit" data-uid="1" class="update btn btn-warning btn-sm "><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                        <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

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
