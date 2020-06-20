   <footer class="bg-dark text-white">
     <div class="container">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12 my-4">
           <div class="any-data">
             <h4>{{trans('lang.contacts')}}</h4>
             <ul class="list-unstyled">
               <li>info@menaova.me</li>
               <li>+2 0100101010</li>
             </ul>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 my-4">
           <div class="any-data">
             <h4>{{trans('lang.mainSer')}}</h4>
             <ul class="list-unstyled">

               <li><a class="text-white text-decoration-none" href="{{url('services')}}">{{trans('lang.services')}}</a></li>
               <li><a class="text-white text-decoration-none" href="{{url('Development')}}">{{trans('lang.Software')}}</a></li>
               <li><a class="text-white text-decoration-none" href="{{url('Digital')}}">{{trans('lang.marketing')}}</a></li>
             </ul>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 my-4">
           <div class="any-data">
             <h4>{{trans('lang.follow')}}</h4>
             <ul class="list-unstyled">

               <li><a class="text-white text-decoration-none" href="#"><i class="fa text-black-50 fa-twitter" aria-hidden="true"></i> Twitter</a></li>
               <li><a class="text-white text-decoration-none" href="#"><i class="fa text-black-50 fa-facebook-official" aria-hidden="true"></i> FaceBook</a></li>
               <li><a class="text-white text-decoration-none" href="#"> <i class="fa text-black-50 fa-github" aria-hidden="true"></i> Github</a></li>
             </ul>
           </div>
         </div>

       </div>

     </div>
     <hr class="m-0 p-0" />
     <div class="text-center p-1">
      Copyrights &copy all rights reserved menaova.me 2020
     </div>
   </footer>
   <!-- endfooter footer -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="{{ asset('js/map.js') }}" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="{{ asset('js/main.js') }}"></script>
   </body>
   </html>
