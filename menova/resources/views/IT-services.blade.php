@extends('header')
@section('content')

          <!-- start our supprt mation -->
          <div class = "support-menaova">
              <div class="container">
                  <h1>{{trans('lang.its')}}</h1>
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="support-me">
                              <ul>
                                  <li class="back-face">{{trans('lang.ASS')}}</li>
                                  <li class="back-face">{{trans('lang.infra')}}</li>
                                  <li class="back-face">{{trans('lang.camer')}}</li>
                                  <li class="back-face">{{trans('lang.SM')}}</li>
                                  <li class="back-face">{{trans('lang.ITC')}}</li>
                                  <li class="back-face">{{trans('lang.ITO')}}</li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="support-me">
                              <ul>
                                  <li class="back-face">{{trans('lang.VRT')}}</li>
                                  <li class="back-face">{{trans('lang.NNS')}}</li>
                                  <li class="back-face">{{trans('lang.TT')}}</li>
                                  <li class="back-face">{{trans('lang.DDM')}}</li>
                                  <li class="back-face">{{trans('lang.AP')}}</li>
                                  <li class="back-face">{{trans('lang.TOS')}}</li>
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
                  <p>{{trans('lang.MV')}}
                </p>
                
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
                      <h1>{{trans('lang.request')}}</h1>
                      <form class="form-group forms" method="POST" action="{{url('insert/serve')}}">
                        {!! csrf_field() !!}
                          <label>{{trans('lang.name')}}</label>
                          <input class="form-control welcome" type="text" name="username"  placeholder="Your Name"/>
                          <label>{{trans('lang.email')}}</label>
                          <input class="form-control welcome" type="text" name="email"  placeholder="Your Email"/>
                          <label>{{trans('lang.phone')}}</label>
                          <input class="form-control welcome" type="text" name="phone"  placeholder="Your Phone"/>
                          <label>{{trans('lang.message')}}</label>
                          <textarea name="message" class = "form-control welcome" placeholder="send your message"></textarea>
                          <button class="my-btn">{{trans('lang.submit')}}</button>
                      </form>
                  </div>
              </div>
          </div>
       @endsection