
@extends("admin.layouts.layout2")

@section("title","Admin Dsshboard")

@section("content")

<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row md-2">
          <div class="col-sm-6">
            <h3 style="color:#3061b0; text-align:center;">APPLY NOW</h3><hr size="30"style="width:20%; border:3px solid #6b9ced"><hr size="30"style="width:50%; border:3px solid #4666db;">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Apply</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content col-md-6 center">

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <form method="post" action="/save">
        <!-- count errors-->
       @if($errors->count()>0)
        <div id="ERROR_COPY" class="alert alert-danger" style="display:none;">
      
        @foreach($errors->all() as $error)
        {{$error}}<br>
        @endforeach
        
        </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
        </div>
        @endif
        <div class="card col-lg-12" style="	box-shadow: 4px 4px 4px 4px #bdc3c7; ">
<div class="card-body">
        {{csrf_field()}}
  <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
    <label for="exampleInputfname" style="color:#3061b0;">FIRST NAME</label>
    
    <input type="text" class="form-control" name="fname" placeholder="Smith"autofocus>
  <!--  error message-->
    @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('fname') }}</p>
                                    </span>
                                @endif
    
  </div>
 
  <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
    <label for="exampleInputlname"style="color:#3061b0;">LAST NAME</label>
    <input type="text" class="form-control" name="lname" placeholder="john"autofocus>
    @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('lname') }}</p>
                                    </span>
                                @endif

  </div>
  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="exampleInputlname"style="color:#3061b0;">ADDRESS</label>
    <input type="text" class="form-control" name="address" placeholder="enter your permenant address"autofocus>
    <!--  error message--> @if ($errors->has('address'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('address') }}</p>
                                    </span>
                                @endif
  </div>
  <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
    <label for="exampleInputlname"style="color:#3061b0;">AGE</label>
    <input type="text" class="form-control" name="age" placeholder="24"autofocus>
     <!--  error message-->@if ($errors->has('age'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('age') }}</p>
                                    </span>
                                @endif
  </div>
  <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
    <label for="exampleFormControlSelect1"style="color:#3061b0;">GENDER</label>
    <select class="form-control" name="gender">
    <option value="">Select Gender</option>
      <option>Male</option>
      <option>Female</option>
     
    </select>
    <!--  error message--> @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('gender') }}</p>
                                    </span>
                                @endif
  </div>
  
  <div class="form-group{{ $errors->has('package') ? ' has-error' : '' }}">
    <label for="exampleFormControlSelect1"style="color:#3061b0;">PACKAGE</label>
    <select class="form-control" name="package">
    <option value="">Select Type</option>
      <option>Bike</option>
      <option>car/van</option>
      <option>car/Bike</option>
      <option>Weight Vehicles</option>
      <option>BIke/Car/Van</option>
    </select>
    <!--  error message--> @if ($errors->has('package'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('package') }}</p>
                                    </span>
                                @endif
  </div>
  <div class="form-group{{ $errors->has('period') ? ' has-error' : '' }}">
    <label for="exampleFormControlSelect1"style="color:#3061b0;">TRAINING PERIOD</label>
    <select class="form-control" name="period">
    <option value="">Select period</option>
      <option>3 months</option>
      <option>5 months</option>
      <option>6 months</option>
    </select>
     <!--  error message-->@if ($errors->has('period'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('period') }}</p>
                                    </span>
                                @endif
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1"style="color:#3061b0;">Upload your photo</label>
    <input type="file" class="form-control-file" name="image">
  </div>
  
  <button type="submit" id="btn1" class="btn btn-primary">APPLY</button>

</form>
          </section>
        
@endsection

          