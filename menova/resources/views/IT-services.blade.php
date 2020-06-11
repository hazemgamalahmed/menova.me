@extends('header')
@section('content')

          <!-- start our supprt mation -->
          <div class = "support-menaova">
              <div class="container">
                  <h1>IT Support</h1>
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="support-me">
                              <ul>
                                  <li class="back-face">All Technical Support Services (Onsite and Remote)</li>
                                  <li class="back-face">IT Infrastructure Services & Building IT Networks </li>
                                  <li class="back-face">Cameras Networks (Building\installation\Support) </li>
                                  <li class="back-face">Supporting All Microsoft products (Building & Support)</li>
                                  <li class="back-face">IT Consultancy</li>
                                  <li class="back-face">IT Operations</li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="support-me">
                              <ul>
                                  <li class="back-face">Virtualization</li>
                                  <li class="back-face">Network & Communications</li>
                                  <li class="back-face">technical Training</li>
                                  <li class="back-face">Desktop & Device Management</li>
                                  <li class="back-face">Architecture & Planning</li>
                                  <li class="back-face">IT Outsourcing Services</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end our supprt mation -->
          <!-- start menaova levels -->
          <div class = "our-tools">
              <div class="container">
                  <div class="conten-tools">
                  <p>Menova delivers different levels of IT Supporting, IT Solutions, IT Outsourcing and all IT Services depending upon the nature and situation of our business partners. However, 
                      the following is a list of common reasons why Menova
                       IT Services will be your Choice Trusted Partner in all IT 
                       Services Supporting
                </p>
                <button class="my-btn-learn">Learn more</button>
            </div>
              </div>
          </div>
          <!-- end menaova levels -->
          <!-- start contact it services -->
          <div class = "my-form">
              <div class="container">
                @if($errors->any())
                <ul>
                  @foreach($errors->all() as $my_er)
                  <li>{{$my_er}}</li>
                  @endforeach
                </ul>
                @endif
                  <div class="form-me">
                      <h1>let your request</h1>
                      <form class="form-group forms" method="POST" action="{{url('insert/serve')}}">
                        {!! csrf_field() !!}
                          <label>Name :</label>
                          <input class="form-control welcome" type="text" name="username"  placeholder="Your Name"/>
                          <label>Email :</label>
                          <input class="form-control welcome" type="text" name="email"  placeholder="Your Email"/>
                          <label>Phone :</label>
                          <input class="form-control welcome" type="text" name="phone"  placeholder="Your Phone"/>
                          <label>message</label>
                          <textarea name="message" class = "form-control welcome" placeholder="send your message"></textarea>
                          <button class="my-btn">submit</button>
                      </form>
                  </div>
              </div>
          </div>
       @endsection