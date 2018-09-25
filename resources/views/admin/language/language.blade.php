@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-8" >
                            <h2 class="box-title"><b>Languages</b></h2>
                        </div>
                        <div class="col-xs-4" align="center">
                            <a href="{{url('/admin/add_languages')}}"><button class="btn btn-primary ">Add language</button></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Iso</th>
                                <th>Created_at</th>
                                <th>Active</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($languages as $language)
                            <tr id="language-{{$language['id']}}">
                                <td>{{$language['id']}}</td>
                                <td>{{$language['name']}}</td>
                                <td>{{$language['iso']}}</td>
                                <td>{{$language['created_at']}}</td>
                                <td><span class="label label-danger">{{$language['active']}}</span></td>
                                <td><a class="btn mini blue-stripe" href="{{url('/admin/edit_languages/'.$language['id'])}}">Edit</a></td>
                                <td class="language-delete" data-id="{{$language['id']}}"><a class="confirm-delete btn mini red-stripe" role="button">Delete</a></td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection