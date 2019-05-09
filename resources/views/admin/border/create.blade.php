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
                <h3 class="box-title">Registration Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('border.store')}}" method="POST" class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" col-md-8 col-md-push-2 form-group">
                                <label>Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
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
                                    <input type="text" name="father" class="form-control" placeholder="Enter Your Father Name">
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
                                    <input type="text" name="mother" class="form-control" placeholder="Enter Your Mother Name">
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
                                    <input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile No">
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
                                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
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
                                    <input type="text" name="room" class="form-control" placeholder="Enter Your Room No">
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
                                    <input type="text" name="block" class="form-control" placeholder="Enter Your Block No">
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
                                    <input type="text" name="technology" class="form-control" placeholder="Enter Your Technology">
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
                                    <input type="text" name="shift" class="form-control" placeholder="Enter Your Shift">
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
                                    <input type="text" name="semester" class="form-control" placeholder="Enter Your Semester">
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <p class="text-center"><button type="submit" value="submit" class="btn btn-info pull-right">Submit</button></p>
                    <a href="{{route('border.index')}}" class="btn btn-danger">Back</a>
                </div>
                <!-- /.box-footer -->
            </form>
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