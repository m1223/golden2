<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Golden | Chatrabash</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('assets/admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('assets/admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    @stack('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

         @include('layouts.admin.topbar')
         <!-- Left side column. contains the logo and sidebar -->
         @include('layouts.admin.side')
         <!-- Content Wrapper. Contains page content -->
             <div class="content-wrapper">
                 <section class="content">
                     <!-- Info boxes -->
                 @include('layouts.admin.button')
                 <!-- /.row -->
                 @yield('content')
                 <!-- /.row -->
                     <!-- Main row -->
                     <!-- /.row -->
                 </section>
                 <!-- /.content -->
             </div>
             <!-- /.content-wrapper -->
         @include('layouts.admin.footer')
         <!-- Control Sidebar -->
         @include('layouts.admin.setting')

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="{{asset('assets/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<script src="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('meal')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/admin/bower_components/chart.js/Chart.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/admin/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/admin/dist/js/demo.js')}}"></script>
    <!-- Page script -->
@stack('js')

    @if (Session::has('success'))
        <script>
            Swal.fire(
                'Good job!',
                '{{Session::get('success')}}',
                'success'
            )
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            {{--Swal.fire(--}}
            {{--    'Something Went Worng!',--}}
            {{--    '{{Session::get('error')}}',--}}
            {{--    'success'--}}
            {{--)--}}
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
            })
        </script>
    @endif

</body>
</html>
