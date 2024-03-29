 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('') }}asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SAW</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('') }}asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>


   <!-- Sidebar Menu -->
   <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item {{ Request::is('dashboard') ? 'menu-is-opening menu-open' : "" }}"">
        <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : "" }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('data_kriteria*') ? 'menu-is-opening menu-open' : "" }}"">
        <a href="/data_kriteria" class="nav-link {{ Request::is('data_kriteria*') ? 'active' : "" }}">
          <i class="nav-icon fas fa-list-alt"></i>
          <p>
            Data Kriteria
          </p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('data_smartphone*') ? 'menu-is-opening menu-open' : "" }}"">
        <a href="/data_smartphone" class="nav-link {{ Request::is('data_smartphone*') ? 'active' : "" }}">
          <i class="nav-icon fas fa-mobile-alt"></i>
          <p>
            Data Smartphone
          </p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('nilai') ? 'menu-is-opening menu-open' : "" }}"">
        <a href="/nilai" class="nav-link {{ Request::is('nilai') ? 'active' : "" }}">
          <i class="nav-icon fas fa-file-alt"></i>
          <p>
            Nilai
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
