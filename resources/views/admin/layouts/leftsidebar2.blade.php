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
        

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/userdashboard') }}" class="nav-link {{'userdashboard' == request()->path() ? 'active' :''}}"">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>

          
          <li class="nav-item has-treeview">
            <a href="{{ url('/apply') }}" class="nav-link {{'apply' == request()->path() ? 'active' :''}}"">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Apply
                
              
              </p>
            </a>
          
          
          <li class="nav-item has-treeview">
            <a href="{{ url('/makeappointment') }}" class="nav-link {{'makeappointment' == request()->path() ? 'active' :''}}"">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Appointments
                
              </p>
            </a>
         
         
          
         
            <li class="nav-item has-treeview">
            <a href="{{ url('/paper') }}" class="nav-link {{'paper' == request()->path() ? 'active' :''}}"">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reading Materials
                
              
              </p>
            </a>
          
          
          <li class="nav-item has-treeview">
            <a href="{{ url('/timebook') }}" class="nav-link {{'timebook' == request()->path() ? 'active' :''}}"">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Book Your Time
                
              </p>
            </a>
           
        
          
    </div>
    <!-- /.sidebar -->
  </aside>
