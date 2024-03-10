<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.php">logo</a>
    <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <div class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Doctor</span>
        <i class="menu-arrow"></i>
</div>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/doc/create">Add</a></li>
          <li class="nav-item"> <a class="nav-link" href="/doc">View</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">Appointments</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{url('/user')}}">Add</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{url('/patient')}}">View</a></li>
        </ul>
      </div>
      <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/dprofile')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Doctor Profile</span>
      </a>
    </li>
    </li>
  </ul>
</nav>