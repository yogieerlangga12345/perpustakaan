<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/lte/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/lte/plugins/overlayScrollbars/css/overlayScrollbars.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini layout-fixed nimbus-is-editor">
<div class="wrapper">

  <!-- Navbar -->
    @include('layout/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('layout/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @if (!empty($content))
      @include($content)
    @endif
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
    @include('layout/footer')
</div>
<!-- ./wrapper -->
    
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('assets/lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('assets/lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/lte/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('assets/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>


<script src="{{ asset('assets/js/datatables.min.js') }}"></script>

@if (!empty($script_footer))
    @include($script_footer)  
@endif
</body>
</html>
