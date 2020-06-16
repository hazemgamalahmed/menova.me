@extends('header')
@section('content')          
          <!-- end cinema div -->
          <!-- start choice me -->
          <div class="choice-val">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="choice-me">
                              <h1>{{trans('lang.why')}}</h1>
                              <p>
                                 {{trans('lang.resone')}}
                              </p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="choice-images">
                              <img class="image-fluid" src = "{{url('../public/assets/choice.jpg')}}">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end choice me -->
          <!-- start our target -->
          <div class = "our-tools">
              <div class="container">
                  <div class="conten-tools">
                  <p>{{trans('lang.MSE')}}
                </p>
                <p>{{trans('lang.target')}}</p>
            </div>
              </div>
          </div>
          <!-- end our target -->
          <!-- start our software -->
          <div class = "software">
              <h1 style="text-align:center">{{trans('lang.OSF')}}</h1>
              <div class="container">
                  <div class = "row">
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="assets/desk.png" width = "50%" height="50%" />
                          </div>
                          <div style="text-align:center">
                              <p>desktop app</p>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="assets/web.png" widht="50%" height="50%"/>
                          </div>
                          <div style="text-align:center">
                              <p>web app</p>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class = "software-dev">
                              <img class="image-fluid" src ="assets/android.png"/>
                          </div>
                          <div style="text-align:center">
                              <p>android apps</p>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
          <!-- end our software -->
          <div class = "my-form">
              <div class="container">
                @if($errors->any())
                @foreach($errors->all() as $my_err)
                <ul>
                  <li>{{$my_err}}</li>
                </ul>
                @endforeach
                @endif
                  <div class="form-me">
                      <h1>{{trans('lang.request')}}</h1>
                    <form class="form-group forms" method="POST" action="{{url('insert/developers')}}">
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