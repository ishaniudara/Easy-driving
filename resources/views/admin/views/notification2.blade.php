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
            <h1 class="m-0 text-dark">Messages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notifications</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
    <section class="content">
      <div class="container-fluid">
       <div class="msg">
       <form action="/action_page.php">
  
  
       <label>Write message</label>
       <textarea class="form-control" rows="1" id="comment"></textarea>
       <button="submit" class="btn btn-primary" style="margin-top:10px; margin-bottom:10px;margin-left:900px;">Send Message</button>
       </div>
       
       <div class="alert alert-success">Your appointment is received.</div>
       <div class="alert alert-danger">Your appointment is cancelled.</div>
 
          </section>
          </div>
@endsection