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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
              $connection=mysqli_connect("localhost","root","","driving");
              $query="SELECT id from books ORDER BY id";
              $query_run=mysqli_query($connection, $query);
              $row=mysqli_num_rows($query_run);
              echo '<h3>' .$row. '</h3>';
              ?>


                <p>Appointments</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
              $connection=mysqli_connect("localhost","root","","driving");
              $query="SELECT id from applies ORDER BY id";
              $query_run=mysqli_query($connection, $query);
              $row=mysqli_num_rows($query_run);
              echo '<h3>' .$row. '</h3>';
              ?>

                <p>New applies</p>
              </div>
              <div class="icon">
                <i class="fas fa-calendar"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
              $connection=mysqli_connect("localhost","root","","driving");
              $query="SELECT id from enquries ORDER BY id";
              $query_run=mysqli_query($connection, $query);
              $row=mysqli_num_rows($query_run);
              echo '<h3>' .$row. '</h3>';
              ?>


                <p>Inquiry </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
              $connection=mysqli_connect("localhost","root","","driving");
              $query="SELECT id from users ORDER BY id";
              $query_run=mysqli_query($connection, $query);
              $row=mysqli_num_rows($query_run);
              echo '<h3>' .$row. '</h3>';
              ?>


                <p>Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
@endsection