@extends('layouts.pages')

@section('content')
    <div class="container profileuser">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 " align="center">
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="profile" >
                                        <div class="col-md-12col-sm-12 col-xs-12 ">
                                            <div class="form-group">
                                                <div class="profile-pic" style="">
                                                    <div class="profile-pic-box" style="">
                                                        <img src="/images/1.jpg" alt="Picture" >

                                                        <button type="button" class="close" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group image-upload">
                                                <input type="button" value="upload image" class="btn-primary form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-6 col-lg-6 col-sm-6" align="center">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <form class="form-horizontal profile-form" method="POST" action="{{ route('userprofile') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-9 col-md-offset-1">
                                                        <div class="relative">
                                                            <i class="glyphicon glyphicon-phone input-icon"></i>
                                                            <input type="text" name="userphone" class="form-control input-with-icon" placeholder="Phone">

                                                        </div>

                                                        @if ($errors->has('userphone'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('userphone') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-9 col-md-offset-1">
                                                        <input type="hidden" name="userid" value="{{Auth::user()->id}}">

                                                        <div class="relative">

                                                            <i class="glyphicon glyphicon-map-marker input-icon"></i>
                                                            <input type="text" name="useradress" class="form-control input-with-icon" placeholder="Address">

                                                        </div>


                                                        @if ($errors->has('useradress'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('useradress') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-12 col-md-offset-2">
                                                        <button type="submit" class="btn btn-danger">Send</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="panel-footer">

                    </div>

                        @foreach($categories as $category)

                            <div class="checkbox ">
                                <input type="checkbox" class="master-category-checked"  value="{{$category['name']}}">
                                <label for="inlineCheckbox1"> {{$category['name']}} </label>
                            </div>

                        @endforeach

                        <div>

                            <div class="caption">
                                <h4>Услуги</h4>

                            </div>
                            <div class="col-sm-12 col-xs-12">





                                <div class="table" id="results">
                                    <div class='theader'>
                                        <div class='table_header'>Имя услуги</div>
                                        <div class='table_header'>Длительность</div>
                                        <div class='table_header'>Плата за услугу</div>
                                        <div class='table_header'>Транспортная Плата</div>
                                    </div>
                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Имя услуги</div>
                                            <div class='table_cell'>Стрижка (короткие волосы - до линии плеча)</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Длительность</div>
                                            <div class='table_cell'><input type="text" class="form-control" value="" /></div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Плата за услугу</div>
                                            <div class='table_cell'><input type="text" class="form-control" value="" /></div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Транспортная Плата</div>
                                            <div class='table_cell'><input type="text" class="form-control" value="" /></div>
                                        </div>
                                    </div>
                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header One</div>
                                            <div class='table_cell'>-0.89</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Two</div>
                                            <div class='table_cell'>0.7986</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Three</div>
                                            <div class='table_cell'>0.876</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Four</div>
                                            <div class='table_cell'>0.498</div>
                                        </div>
                                    </div>
                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header One</div>
                                            <div class='table_cell'>-1.1669</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Two</div>
                                            <div class='table_cell'>0.4949</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Three</div>
                                            <div class='table_cell'>-0.7113</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Four</div>
                                            <div class='table_cell'>0.434</div>
                                        </div>
                                    </div>
                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header One</div>
                                            <div class='table_cell'>0.1996</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Two</div>
                                            <div class='table_cell'>-0.7693</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Three</div>
                                            <div class='table_cell'>1.974</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Four</div>
                                            <div class='table_cell'>-0.959</div>
                                        </div>
                                    </div>
                                    <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header One</div>
                                            <div class='table_cell'>-1.5998</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Two</div>
                                            <div class='table_cell'>-0.1149</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Three</div>
                                            <div class='table_cell'>1.3888</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Header Four</div>
                                            <div class='table_cell'>-0.0689</div>
                                        </div>
                                    </div>
                                </div>



                                <div class="divTable blueTable">
                                    <div class="divTableHeading">
                                        <div class="divTableRow">
                                            <div class="divTableHead">Имя услуги</div>
                                            <div class="divTableHead">Длительность</div>
                                            <div class="divTableHead">Плата за услугу</div>
                                            <div class="divTableHead">Транспортная Плата</div>
                                        </div>
                                    </div>
                                    <div class="divTableBody ">
                                        <div class="divTableRow">
                                            Женская Стрижка
                                        </div>

                                        <div class="divTableRow">
                                            <div class="divTableCell">Стрижка (короткие волосы - до линии плеча)</div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                        </div>

                                        <div class="divTableRow">
                                            <div class="divTableCell">Стрижка (короткие волосы - до линии плеча)</div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                        </div>

                                        <div class="divTableRow">
                                            <div class="divTableCell">Стрижка (короткие волосы - до линии плеча)</div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                        </div>

                                        <div class="divTableRow">
                                            <div class="divTableCell">Стрижка (короткие волосы - до линии плеча)</div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                            <div class="divTableCell"><input type="text" class="form-control" value="" /></div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div >
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>


                </div>

            </div>

        </div>


    </div>




@endsection
