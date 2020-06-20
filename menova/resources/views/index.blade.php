@extends('header')
@section('content')
<div class="who-us py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="text-center">
          <h1 class="my-4">{{trans('lang.welcome')}}</h1>
          <p class="px-5">{{trans('lang.seeks')}}</p>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- start menaova values -->
<div class="our-values">
  <div class="container">
    <h1 class="text-center my-5">{{trans('lang.values')}}</h1>
    <div class="row gy-3">

      <div class="value col-lg-4 col-md-4 col-sm-6 col-12 text-center">
        <img class="value-img img-fluid my-4" src="{{asset('img/menova/innovation.png')}}">
        <h4 class="ser-val">{{trans('lang.innovate')}}</h4>
      </div>

      <div class="value col-lg-4 col-md-4 col-sm-6 col-12 text-center">
        <img class="value-img img-fluid my-4" src="{{asset('img/menova/experience.png')}}">
        <h4 class="ser-val">{{trans('lang.exper')}}</h4>
      </div>

      <div class="value col-lg-4 col-md-4 col-sm-6 col-12 text-center">
        <img class="value-img img-fluid my-4" src="{{asset('img/menova/flix.png')}}">
        <h4 class="ser-val">{{trans('lang.flix')}}</h4>
      </div>

      <div class="value col-lg-4 col-md-4 col-sm-6 col-12 text-center">
        <img class="value-img img-fluid my-4" src="{{asset('img/menova/excellency.png')}}">
        <h4 class="ser-val">{{trans('lang.excell')}}</h4>
      </div>

      <div class="value col-lg-4 col-md-4 col-sm-6 col-12 text-center">
        <img class="value-img img-fluid my-4" src="{{asset('img/menova/commitment.png')}}">
        <h4 class="ser-val">{{trans('lang.comm')}}</h4>
      </div>



      <div class="value col-lg-4 col-md-4 col-sm-6 col-12 text-center">
        <img class="value-img img-fluid my-4" src="{{asset('img/menova/teamwork.png')}}">
        <h4 class="ser-val">{{trans('lang.team')}}</h4>
      </div>


    </div>
  </div>
</div>
<!-- end menaova values -->

<!-- start our providers -->
<div class="our-services bg-img-fixed  position-relative mt-3" style="background-image: url({{asset('/img/menova/our-services.jpg')}})">
  <div class="overlay position-relative py-5 mt-5">
    <div class="container">
      <h2 class="text-center text-white my-5">{{trans('lang.serv')}}</h2>
      <div class="row my-3">
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
          <div class="card">
            <img style="height: 250px;width: auto;" class="value-img img-fluid my-4" src="{{asset('img/menova/vector_banner_web_dev.png')}}">
            <h4 class="ser-val my-3">{{trans('lang.Software')}}</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
          <div class="card px-3">
            <img style="height: 250px;width: auto;" class="value-img img-fluid my-4" src="{{asset('img/menova/it.png')}}">
            <h4 class="ser-val my-3">{{trans('lang.services')}}</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
          <div class="card">
            <img style="height: 250px;width: auto;" class="value-img img-fluid my-4" src="{{asset('img/menova/Marketing.png')}}">
            <h4 class="ser-val my-3">{{trans('lang.marketing')}}</h4>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- end our providers -->

<!-- start footer -->
@endsection
