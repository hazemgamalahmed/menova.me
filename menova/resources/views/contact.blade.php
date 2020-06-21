@extends('header')
@section('title')
Contact Us
@endsection
@section('content')
<!-- start from -->
<div class="my-form my-5">
  <div class="container">
    <div class="form-me">
      @if($errors->any())
      <ul>
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
      </ul>
      @endif
      <h1 class="text-center my-5">{{trans('lang.contacts')}}</h1>
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
          <form class="form-group forms" method="POST" action="{{url('insert/customer')}}">
            {!! csrf_field() !!}
            <label>{{trans('lang.name')}} :</label>
            <input class="form-control my-3 welcome" type="text" name="username" placeholder="Your Name" />
            <label>{{trans('lang.email')}} :</label>
            <input class="form-control my-3 welcome" type="text" name="email" placeholder="Your Email" />
            <label>{{trans('lang.phone')}} :</label>
            <input class="form-control my-3 welcome" type="text" name="phone" placeholder="Your Phone" />
            <label>{{trans('lang.message')}}</label>
            <textarea name="message" class="form-control welcome" placeholder="send your message"></textarea>
            <button class="btn btn-block btn-success my-3">{{trans('lang.submit')}}</button>
          </form>
        </div>
        <div class="col-12 col-md-6">
          <div id="map-container-google-9" class="z-depth-1-half map-container-5">
            <iframe src="https://maps.google.com/maps?q=Madryt&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
