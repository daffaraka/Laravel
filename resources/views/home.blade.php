  <link rel="stylesheet" href="{{ asset ( 'plugins/fontawesome-free/css/all.min.css') }} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset ( 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }} ">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ( 'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }} ">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ( 'plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset ( 'plugins/jqvmap/jqvmap.min.css') }} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ( 'dist/css/adminlte.min.css') }} ">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ( 'plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ( 'plugins/daterangepicker/daterangepicker.css') }} ">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset ( 'plugins/summernote/summernote-bs4.css') }} ">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
            <div class="card">
                <div class="card-header">Dashboard</div>
                     <div class="box box-solid box-primary">
                         <div class="card-body">
                        @if (session('status'))
                         
                                {{ session('status') }}
                        @endif

                        You are logged in!
                        <br>
                        <a href="{{ route ('content.index') }}" style="font-size: 20px;"> Kesini </a>
                        </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
