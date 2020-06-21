@extends('header')
@section('content')
<div class="about-us row justify-content-center bg-img overflow-hidden" style="background-image: url('{{asset('img/menova/pattern-1.png')}}')">
  <div class="container col-12 col-md-8">
    <div class="about-me py-5">
      <h1 class="text-center my-4">{{trans('lang.About')}}</h1>
      <p class="py-5">{{trans('lang.history')}}</p>
    </div>
  </div>
</div>
@endsection
