@extends('header')
@section('title')
Digital Marketing
@endsection
@section('content')
<div class="software">
  <h1 class=" my-5 text-center">{{trans('lang.LSM')}}</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="software-dev text-center">
          <img class="image-fluid" src="{{asset('img/menova/seo.png')}}" width="100px" height="100px" />
        </div>
        <div style="text-align:center">
          <p>SEO Project</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="software-dev text-center">
          <img class="image-fluid" src="{{asset('img/menova/mp.png')}}" width="100px" height="100px" />
        </div>
        <div style="text-align:center">
          <p>Medaia Player</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="software-dev text-center">
          <img class="image-fluid" src="{{asset('img/menova/db-ad.png')}}" width="100px" height="100px" />
        </div>
        <div style="text-align:center">
          <p>FaceBook Adds</p>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
