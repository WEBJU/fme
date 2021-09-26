@include('partials.head')
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/Logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
@include('partials.navbar')

  <div class="registration-form" style="margin-top:100px;">

         <form action="{{route('login.post')}}" method="post">
           @csrf
             <div class="form-icon">
                 <span><img src="assets/img/logo/Logo.png" alt="" height="60px" width="60px"></i></span>
             </div>
              <p class="register-text">Sign in</p>
               @include('messages/flash-message')
             <div class="form-group">
                 <input type="text" class="form-control item" id="username" name="email" placeholder="Email" required>
             </div>
             <div class="form-group">
                 <input type="password" class="form-control item" id="password" name="password" placeholder="Password" required>
             </div>

             <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block">Login</button>
             </div>
             <div class="form-group already_registered">
              <div class="float-left ">
                <a href="/register">New here?Register..</a>
              </div>
              <div class="float-right">
                <a href="/forgot">Forgot Password?</a>
              </div>
             </div>
         </form>
         <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f" title="Facebook"></i></a>
                <a href="#"><i class="fab fa-google" title="Google"></i></a>
                <a href="#"><i class="fab fa-twitter" title="Twitter"></i></a>
            </div>
        </div>
     </div>
@include('partials.footer')
    </body>
</html>
