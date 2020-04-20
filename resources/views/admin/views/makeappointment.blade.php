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
            <h1 style="color:#3061b0; text-align:center;">BOOK YOUR TIME</h1>
            <hr size="30"style="width:20%; border:3px solid #6b9ced"><hr size="30"style="width:50%; border:3px solid #4666db;">
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
    <section class="content col-md-6 center">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    @if(session('response'))
    <div class="alert alert-success">
    {{session('response')}}
    </div>
    @endif
        <form method="post" action="/book">
    
        <div class="card col-lg-12" style="	box-shadow: 4px 4px 4px 4px #bdc3c7; ">
<div class="card-body">
        {{csrf_field()}}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="exampleInputemail"style="color:#3061b0;">EMAIL</label>
    
    <input type="email" class="form-control" name="email" placeholder="john@gmail.com">
     <!--  error message-->
    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
  </div>
        
        
  <div class="form-group{{ $errors->has('tutor') ? ' has-error' : '' }}">
    <label for="exampleFormControlSelect1"style="color:#3061b0;">INSTRUCTOR</label>
    <select class="form-control" name="tutor">
    <option value="">Select tutor</option>
      <option>Sarath Gunapala</option>
      <option>Ramani senanayake</option>
      <option>Vijaya silva</option>
    </select>
     <!--  error message-->
    @if ($errors->has('tutor'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('tutor') }}</p>
                                    </span>
                                @endif
  </div>

  <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">

    <label for="exampleInputemail"style="color:#3061b0;">TRAINING DATE</label>
    
    <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/yyyy" name="date">
     <!--  error message-->
    @if ($errors->has('date'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('date') }}</p>
                                    </span>
                                @endif
  </div>
 <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
    <label for="exampleInputemail"style="color:#3061b0;">TRAINING TIME</label>
    
    <select class="form-control" name="time">
    <option value="">Select Time</option>
      <option>7pm-9pm</option>
      <option>10pm-11pm</option>
      <option>1am-2am</option>
      <option>3am-4am</option>
      <option>4am-5am</option>
       <!--  error message-->
      @if ($errors->has('time'))
                                    <span class="help-block">
                                      <p style="color:red;">{{ $errors->first('time') }}</p>
                                    </span>
                                @endif
    </select>
  
  </div>
  
   <button type="submit" class="btn btn-primary">BOOK</button>
</form>
          </section>
        
@endsection