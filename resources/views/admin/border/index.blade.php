@extends('layouts.master')
@section('title','form')

@push('css')
  <!-- Bootstrap Core Css -->

  <!-- JQuery DataTable Css -->
  <link href="{{asset('assets/table/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('assets/table/css/style.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h2>
          Border
{{--              <span>{{$c}}</span>--}}
          </h2>
          <ul class="header-dropdown m-r--5">
            <li> <a href="{{route('border.create')}}"><button class="btn btn-primary fa fa-plus-circle"> Add Border </button></a></li>
{{--            <li class="dropdown">--}}
{{--              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
{{--                <i class="fa fa-angle-down"></i>--}}
{{--              </a>--}}
{{--              <ul class="dropdown-menu pull-right">--}}
{{--                <li><a href="javascript:void(0);">Action</a></li>--}}
{{--                <li><a href="javascript:void(0);">Another action</a></li>--}}
{{--                <li><a href="javascript:void(0);">Something else here</a></li>--}}
{{--              </ul>--}}
{{--            </li>--}}
          </ul>
        </div>
        <div class="body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
              <thead>
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Mobile</th>
                <th>Room</th>
                <th>Block</th>
                <th>Technology</th>
                <th>Shift</th>
                <th>Semester</th>
                <th>Operation</th>
              </tr>
              </thead>
              <tbody>
                @foreach($borders as $key=>$border)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$border->name}}</td>
                        <td>{{$border->father}}</td>
                        <td>{{$border->mother}}</td>
                        <td>{{$border->mobile}}</td>
                        <td>{{$border->room}}</td>
                        <td>{{$border->block}}</td>
                        <td>{{$border->technology}}</td>
                        <td>{{$border->shift}}</td>
                        <td>{{$border->semester}}</td>
                        <td>
                      <td>
                        <div class="row">
                          <div class="col-lg-3 col-lg-pull-12"> <a href="{{route('border.show',$border->id)}}"><button  class="btn btn-info fa fa-info-circle" title="Details" ;"></button></a></div>
{{--                          <div class="col-lg-3 col-lg-pull-10"><a href=""><button  class="btn btn-primary fa fa-edit" title="Edit""></button></a></div>--}}
                            <div class="col-lg-3 col-lg-pull-10">
                              {!! Form::open(['route'=>['border.destroy',$border->id],'method'=>'DELETE']) !!}
                              <button class="btn btn-danger fa fa-trash-o" title="Delete"></button>
                              {!! Form::close() !!}
                            </div>

                        </div>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@push('js')
  <!-- Waves Effect Plugin Js -->

  <!-- Waves Effect Plugin Js -->
  <script src="{{asset('assets/table/plugins/node-waves/waves.js')}}"></script>

  <!-- Jquery DataTable Plugin Js -->
  <script src="{{asset('assets/table/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/table/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
  <script src="{{asset('assets/table/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('assets/table/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
  <script src="{{asset('assets/table/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
  <script src="{{asset('assets/table/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
  <script src="{{asset('assets/table/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
  <script src="{{asset('assets/table/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
  <script src="{{asset('assets/table/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>


  <script src="{{asset('assets/table/js/pages/tables/jquery-datatable.js')}}"></script>
@endpush