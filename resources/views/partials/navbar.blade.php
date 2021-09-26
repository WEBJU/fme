
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Sign In</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <form action="/signin" method="post">
             @csrf
             <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
              </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
        </div>
      </div>
    </div>
  </div>

<div class="header-area header-transparent">
    <div class="main-header">
       <div class="header-bottom  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                          <a href="/"><img class="img-responsive" src="{{asset ('logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-8">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">

                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    @if (Auth::user())
                                    @if (Auth::user()->role == 'admin')
                                    <li><a href="/admin">Admin Dashboard</a></li>
                                    @endif
                                    <li><a href="/profile">Profile</a></li>
                                    @endif
                                    <li><a href="/categories">Catagories</a></li>
                                    <li><a href="/gamers">Gamers League</a></li>
                                    <li><a href="/gallery">Gallery</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li class="add-list"><a href="{{url('events/create')}}"><i class="ti-plus"></i> add Event</a></li>
                                    @if (Auth::user())
                                        <li><a href="/logout"><i class="ti-door"></i> Logout</a></li>
                                    @else
                                    <li class="login">
                                        <button type="button" style="border: none; margin:0; padding:0; background:none;" data-toggle="modal" data-target="#staticBackdrop">
                                            <i class="ti-user"></i> Sign in
                                        </button>
                                    </li>
                                    <li> <a href="/register"><i class="ti-user"></i>Register</a> </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
