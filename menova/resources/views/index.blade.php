@extends('header')
@section('content')
          <div class = "who-us">
              <div class="container">
                  <div class="row">
                      <div class = "col-lg-6">
                          <div class = "text-data">
                              <h1>{{trans('lang.welcome')}}</h1>
                              <p>{{trans('lang.seeks')}}</p>
                          </div>
                      </div>
                      <div class = "col-lg-6">
                          <img class="img-fluid" src="{{url('../public/assets/site-img20.png')}}" />
                      </div>
                  </div>
              </div>
          </div>
          <!-- end cinema div -->
        
          <!-- start menaova values -->
          <div class="our-values">
              <div class = "container">
                 <h1>{{trans('lang.values')}}</h1>
                 <div class="row">
                     <div class="col-lg-6 col-md-4 col-sm-12">
                         <div class="value-ex">
                             <ul>
                             <li class="ser-val">{{trans('lang.innovate')}}</li>
                             <li class="ser-val">{{trans('lang.exper')}}</li>
                             <li class="ser-val">{{trans('lang.flix')}}</li>
                         </ul>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-4 col-sm-12">
                         <div class="value-ex">
                             <ul>
                             <li class="ser-val">{{trans('lang.excell')}}</li>
                             <li class="ser-val">{{trans('lang.comm')}}</li>
                             <li class="ser-val">{{trans('lang.team')}}</li>
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
                  <h1>{{trans('lang.serv')}}</h1>
                  <div class = "row">
                      <div class="col-lg-4 col-sm-12 col-md-6">
                          <div class="my-image">
                              <img class = "img-fluid" src="{{url('../public/assets/itsol.jpg')}}" />
                              <a href = "{{url('services')}}"><div class = "caption">
                                  <h3>{{trans('lang.Software')}}</h3>
                              </div></a>
                        
                          
                         
                      </div>
                      
                          </div>
                      <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="my-image">
                            <img class = "img-fluid" src="{{url('../public/assets/developIt.jpg')}}" />
                             <a href = "{{url('Development')}}"><div class = "caption">
                                  <h3>{{trans('lang.services')}}</h3>
                              </div></a>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="my-image">
                            <img class = "img-fluid" src="{{url('../public/assets/Digital.jpg')}}" />
                            <a href = "{{url('Digital')}}"><div class = "caption">
                                <h3>{{trans('lang.marketing')}}</h3>
                            </div></a>

                        </div>
                    </div>
                  </div>
              </div>
          </div>
          <!-- end our providers -->
          
          <!-- start footer -->
        @endsection
