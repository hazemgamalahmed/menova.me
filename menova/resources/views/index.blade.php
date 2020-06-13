@extends('header')
@section('content')
          <div class = "who-us">
              <div class="container">
                  <div class="row">
                      <div class = "col-lg-6">
                          <div class = "text-data">
                              <h1>welcome to menova</h1>
                              <p>Menova seeks to be Trusted partner for IT Support, IT Solutions, Outsourcing Services and all IT Services in Egypt and Middle East Region.</p>
                          </div>
                      </div>
                      <div class = "col-lg-6">
                          <img class="img-fluid" src="assets/site-img20.png" />
                      </div>
                  </div>
              </div>
          </div>
          <!-- end cinema div -->
        
          <!-- start menaova values -->
          <div class="our-values">
              <div class = "container">
                 <h1>our values</h1>
                 <div class="row">
                     <div class="col-lg-6 col-md-4 col-sm-12">
                         <div class="value-ex">
                             <ul>
                             <li class="ser-val">innovation</li>
                             <li class="ser-val">experiance</li>
                             <li class="ser-val">flixabilty</li>
                         </ul>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-4 col-sm-12">
                         <div class="value-ex">
                             <ul>
                             <li class="ser-val">excellency</li>
                             <li class="ser-val">commitment</li>
                             <li class="ser-val">team work</li>
                         </ul>
                         </div>
                     </div>
                 </div>
              </div>
          </div>
          <!-- end menaova values -->
          
          <!-- start our providers -->
          <div class = "providers">
              <div class = "container">
                  <h1>our services</h1>
                  <div class = "row">
                      <div class="col-lg-4 col-sm-12 col-md-6">
                          <div class="my-image">
                              <img class = "img-fluid" src="{{url('../public/assets/itsol.jpg')}}" />
                              <!-- <a href = "#"><div class = "caption">
                                  <h3>IT Services</h3>
                              </div></a> -->
                           <div style="display:inline-block">
                                  <p>welcome</p>
                              </div>
                          </div>
                          
                         
                      </div>
                      
                      <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="my-image">
                            <img class = "img-fluid" src="{{url('../public/assets/developIt.jpg')}}" />
                            
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="my-image">
                            <img class = "img-fluid" src="{{url('../public/assets/Digital.jpg')}}" />
                            <!-- <a href = "#"><div class = "caption">
                                <h3>Digital Marketing</h3>
                            </div></a> -->

                        </div>
                    </div>
                  </div>
              </div>
          </div>
          <!-- end our providers -->
          
          <!-- start footer -->
        @endsection
