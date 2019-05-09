@extends('layouts.master')
@section('title','create')

@push('css')
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endpush

@section('content')
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Update Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

                {!! Form::open(['route'=>['border.update',$borders->id],'method'=>'PUT',],['class'=>'class="form-horizontal']) !!}
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    {!! Form::text('name',$borders->name, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Father Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                    {!! Form::text('father',$borders->father, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Mother Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-female"></i>
                                    </div>
                                    {!! Form::text('mother',$borders->mother, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Mobile No</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    {!! Form::text('mobile',$borders->mobile, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                    {!! Form::text('email',$borders->email, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label> Room No</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    {!! Form::text('room',$borders->room, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Block No</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-rebel"></i>
                                    </div>
                                    {!! Form::text('block',$borders->block, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Technology</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-houzz"></i>
                                    </div>
                                    {!! Form::text('technology',$borders->technology, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Shift</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-snowflake-o"></i>
                                    </div>
                                    {!! Form::text('shift',$borders->shift, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Semester</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-gg-circle"></i>
                                    </div>
                                    {!! Form::text('semester',$borders->semester, ['class' => 'form-control','required'=>'required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('border.index')}}" class="btn btn-danger">Back</a>
                    <button type="submit" value="submit" class="btn btn-info pull-right">Update</button>
                </div>
                <!-- /.box-footer -->
            {!! Form::close() !!}
        </div>
        <!-- /.box -->
        <!-- general form elements disabled -->

        <!-- /.box -->
    </div>
@stop
@push('js')
    <!-- date-range-picker -->
    <script src="{{asset('assets/admin/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{asset('assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
@endpush