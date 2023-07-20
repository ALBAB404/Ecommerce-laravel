@extends('layouts.admin_app')
@section('app_contant')
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.include.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    @include('admin.include.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
         @yield('master_contant')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  @endsection
