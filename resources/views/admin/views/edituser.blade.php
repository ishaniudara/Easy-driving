@extends("admin.layouts.layout")
@section("title","Admin Dashboard")
@section("content")
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content" style="margin-right:300px; margin-left:300px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <form method="post" action="/eduser">
        {{csrf_field()}}
      <input type="hidden" name="id" value="{{$editdata->id}}">
  <div class="form-group">
    <label for="exampleInputfname">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Smith" value="{{$editdata->first_name}}">
    
  </div>
 
  <div class="form-group">
    <label for="exampleInputlname">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="john" value="{{$editdata->last_name}}">

  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputlname">Address</label>
    <input type="text" class="form-control" name="address" placeholder="enter your permenant address"value="{{$editdata->Address}}">
  </div>
  <div class="form-group">
    <label for="exampleInputlname">Age</label>
    <input type="text" class="form-control" name="age" placeholder="24" value="{{$editdata->age}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" name="gender" value="{{$editdata->gender}}">
      <option>Male</option>
      <option>Female</option>
     
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Package</label>
    <select class="form-control" name="package" value="{{$editdata->package}}">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Training period</label>
    <select class="form-control" name="period" value="{{$editdata->period}}">
      <option>3 months</option>
      <option>5 months</option>
      <option>6 months</option>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Upload your photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
          </section>
         
@endsection