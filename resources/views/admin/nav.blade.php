<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">
 

              <li class="nav-item dropdown border-left">
              @if (Route::has('login'))
						@auth
							<li><a style="margin-right:10px" type="button" class="btn btn-light" href="{{ route('dashboard') }}"><i class="fa fa-sign-in"></i> Logout</a></li>
              <!-- <li><a class="btn btn-success" href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li> -->
						@else
							<li><a style="margin-right:10px" type="button" class="btn btn-light" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
							@if (Route::has('register'))
							<li><a type="button" class="btn btn-light" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register</a></li>
							@endif
						@endauth
					@endif
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>