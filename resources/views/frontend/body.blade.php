@extends('frontend.template')

@section('body_front')
<div class="content-wrapper">
    @include('frontend.partials.header')
    <!-- /header -->
    @yield('content_front')
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
@endsection