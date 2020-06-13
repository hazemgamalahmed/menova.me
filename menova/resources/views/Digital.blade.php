@extends('header')
@section('content')
 <div class = "software">
              <h1 style="text-align:center">last works about digital marketing</h1>
              <div class="container">
                  <div class = "row">
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="assets/desk.png" width = "50%" height="50%" />
                          </div>
                          <div style="text-align:center">
                              <p>SEO Project</p>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="assets/web.png" widht="50%" height="50%"/>
                          </div>
                          <div style="text-align:center">
                              <p>Medaia Player</p>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="assets/android.png"/>
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
                      <h1>Digital marketing request</h1>
                      <form class="form-group forms" method="POST" action="{{url('insert/digital')}}">
                      	{!! csrf_field() !!}
                          <label>Name :</label>
                          <input class="form-control welcome" type="text" name="username"  placeholder="Your Name"/>
                          <label>Email :</label>
                          <input class="form-control welcome" type="text" name="email"  placeholder="Your Email"/>
                          <label>Phone :</label>
                          <input class="form-control welcome" type="text" name="phone"  placeholder="Your Phone"/>
                          <label>message</label>
                          <textarea name = "message" class = "form-control welcome" placeholder="send your message"></textarea>
                          <button class="my-btn">submit</button>
                      </form>
                  </div>
              </div>
          </div>
@endsection