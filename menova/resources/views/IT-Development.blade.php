@extends('header')
@section('title')
Software Development
@endsection
@section('content')
<!-- start choice me -->
<div class="choice-val">
  <div class="container">
    <h1 class="text-center my-4">{{trans('lang.why')}}</h1>
    <div class="row justify-content-center">
      <div class="col-md-7 col-sm-12">
        <div class="choice-me">
          <p class="text-center">
            {{trans('lang.resone')}}
          </p>
        </div>
        <div class="conten-tools">
          <p class="text-center">
            {{trans('lang.MSE')}}
          </p>
          <p class="text-center">
            {{trans('lang.target')}}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end choice me -->

<!-- start our software -->
<div class="software my-5">
  <h1 class="text-center my-5">{{trans('lang.OSF')}}</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="software-dev text-center">
          <img class="image-fluid" src="{{asset('img/menova/desktop.png')}}" width="100px" height="100px" />
        </div>
        <div style="text-align:center">
          <p class="text-center">Desktop app</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="software-dev text-center">
          <img class="image-fluid" src="{{asset('img/menova/web.png')}}" width="100px" height="100px" />
        </div>
        <div style="text-align:center">
          <p class="text-center">Web app</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="software-dev text-center">
          <img class="image-fluid" src="{{asset('img/menova/android.png')}}" width="100px" height="100px" />
        </div>
        <div style="text-align:center">
          <p>android apps</p>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- end our software -->
<div class="my-form">
  <div class="container">
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
    <h1>{{trans('lang.request')}}</h1>
    <div class="row justify-content-center my-5">
      <div class="col-12 col-md-6">

        <form class="form-group forms" method="POST" action="{{url('insert/developers')}}">
          {!! csrf_field() !!}
          <label>{{trans('lang.name')}}</label>
          <input class="form-control my-2 welcome" type="text" name="username" placeholder="Your Name" />
          <label>{{trans('lang.email')}}</label>
          <input class="form-control my-2 welcome" type="text" name="email" placeholder="Your Email" />
          <label>{{trans('lang.phone')}}</label>
          <input class="form-control my-2 welcome" type="text" name="phone" placeholder="Your Phone" />
          <label>{{trans('lang.message')}}</label>
          <textarea name="message" class="form-control my-2 welcome" placeholder="send your message"></textarea>
          <button class="btn btn-block btn-success my-3">{{trans('lang.submit')}} <i class="fa fa-send"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
