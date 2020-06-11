@extends('header')
@section('content')          
          <!-- end cinema div -->
          <!-- start choice me -->
          <div class="choice-val">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="choice-me">
                              <h1>Why we are your choice?</h1>
                              <p>
                                  We have our experienced teamwork and also have a big network of freelancers with many projects categorized according industries, So  you will get your App in a professional and fast way.
                              </p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="choice-images">
                              <img class="image-fluid" src = "assets/choice.jpg">
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
                  <p>One of Menova Services is to be a trusted partner as a software development house we design and develop professional Business Solutions which are presented to our customers with the most friendly and easy to use interfaces. And we have an experienced teamwork to analysis and develop our client’s needs
                </p>
                <p>Our Target </p>
            </div>
              </div>
          </div>
          <!-- end our target -->
          <!-- start our software -->
          <div class = "software">
              <h1 style="text-align:center">Our Software Developing Fields</h1>
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
                      <h1>let your request</h1>
                    <form class="form-group forms" method="POST" action="{{url('insert/developers')}}">
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