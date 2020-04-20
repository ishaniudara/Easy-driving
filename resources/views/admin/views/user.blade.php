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
            <h1 style="color:#3061b0;">USER MANAGEMENT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">user management</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
       <!-- search bar-->
      <div class="col-md-4">

<form action="/searchuser" method="get">
<div class="input-group">
<input type="search" name="search" placeholder="Search user" class="form-control" style="margin-right:0px;">
<span class="input-group-prepend">
<button class="btn btn-primary" type="submit">
  search
  <i class="fas fa-search"></i>
</button>
</span>

</div>
</form></div>
      
        <!-- model for add user-->
        <div class="row">
        <button type="button" class="btn btn-primary" style="margin-bottom:30px; margin-left:900px;" data-toggle="modal" data-target="#addmodal"><h6>+ADD</h6></button>
          </div>
          <div class="modal fade" role="dialog" id="addmodal">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="color:#1a53bd; text-align:center;">ADD USER</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
         
          <div class="modal-body">
          <form method="post" action="/adduser">
        {{csrf_field()}}
          
  <div class="form-group">
    <label for="exampleInputlname" style="color:#5983d9;">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="john">

  
  </div>
    
  
  <div class="form-group">
    <label for="exampleInputlname"  style="color:#5983d9;">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="john">

  
  </div>
  <div class="form-group">
    <label for="exampleInputlname"  style="color:#5983d9;">Address</label>
    <input type="text" class="form-control" name="address" placeholder="enter your permenant address">
  </div>
  <div class="form-group">
    <label for="exampleInputlname"  style="color:#5983d9;">Age</label>
    <input type="text" class="form-control" name="age" placeholder="24">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"  style="color:#5983d9;">Gender</label>
    <select class="form-control" name="gender">
      <option>Male</option>
      <option>Female</option>
     
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1"  style="color:#5983d9;">Package</label>
    <select class="form-control" name="package">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"  style="color:#5983d9;">Training period</label>
    <select class="form-control" name="period">
      <option>3 months</option>
      <option>5 months</option>
      <option>6 months</option>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1"  style="color:#5983d9;">Upload your photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
 
  <button type="submit" id="btn2" class="btn btn-primary" style="width:20%; margin-right:100px;">ADD</button>
  </form>
  </div>
</div>  </div>
  </div> <!-- display user details table -->
          <table id="example2" class="table table-striped table-hover">
                <thead style="color:#5983d9;">
                <tr>
                <th>ID</th>
                  <th>first Name</th>
                  <th>Last Name</th>
                  <th>Address</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Package</th>
                  <th>Period</th>
                  <th>Apply_Date</th>
                  <th>EXAM</th>
                  <th>ACTION</th>
                
                </tr>
                </thead>

                <tbody>
                @foreach($orders as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->first_name}}
                  </td>
                  <td>{{$row->last_name}}</td>
                  <td> {{$row->Address}}</td>
                  <td>{{$row->age}}</td>
                  <td>{{$row->gender}}</td>
                  <td>{{$row->package}}</td>
                  <th>{{$row->period}}</th>
                  <th>{{$row->created_at}}</th>
                  
                  
                  <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">PASS</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">FAIL</label>
</div></td>
<td><a href="/edituser/{{$row->id}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
</td>
                  <td><a href="/deleteuser/{{$row->id}}" class="btn btn-danger"><i class="fas fa-trash-alt" id="del"></i></a></td>
<td>
                  <a href="/viewuser/{{$row->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
                </tr>
                
                @endforeach
         </tbody>
         </table>
         <form class="form-horizontal" method="post" action="{{'/message'}}">
        {{csrf_field()}}
        <div class="form-group">
        <label for="name" class="col-md-4 control-label" style="color:blue;">ENTER EMAIL</label>
        <input type="email" class="form-control" name="email" placeholder="john@gmail.com" style="width:200px;">
        </div>

        <div class="form-group">
        <label for="name" class="col-md-4 control-label"style="color:blue;">ENTER MESSAGE</label>

        <div class="col-md-6">
        <textarea id="name" class="form-control" name="message" value="Schedule is succeed" required ></textarea>
        <br><button class="btn btn-primary" type="submit"style="margin-left:430px;">SEND</button></div>
        </div>
          </section>
          
         
@endsection