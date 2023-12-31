<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/providers" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              providers
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/providersReq" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              providersReq
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/services" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Services
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/products" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/categories" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/cars" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Cars
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.logout') }}"
              onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
              <i class=" nav-icon fas fa-sign-out-alt"></i>
              <span class="link">
                {{__('Logout')}}
              </span>
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>