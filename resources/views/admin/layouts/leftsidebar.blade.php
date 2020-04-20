<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">VIRAJA DS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/img1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ishani Udara</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/dashboard') }}" class="nav-link {{'dashboard' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a></li>

          
          <li  class="nav-item has-treeview">>
            <a href="/appointments" class="nav-link {{'appointments' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              <span class="badge badge-info right">9</span>
                Appointments
                
               
              </p>
            </a></li>
            
          
          <li class="nav-item has-treeview">
            <a href="{{ url('/user') }}" class="nav-link {{'user' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User management
                
              </p>
            </a></li>

            <li class="nav-item has-treeview">
            <a href="{{ url('/enquiry') }}" class="nav-link {{'enquiry' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Inquiries
                <span class="badge badge-danger right">4</span>
              </p>
            </a></li>
           
          <li class="nav-item ">
            <a href="{{ url('/payment') }}" class="nav-link {{'payment' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Payment Management
              
              </p>
            </a></li>
           
         
          <li class="nav-item">
            <a href="{{ url('/time') }}" class="nav-link {{'time' == request()->path() ? 'active' :''}}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Time schedulling
                
              </p>
            </a>
          </li>
          
          
            
          <li class="nav-item ">
            <a href="{{ url('/report') }}" class="nav-link {{'report' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Reports
                
              </p>
            </a></li>

    </div>
    <!-- /.sidebar -->
  </aside>
