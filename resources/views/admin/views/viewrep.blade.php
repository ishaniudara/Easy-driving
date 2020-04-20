<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- /.col -->
<!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="col-md-5 col-md-offset-4" style="margin-left:400px;">
    <div class="container-fluid">
    <div class="jumbotron">
    <div class="col-sm-6">
            <h1 style="color:#657ee0; text-align:center;">REPORT</h1>
          </div>
    <div class="col align-self-center">
    <section class="content">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Small boxes (Stat box) -->
        
        <form method="post" action="/addreport">
        {{csrf_field()}}
                
  <div class="form-group">
    <label for="exampleInputlname" style="color:#91a4eb"> ID</label>
    <input type="text" class="form-control" name="id" placeholder="##" value="{{$data->id}}">

  
  </div>
    
          
  <div class="form-group">
    <label for="exampleInputlname"style="color:#91a4eb">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="john" value="{{$data->first_name}}">

  
  </div>
    
  
  <div class="form-group">
    <label for="exampleInputlname"style="color:#91a4eb">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="john" value="{{$data->last_name}}">

  
  </div>
  <div class="form-group">
    <label for="exampleInputlname"style="color:#91a4eb">Address</label>
    <input type="text" class="form-control" name="address" placeholder="enter your permenant address"value="{{$data->address}}">
  </div>
  <div class="form-group">
    <label for="exampleInputlname"style="color:#91a4eb">Age</label>
    <input type="text" class="form-control" name="age" placeholder="24"value="{{$data->age}}">
   
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"style="color:#91a4eb">Gender</label>
    <input type="text" class="form-control" name="gender" placeholder="male" value="{{$data->gender}}">
    
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1"style="color:#91a4eb">Package</label>
    <input type="text" class="form-control" name="package" placeholder="car/van"value="{{$data->package}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"style="color:#91a4eb">Training period</label>
    <input type="text" class="form-control" name="period" placeholder="6months" value="{{$data->period}}">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1"style="color:#91a4eb">Completed Training hours</label>
    <input type="text" class="form-control" name="hours" placeholder="10"value="{{$data->completed_hours}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"style="color:#91a4eb"style="color:#91a4eb">Remaining Training hours</label>
    <input type="text" class="form-control" name="hours2" placeholder="10"value="{{$data->Remaining_hours}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"style="color:#91a4eb">Current Status</label>
    <input type="text" class="form-control" name="status" placeholder="good"value="{{$data->status}}">
  </div>
      </body>
      </html>