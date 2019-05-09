@extends('layouts.master')
@section('title','form')

@push('css')
    <link href="{{asset('assets/table/css/style.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
               <h1 class="text-center">{{$borders->name}}</h1>
                <ul class="header-dropdown m-r--5">
                    <li> <a href="{{route('border.edit',$borders->id)}}"><button class="btn btn-primary fa fa-edit"> Edit </button></a></li>
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
               <div class="row">
                   <div class="col-lg-4 col-lg-offset-2">
                       <h3>Father : {{$borders->father}}</h3>
                       <h3>Mother : {{$borders->mother}}</h3>
                       <h3>Mobile No : {{$borders->mobile}}</h3>
                       <h3>Email : {{$borders->email}}</h3>
                       <h3>Technology : {{$borders->technology}}</h3>
                       <h3>Semester : {{$borders->semester}}</h3>
                       <h3>Shift : {{$borders->shift}}</h3>
                       <h3>Block : {{$borders->block}}</h3>
                       <h3>Room : {{$borders->room}}</h3>
                   </div>
                   <div class="col-lg-4">
                       <img src="{{asset('assets/image/images.jpg')}}" class="img-responsive img-thumbnail" alt="" title="260*280">
                   </div>
               </div>
               <p class="text-center"> <a href="{{route('border.index')}}"><button class="btn btn-danger fa fa-arrow-circle-left"></button></a></p>
            </div>
        </div>
    </div>
@stop

@push('js')
   
@endpush