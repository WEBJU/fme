
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

    <main>
        <div class="container" style="margin-top:100px;">
            <div class="registration-form mt-5 pt-5">

                <form method="post" action="{{route('register.post')}}">
                  @csrf

                    <div class="form-icon">
                        <span><img src="assets/img/logo/Logo.png" alt="" height="60px" width="60px"></i></span>
                    </div>
                     <p class="register-text">Create your free account</p>
                      @include('messages/flash-message')
                    <div class="form-group">
                        <input type="text" class="form-control item" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" id="email" name="email" placeholder="Email" required>
                    </div>
                    {{-- <div class="form-group">
                        <input type="text" class="form-control item" id="role" name="role" placeholder="Role" required>
                    </div> --}}
                    <div class="form-group">
                        <select class="form-control item w-100 p-1 pl-3" name="role">
                            <option>Role</option>
                            <option>User</option>
                            <option>Event Host</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control item" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control item" id="confirm_password" name="confirm" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                    </div>
                    <div class="form-group justify already_registered">
                      <a href="/login">Already registered?Login</a>
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
        </div>
    </main>

   @include('partials.footer')

    </body>
</html>
