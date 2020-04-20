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
            <h1 style="color:#3061b0;">REPORTS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <a href="#" class="btn btn-primary" style="margin-bottom:30px;"  data-toggle="modal" data-target="#addmodal"><h6>+ADD</h6></a>
          </div>
          <div class="modal fade" role="dialog" id="addmodal">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" style="color:blue;">ADD REPORT</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
         
          <div class="modal-body">
          <form method="post" action="/addreport">
        {{csrf_field()}}
          
  <div class="form-group">
    <label for="exampleInputlname">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="john">

  
  </div>
    
  
  <div class="form-group">
    <label for="exampleInputlname">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="john">

  
  </div>
  <div class="form-group">
    <label for="exampleInputlname">Address</label>
    <input type="text" class="form-control" name="address" placeholder="enter your permenant address">
  </div>
  <div class="form-group">
    <label for="exampleInputlname">Age</label>
    <input type="text" class="form-control" name="age" placeholder="24">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <input type="text" class="form-control" name="gender" placeholder="male">
    
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Package</label>
    <input type="text" class="form-control" name="package" placeholder="car/van">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Training period</label>
    <input type="text" class="form-control" name="period" placeholder="6months">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Completed Training hours</label>
    <input type="text" class="form-control" name="chours" placeholder="10">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Remaining Training hours</label>
    <input type="text" class="form-control" name="rhours" placeholder="10">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Exam</label>
    <input type="text" class="form-control" name="status" placeholder="good">
  </div>

  
 
  <button type="submit" class="btn btn-primary" style="width:20%; margin-right:100px;">ADD</button>
  </form>
  </div>
</div>  </div>
  </div>
  <div class="col-md-4">

          <form action="/search" method="get">
      <div class="input-group">
        <input type="search" name="search" placeholder="Search" class="form-control">
        <span class="input-group-prepend">
          <button class="btn btn-primary" type="submit">
            search
            <i class="fas fa-search"></i>
          </button>
</span>
        
      </div>
    </form></div>

          </br>
          </br>
          </br>
      
          
                <table id="example2" class="table table-striped table-hover">
                <thead style="color:#5983d9;">
                <tr>
                  
                  <th>FIRST NAME</th>
                  <th>LAST NAME</th>
                  <th>EXAM</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @foreach($report as $row)
               
                <tr>
                
           

                  
                  <td>{{$row->first_name}}</</td>
                 
                  <td>{{$row->last_name}}</</td>
                  <td>{{$row->status}}</</td>
                  
                  <td><a href="/viewreport/{{$row->id}}" class="btn btn-success" ><i class="fas fa-eye"></i></a></td>
                  <td><a href="/delrep/{{$row->id}}" class="btn btn-danger"><i class="fas fa-trash-alt" id="del"></i></a></td>
                  <td><a href="/editrep/{{$row->id}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                  </tr>
                
                
             @endforeach
         </tbody>
         </table>
          </section>
         
@endsection