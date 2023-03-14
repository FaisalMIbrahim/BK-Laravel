<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
  </form>

    <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg nav-link-user">
        <img alt="image" src="{{ asset('stisla-master/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block pt-5">Hi, {{ Auth::user()->nama_lengkap  }}</div></a>
        <div class="dropdown-menu dropdown-menu-right">
        </div>
      </li>
    </ul>
  
</nav>