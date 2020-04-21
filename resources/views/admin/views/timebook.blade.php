@extends("admin.layouts.layout2")
@section("title","Admin Dsshboard")
@section("content")
<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 style="color:#3061b0;">AVAILABLE TIMES</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Time</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- search available time by title -->
    <div class="col-md-4">

<form action="/searchtime" method="get">
<div class="input-group">
<input type="search" name="search" placeholder="Search time" class="form-control" style="margin-right:0px;">
<span class="input-group-prepend">
<button class="btn btn-primary" type="submit">
  search
  <i class="fas fa-search"></i>
</button>
</span>

</div>
</form></div>
    <section class="content" style="margin-right:50px; margin-left:50px;">
      <div class="container-fluid">
      <table id="example2" class="table table-striped table-hover">
                <thead style="color:#5983d9;" >
                <tr>
                  <th>Subject</th>
                  <th> Start Date/time</th>
                  <th>End Date/time</th>
                  <th>Number of booking</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- get tim slots from database -->
                @foreach($events as $event)
                <tr>
                  <td  class="table-primary">{{$event->title}}</td>
                  <td>{{$event->start_date}}
                  </td>
                  <td  class="table-primary">{{$event->end_date}}</td>
                  <td> {{$event->NO_Of_users}}</td>
                  <td> <a href="{{ url('/makeappointment') }}" class="button btn btn-primary"> BOOK NOW<td>
                  
                 
                </tr>
               @endforeach
         </tbody>
         </table>
          </section>
         
@endsection