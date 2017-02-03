<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meta | AdminPanel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{URL::asset('assets/bower_components/ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/bower_components/datatables.net/css/dataTables.bootstrap.min.css')}}">
	  <script src="{{URL::asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="wrapper">

       <!-- header -->
        @include('partials.header')

       <!-- sidebar -->
        @include('partials.sidebar')

       <!-- content -->
        @yield('content')

        @include('partials.footer')
        
      <!-- Control Sidebar -->
        @include('partials.control-sidebar')
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
          
      <div class="control-sidebar-bg"></div>

    </div>

    <script src="{{URL::asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/app.min.js')}}"></script>
	<script src="{{URL::asset('js/my_script/chatbox_script.js')}}"></script>
	<script src="{{URL::asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  </body>
</html>