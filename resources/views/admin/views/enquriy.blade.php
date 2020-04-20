@extends("admin.layouts.layout")
@section("title","User Dsshboard")
@section("content")
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:#3061b0;">INQURIES</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inquries</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <table id="example2" class="table table-striped table-hover">
                <thead style="color:#5983d9;" class="table.primary">
                <tr>
                  <th>ID</th>
                  <th> NAME</th>
                  <th>EMAIL</th>
                  <th>SUBJECT</th>
                  <th >MESSAGE</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach($en as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}
                  </td>
                  <td>{{$row->email}}</td>
                  <td> {{$row->subject}}</td>
                  <td > {{$row->message}}</td>
                  <td><a href="/delenq/{{$row->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                 
                </tr>
               @endforeach
         </tbody>
         </table>
          </section>
          
         
@endsection