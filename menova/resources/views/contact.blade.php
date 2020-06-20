@extends('header')
@section('content')
          <!-- start from -->
          <div class = "my-form">
              <div class="container">
                  <div class="form-me">
                    @if($errors->any())
                    <ul>
                      @foreach($errors->all() as $err)
                      <li>{{$err}}</li>
                      @endforeach
                    </ul>
                    @endif
                      <h1>{{trans('lang.contacts')}}</h1>
                      <form class="form-group forms" method="POST" action="{{url('insert/customer')}}">
                        {!! csrf_field() !!}
                          <label>{{trans('lang.name')}} :</label>
                          <input class="form-control welcome" type="text" name="username"  placeholder="Your Name"/>
                          <label>{{trans('lang.email')}} :</label>
                          <input class="form-control welcome" type="text" name="email"  placeholder="Your Email"/>
                          <label>{{trans('lang.phone')}} :</label>
                          <input class="form-control welcome" type="text" name="phone"  placeholder="Your Phone"/>
                          <label>{{trans('lang.message')}}</label>
                          <textarea name = "message" class = "form-control welcome" placeholder="send your message"></textarea>
                          <button class="my-btn">{{trans('lang.submit')}}</button>
                      </form>
                  </div>
              </div>
          </div>

           <div class="view view-cascade gradient-card-header peach-gradient">
        <h5 class="mb-0" style="text-align:center">{{trans('lang.custom')}}</h5>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">

        <!--Google map-->
        <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
          <iframe src="https://maps.google.com/maps?q=Madryt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>


      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card-->

  </div>
  <!--Grid column-->

</div>
         @endsection