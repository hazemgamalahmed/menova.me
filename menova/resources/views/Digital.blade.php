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


<!-- free lancers work -->
@if($errors->any())
@foreach($errors->all() as $error)
<div class="row align-items-center justify-content-center">
  <div class="col-12 col-md-8">
    <ul class="list-unstyled">
      @foreach($errors->all() as $error)
      <li class="alert alert-danger">{{$error}}</li>
      @endforeach
    </ul>
  </div>
</div>
@endforeach
@endif
<div class="my-form my-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <h1 class="text-center my-5">{{trans('lang.DR')}}</h1>
        <form class="form-group forms" method="POST" action="{{url('insert/digital')}}">
          {!! csrf_field() !!}
          <label>{{trans('lang.name')}}</label>
          <input class="form-control my-2 welcome" type="text" name="username" placeholder="Your Name" />
          <label>{{trans('lang.email')}}</label>
          <input class="form-control my-2 welcome" type="text" name="email" placeholder="Your Email" />
          <label>{{trans('lang.phone')}}</label>
          <input class="form-control my-2 welcome" type="text" name="phone" placeholder="Your Phone" />
          <label>{{trans('lang.message')}}</label>
          <textarea name="message" class="form-control welcome" placeholder="send your message"></textarea>
          <button class="btn my-3 btn-block btn-success">{{trans('lang.submit')}} <i class="fa fa-send"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
