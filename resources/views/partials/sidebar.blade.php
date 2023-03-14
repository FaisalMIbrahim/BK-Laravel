
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand pt-3 pr-2">
        <img src="{{ asset('stisla-master/assets/img/logo1.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
      </div>
      <div class="sidebar-brand sidebar-brand-sm pt-4">
        <img src="{{ asset('stisla-master/assets/img/logo1.png') }}" alt="logo" width="50" class="shadow-light rounded-circle">
      </div>
<br><br><br>
      @if (Auth::user()->role_user == 1)
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="{{ request()->is('admin.dashboard*') ? 'active' : '' }}"><a class="nav-link"
                  href="{{ route('admin.dashboard') }}"><i class='fas fa-tachometer-alt' style='font-size:24px'></i>
                  <span>Dashboard</span></a></li>
            <li class="menu-header">Data</li>
            <li class="{{ request()->is('user*') ? 'active' : '' }}"><a class="nav-link"
              href="{{ route('user.index') }}"><i class='fas fa-users' style='font-size:24px'></i>
            <span>Data User</span></a></li>
            <li class="{{ request()->is('siswa*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('siswa.index') }}"><i class='fas fa-user-graduate' style='font-size:24px'></i>
            <span>Data SISWA</span></a></li>
           <li class="{{ request()->is('pendidik*') ? 'active' : '' }}"><a class="nav-link"
                  href="{{ route('pendidik.index') }}"><i class='fas fa-user-tie' style='font-size:24px'></i>
                  <span>Data Pendidik</span></a></li>
            <li class="{{ request()->is('kelas*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('kelas.index') }}"><i class='fas fa-landmark' style='font-size:24px'></i>
              <span>Kelas</span></a></li>
              <li class="{{ request()->is('point*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('point.index') }}"><i class='fas fa-clipboard-list' style='font-size:24px'></i>
          <span>Point</span></a></li>
       </ul>

         @elseif (Auth::user()->role_user == 2)
           <ul class="sidebar-menu">
             <li class="menu-header">Dashboard</li>
             <li class="nav-item dropdown">
              <li class="{{ request()->is('bk.dashboard*') ? 'active' : '' }}"><a class="nav-link"
            href="{{ route('bk.dashboard') }}"><i class='fas fa-tachometer-alt' style='font-size:24px'></i>
      <span>Dashboard</span></a></li>
         
            <li class="menu-header">Data </li>
            <li class="{{ request()->is('pelanggaran*') ? 'active' : '' }}"><a class="nav-link"
              href="{{ route('pelanggaran.index') }}"><i class='fas fa-marker' style='font-size:24px'></i>
        <span>Data Point Siswa</span></a></li>
        <li class="{{ request()->is('total_point*') ? 'active' : '' }}"><a class="nav-link"
          href="{{ route('total_point.index') }}"><i class='fas fa-file-invoice' style='font-size:24px'></i>
    <span>Total Point Siswa</span></a></li>
              <li class="{{ request()->is('cetak*') ? 'active' : '' }}"><a class="nav-link"
                href="cetak"><i class='fas fa-print' style='font-size:24px'></i>
          <span>Cetak Surat</span></a></li>
              <li class="{{ request()->is('laporan*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('laporan.index') }}"><i class='fas fa-file-alt' style='font-size:24px'></i>
          <span>Laporan</span></a></li>
             </li>
           </ul>
          @elseif (Auth::user()->role_user == 3)
            <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <li class="{{ request()->is('wali.dashboard*') ? 'active' : '' }}"><a class="nav-link"
              href="{{ route('wali.dashboard') }}"><i class='fas fa-tachometer-alt' style='font-size:24px'></i>
        <span>Dashboard</span></a></li>
              <li class="menu-header">WALI KELAS</li>
              <li class="{{ request()->is('lihat_data*') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('lihat_data') }}"><i class='fas fa-landmark' style='font-size:24px'></i>
              <span>Data Kelas</span></a></li>
              
           </ul>


         @elseif (Auth::user()->role_user == 4)
           <ul class="sidebar-menu">
            <li class="menu-header">SISWA</li>
             <li class="nav-item dropdown">
                <li class="{{ request()->is('dashboard_siswa*') ? 'active' : '' }}"><a class="nav-link"
              href="{{ route('dashboard_siswa.index') }}"><i class='fas fa-tachometer-alt' style='font-size:24px'></i>
        <span>Dashboard</span></a></li>
           
              </ul>
             @endif

            <div class="mt-4 mb-5 p-4 hide-sidebar-mini">
              <a href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class='fas fa-sign-out-alt pl-5' style='font-size:20px' ></i>Logout
              </a>
            </div>
  
    </aside>
  </div>