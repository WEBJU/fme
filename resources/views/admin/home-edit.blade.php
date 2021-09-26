@include('partials.dash-head')

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
 @include('partials.dash-sidenav')
   <!--End sidebar-wrapper-->
  

<!--Start topbar header-->
@include('partials.dash-topnav')
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

        @if (session('success'))
        <div class="row justify-content-center">             
            <div class="col-12 btn btn-success" style="width: 100%">
                <h4 style="color: white;" class="pt-2 pb-2">{{ session()->get('success') }}</h4>
            </div>
          </div>
        @endif

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">About Section</div>
           <hr>
            <img src="dashboard/assets/images/about.png" class="img img-responsive" style="max-width: 100%;" alt="">
         </div>
         </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title text-center">Edit Text</div>
           <hr>
            <form method="POST" action="/edit-section">
                @csrf
                <div class="form-group">     
                    <input type="hidden" name="name" value="about">               
                    <textarea placeholder="{{$about->text}}" name="text" class="form-control"  rows="3"></textarea>
                  </div>          
           <div class="form-group text-center">
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-tick"></i> Submit</button>
          </div>
          </form>
         </div>
         </div>

         <div class="card">
            <div class="card-body">
            <div class="card-title text-center">Current Text</div>
            <hr>
             <p class="text-center">{{$about->text}}</p>
          </div>
          </div>
      </div>
    </div><!--End Row-->

    <div class="row mt-3">        

        <div class="col-lg-6">
          <div class="card">
             <div class="card-body">
             <div class="card-title text-center">Edit Text</div>
             <hr>
              <form method="POST" action="/edit-section">
                  @csrf
                  <div class="form-group">     
                      <input type="hidden" name="name" value="event">               
                      <textarea placeholder="{{$event->text}}" name="text" class="form-control"  rows="3"></textarea>
                    </div>          
             <div class="form-group text-center">
              <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-tick"></i> Submit</button>
            </div>
            </form>
           </div>
           </div>

           <div class="card">
            <div class="card-body">
            <div class="card-title text-center">Current Text</div>
            <hr>
             <p class="text-center">{{$event->text}}</p>
          </div>
          </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
              <div class="card-title">Event Planning & Management</div>
              <hr>
               <img src="dashboard/assets/images/event-management.png" class="img img-responsive" style="max-width: 100%;" alt="">
            </div>
            </div>
         </div>
      </div><!--End Row-->

      <div class="row mt-3"> 
          
        <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
              <div class="card-title">Digital Marketing & Social Media Management</div>
              <hr>
               <img src="dashboard/assets/images/digi.png" class="img img-responsive" style="max-width: 100%;" alt="">
            </div>
            </div>
         </div>

        <div class="col-lg-6">
          <div class="card">
             <div class="card-body">
             <div class="card-title text-center">Edit Text</div>
             <hr>
              <form method="POST" action="/edit-section">
                  @csrf
                  <div class="form-group">     
                      <input type="hidden" name="name" value="digital">               
                      <textarea placeholder="{{$digital->text}}" name="text" class="form-control"  rows="3"></textarea>
                    </div>          
             <div class="form-group text-center">
              <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-tick"></i> Submit</button>
            </div>
            </form>
           </div>
           </div>

           <div class="card">
            <div class="card-body">
            <div class="card-title text-center">Current Text</div>
            <hr>
             <p class="text-center">{{$digital->text}}</p>
          </div>
          </div>
        </div>

       
      </div><!--End Row-->

      <div class="row mt-3">                   

        <div class="col-lg-6">
          <div class="card">
             <div class="card-body">
             <div class="card-title text-center">Edit Text</div>
             <hr>
              <form method="POST" action="/edit-section">
                  @csrf
                  <div class="form-group">     
                      <input type="hidden" name="name" value="create">               
                      <textarea placeholder="{{$create->text}}" name="text" class="form-control"  rows="3"></textarea>
                    </div>          
             <div class="form-group text-center">
              <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-tick"></i> Submit</button>
            </div>
            </form>
           </div>
           </div>

           <div class="card">
            <div class="card-body">
            <div class="card-title text-center">Current Text</div>
            <hr>
             <p class="text-center">{{$create->text}}</p>
          </div>
          </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
              <div class="card-title">Creative Thinking</div>
              <hr>
               <img src="dashboard/assets/images/creative.png" class="img img-responsive" style="max-width: 100%;" alt="">
            </div>
            </div>
         </div>

       
      </div><!--End Row-->

      <div class="row mt-3">  
          
        <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
              <div class="card-title">Art & Graphic Design</div>
              <hr>
               <img src="dashboard/assets/images/art.png" class="img img-responsive" style="max-width: 100%;" alt="">
            </div>
            </div>
         </div>

        <div class="col-lg-6">
          <div class="card">
             <div class="card-body">
             <div class="card-title text-center">Edit Text</div>
             <hr>
              <form method="POST" action="/edit-section">
                  @csrf
                  <div class="form-group">     
                      <input type="hidden" name="name" value="art">               
                      <textarea placeholder="{{$art->text}}" name="text" class="form-control" rows="3"></textarea>
                    </div>          
             <div class="form-group text-center">
              <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-tick"></i> Submit</button>
            </div>
            </form>
           </div>
           </div>

           <div class="card">
            <div class="card-body">
            <div class="card-title text-center">Current Text</div>
            <hr>
             <p class="text-center">{{$art->text}}</p>
          </div>
          </div>
        </div>   
        
        

       
      </div><!--End Row-->

      <div class="row mt-3">                    

        <div class="col-lg-6">
          <div class="card">
             <div class="card-body">
             <div class="card-title text-center">Edit Text</div>
             <hr>
              <form method="POST" action="/edit-section">
                  @csrf
                  <div class="form-group">     
                      <input type="hidden" name="name" value="contact">               
                      <textarea placeholder="{{$contact->text}}" name="text" class="form-control" rows="3"></textarea>
                    </div>          
             <div class="form-group text-center">
              <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-tick"></i> Submit</button>
            </div>
            </form>
           </div>
           </div>

           <div class="card">
            <div class="card-body">
            <div class="card-title text-center">Current Text</div>
            <hr>
             <p class="text-center">{{$contact->text}}</p>
          </div>
          </div>
        </div>   
        
        <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
              <div class="card-title">Contact</div>
              <hr>
               <img src="dashboard/assets/images/contact.png" class="img img-responsive" style="max-width: 100%;" alt="">
            </div>
            </div>
         </div>

       
      </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	@include('partials.dash-footer')
</body>
</html>
