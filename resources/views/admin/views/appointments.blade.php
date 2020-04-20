@extends("admin.layouts.layout")

@section("title","Admin Dsshboard")
@section("content")
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:#3061b0;">APPOINTMENTS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Appointments</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <div class="col-md-4">

          <form action="/searchapp" method="get">
      <div class="input-group">
        <input type="search" name="search" placeholder="Search user" class="form-control">
        <span class="input-group-prepend">
          <button class="btn btn-primary" type="submit">
            search
            <i class="fas fa-search"></i>
          </button>
</span>
       
      </div>
    </form></div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
 
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <form class="form-horizontal" method="post" action="{{'/message'}}">
        {{csrf_field()}}
        <div class="form-group">
        <label for="name" class="col-md-4 control-label" style="color:#3061b0;">ENTER MESSAGE</label>

        <div class="col-md-6">
        <textarea id="name" class="form-control" name="message" value="Schedule is succeed" required autofocus></textarea>
        <br><button class="btn btn-primary" type="submit"style="margin-left:430px;">SEND</button></div>
        </div>
       
        <table id="example2" class="table table-striped table-hover">
                <thead style="color:#5983d9;">
                <tr>
                <th></th>
                  <th>Mobile</th>
                  <th>Name</th>
                  <th>Tutor</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Action</th>
               
                </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                <tr>
                <td><input type="checkbox" name="mobile[]" class="checkbox" value="{{$row->phone}}"></td>
                  <td style="color:blue;">{{$row->phone}}</td>
                  <td> {{$row->name}}</td>
                  <td> {{$row->tutor}}</td>
                  <td>{{$row->date}}</td>
                  <td>{{$row->time}}</td>
                  <td><a href="/deleteapp/{{$row->id}}" class="btn btn-danger"><i class="fas fa-trash-alt" id="del"></i></a></td>
                
                </tr>
            
                @endforeach
                
         </tbody>
         </table>
          </section>
         
@endsection