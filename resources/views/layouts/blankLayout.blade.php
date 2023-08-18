@extends('layouts/commonMaster' )

@section('layoutContent')

  <div class="background">
    <div class="circle1"></div>
    <div class="circle2"></div>
    <!-- <div class="bal-3"></div> -->
    <div class="blurred"></div>
  </div>

  <!-- Content -->
<div class="d-flex flex-column justify-content-between">
  @include('layouts/sections/site/navbar')
  <div class="page-content-custom">
  @yield('content')
 <!--/ Content -->
  @include('layouts/sections/site/footer')
  </div>
</div>

@endsection