@extends('header')
@section('content')
 <div class = "software">
              <h1 style="text-align:center">{{trans('lang.LSM')}}</h1>
              <div class="container">
                  <div class = "row">
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="{{ asset('img/desk.png')}}" width = "50%" height="50%" />
                          </div>
                          <div style="text-align:center">
                              <p>SEO Project</p>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="{{ asset('img/web.png')}}" widht="50%" height="50%"/>
                          </div>
                          <div style="text-align:center">
                              <p>Medaia Player</p>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="{{ asset('img/android.png')}}"/>
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
                  <ul>
                  	<li>{{$error}}</li>
                  </ul>
                  @endforeach
                  @endif
<div class = "my-form">
              <div class="container">
                  <div class="form-me">
                      <h1>{{trans('lang.DR')}}</h1>
                      <form class="form-group forms" method="POST" action="{{url('insert/digital')}}">
                      	{!! csrf_field() !!}
                          <label>{{trans('lang.name')}}</label>
                          <input class="form-control welcome" type="text" name="username"  placeholder="Your Name"/>
                          <label>{{trans('lang.email')}}</label>
                          <input class="form-control welcome" type="text" name="email"  placeholder="Your Email"/>
                          <label>{{trans('lang.phone')}}</label>
                          <input class="form-control welcome" type="text" name="phone"  placeholder="Your Phone"/>
                          <label>{{trans('lang.message')}}</label>
                          <textarea name = "message" class = "form-control welcome" placeholder="send your message"></textarea>
                          <button class="my-btn">{{trans('lang.submit')}}</button>
                      </form>
                  </div>
              </div>
          </div>
@endsection