<html>
<title>User dashboard</title>
  <link rel="shortcut icon" href="images/t.jpg">
 
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <style>
    .fc-toolbar .fc-state-active, .fc-toolbar .ul-state-active{
        background-color:blue;
        color:white;

    } 
    .fc-widget-header{
        background-color:#3061b0;
        font-family:times new romes;
        font-size:15px;
    }
    .fc-day-grid{
        background-color:lightblue;
    }
    .fc-button-group{
        background-color:red;
    }
    .fc-state-default{
        background-color:greenyellow;
    }
    .fc .fc-button-group{
        background-color:greenyellow;
    }
    </style>

</head>
<body>
<div class="wrapper">

<!-- Navbar -->

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
          <li class="nav-item has-treeview ">
            <a href="{{ url('/dashboard') }}" class="nav-link {{'dashboard' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>

          
          <li class="nav-item has-treeview">
            <a href="{{ url('/appointments') }}" class="nav-link {{'appointments' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Appointments
                
                <span class="badge badge-info right">6</span>
              </p>
            </a>
         
          
          <li>
            <a href="{{ url('/user') }}" class="nav-link {{'user' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User management
                
              </p>
            </a>
            <li class="nav-item has-treeview">
            <a href="{{ url('/enquiry') }}" class="nav-link {{'enquiry' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Enquiries
                
              </p>
            </a>
           
          <li class="nav-item has-treeview">
            <a href="{{ url('/payment') }}" class="nav-link {{'payment' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Payment Management
                
              </p>
            </a>
         
         
          <li class="nav-item">
            <a href="{{ url('/time') }}" class="nav-link {{'time' == request()->path() ? 'active' :''}}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Time schedulling
                
              </p>
            </a>
          </li>
  
            
          <li >
            <a href="{{ url('/report') }}" class="nav-link {{'report' == request()->path() ? 'active' :''}}">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
    </div>
    <!-- /.sidebar -->
  </aside>


<div style="margin-left:300px; margin-top:30px;">
<h2 class="" style="color:#3061b0;">TIME SCHEDULE</h2>
<div class="row">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addevent">+ EVENTS</button>
<span></span>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delevent"><i class="fas fa-trash-alt"></i>EVENTS</button>

</div>
<div class="modal fade" role="dialog" id="delevent">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title">DELETE EVENT</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
         
          <div class="modal-body">
          <table class="table table-bordered table-hover">
          <thead>
                <tr>
                  <th>ID</th>
                  <th> Title</th>
                  <th>Date</th>
                 
                  <th>NO_Of_Users</th>
                 
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                <tr>
                  <td>{{$event->id}}</td>
                  <td>{{$event->title}}
                  </td>
                  <td>{{$event->start_date}}</td>
                  
                  <td> {{$event->NO_Of_users}}</td>
                  <td><a href="/delevent/{{$event->id}}" class="btn btn-danger">DELETE</a></td>
                 
                </tr>
               @endforeach
         </tbody>
         </table>
         </div>
         </div>
         </div>
         </div>
<div class="modal fade" role="dialog" id="addevent">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title">ADD EVENT</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
         
          <div class="modal-body">
          <form method="post" action="/storeevent">
          {{csrf_field()}}
<label for="">Enter name of the event</label>
<input type="text" class="form-control" name="title" placeholder="enter the title"/><br><br>

<label for="">Enter color</label>
<input type="color" class="form-control" name="color" placeholder="enter the color"/><br><br>

<label for="">Enter start Date</label>
<input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="enter the date"/><br><br>

<label for="">Enter end Date</label>
<input type="datetime-local" class="form-control" name="end_date"class="date" placeholder="enter the date"/><br><br>


<label for="">Enter number of users</label>
<input type="text" class="form-control" name="No_Of_user" placeholder="enter the number of users"/><br><br>

<input type="submit" class="btn btn-primary" name="submit">
</form>
</div>
</div>
</div>
</div>
</div>
<br>
<br>

<div class="row">

<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading" style="background;gray; color:white;">

Time Schedulling
</div>
<div class="card col-lg-12" style="margin-left:300px;">
<div class="card-body">
<div class="panel-body" id="calendar" style="background;gray; color:white;">
{!! $calendar->calendar() !!}
{!! $calendar->script() !!}

</div>
</div>
</div>
</div>
</div>

       
<footer class="main-footer" style="margin-top:300px;">
    <strong>Copyright &copy; 2019 <a href="http://adminlte.io"></a>IU</strong>
    All rights reserved.
  </footer>
  
</body>
</html>