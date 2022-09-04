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
        <a href="#" class="d-block">{{session()->get('dataLoginCustomerServices')['name']}}</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/customer-services" class="nav-link{{ request()->is('customer-services') ? ' active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item{{ request()->is('customer-services/data-customers') ? ' menu-open' : '' }}{{ request()->is('customer-services/data-programmers') ? ' menu-open' : '' }}{{ request()->is('customer-services/data-cs') ? ' menu-open' : '' }}">

          <a href="#" class="nav-link{{ request()->is('customer-services/data-customers') ? ' active' : '' }}{{ request()->is('customer-services/data-programmers') ? ' active' : '' }}{{ request()->is('customer-services/data-cs') ? ' active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Adminitrasi Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/customer-services/data-customers" class="nav-link{{ request()->is('customer-services/data-customers') ? ' active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Customer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/customer-services/data-programmers" class="nav-link{{ request()->is('customer-services/data-programmers') ? ' active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Programmer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/customer-services/data-cs" class="nav-link{{ request()->is('customer-services/data-cs') ? ' active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Customer Service</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/customer-services/reports/progress-reports" class="nav-link{{ request()->is('customer-services/reports/progress-reports') ? ' active' : '' }}">
            <i class="nav-icon fas fa-print"></i>
            <p>Progress Report</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>