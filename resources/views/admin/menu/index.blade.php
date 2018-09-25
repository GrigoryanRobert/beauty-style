@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-8" >
                            <h2 class="box-title"><b>Menu</b></h2>
                        </div>
                        <div class="col-xs-4" align="center">
                            <a href="{{url('/admin/add_menu')}}" ><button class="btn btn-primary ">Add Menu</button></a>
                            <a href="{{url('/admin/translate_menu')}}" ><button class="btn btn-primary ">Translate</button></a>
                        </div>
                    </div>

                    {{--<div class="box-header">--}}
                        {{--<h3 class="box-title">Menu</h3>--}}
                        {{--<a href="{{url('/admin/add_menu')}}" style="float: right;padding-left: 10px;">Add Menu</a>--}}
                        {{--<a href="{{url('/admin/translate_menu')}}" style="float: right;">Translate</a>--}}

                    {{--</div>--}}
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Active</th>
                                <th>Language_iso</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($menus as $menu)
                                <tr id="language-{{$menu['id']}}">
                                    <td>{{$menu['id']}}</td>
                                    <td>{{$menu['name']}}</td>
                                    <td>{{$menu['link']}}</td>
                                    <td><span class="label label-danger">{{$menu['active']}}</span></td>
                                    <td>{{$menu['language_iso']}}</td>
                                    <td><a class="btn mini blue-stripe" href="{{url('/admin/edit_menu/'.$menu['id'])}}">Edit</a></td>
                                    <td class="menu-delete" data-id="{{$menu['id']}}"><a class="confirm-delete btn mini red-stripe" role="button">Delete</a></td>

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