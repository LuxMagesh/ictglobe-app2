<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <!-- <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}" class="logo"><img src="./home/img/logo.png" alt=""></a> -->
          <a class="sidebar-brand brand-logo" href="{{url('/')}}"><img src="admin/assets/images/logo.PNG" style="height:45px!important;width:190px!important" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">

          <li class="nav-item nav-category">
            <span class="nav-link">Commands App</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">OS & Platforms</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('view_os')}}">Add Operating System</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('view_platform')}}">Add Platform</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Commands</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('create_command')}}">Add Command</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('show_commands')}}">View Commands</a></li>
              </ul>
            </div>
          </li>

        </ul>
      </nav>