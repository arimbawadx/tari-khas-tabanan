<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <span class="brand-link">
    <span class="brand-text font-weight-light">BIT</span>
    <span class="brand-text font-weight-light">Progress</span>
  </span>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('lte/dist/img/bit-bg-w.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{session()->get('dataLoginCustomers')['name']}}</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/customers" class="nav-link{{ request()->is('customers') ? ' active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/customers/project/add-projects" class="nav-link{{ request()->is('customers/project/add-projects') ? ' active' : '' }}">
            <i class="nav-icon fas fa-calendar-plus"></i>
            <p>Add Projects & Items</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/customers/projects" class="nav-link{{ request()->is('customers/projects') ? ' active' : '' }}">
            <i class="nav-icon fas fa-hammer"></i>
            <p>Projects</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/customers/reports/progress-reports" class="nav-link{{ request()->is('customers/reports/progress-reports') ? ' active' : '' }}">
            <i class="nav-icon fas fa-print"></i>
            <p>Progress Reports</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>