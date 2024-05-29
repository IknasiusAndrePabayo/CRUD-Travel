<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('assets/dist/img/LOGO.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">TravelQyta</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
  <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-header">Main Menu</li>
        <li class="nav-item">
          <a href="home" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Dashboard</p>
          </a>
        </li>
        
        <li class="nav-header">Management</li>

        
        <li class="nav-item">
        @canany(['create-role', 'edit-role', 'delete-role'])
          <a href="{{ route('permission') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage Permission</p>
          </a>
        @endcanany
        </li>

        
        <li class="nav-item">
        @canany(['create-role', 'edit-role', 'delete-role'])
          <a href="{{ route('roles.index') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage Role</p>
          </a>
        @endcanany
        </li>


        <li class="nav-item">
        @canany(['create-user', 'edit-user', 'delete-user'])
          <a href="{{ route('users.index') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage User</p>
          </a>
        @endcanany
        </li>
        


        <li class="nav-item">
        @canany(['create-travel-package', 'edit-travel-package', 'delete-travel-package'])
          <a href="{{ route('travel_packages.index') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage Travel Packages</p>
          </a>
        @endcanany
        </li>

        <li class="nav-item">
        @canany(['create-pesanan', 'edit-pesanan', 'delete-pesanan', 'show-pesanan'])
          <a href="{{route('pesanan.index') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Manage Pesanan</p>
          </a>
        @endcanany
        </li>
        <li class="nav-header">Exit</li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>