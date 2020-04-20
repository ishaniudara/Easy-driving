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
            <h1 style="color:#3061b0;">PAYMENT MANAGEMENT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">payments</li>
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
        <!-- Small boxes (Stat box) -->
       
          <table id="example2" class="table  table-hover">
                <thead>
                <tr>
                
                  <th>first Name</th>
                  <th>Last Name</th>
                  <th>Full charge(Rs)</th>
                  <th>Advance(Rs)</th>
                  <th>Balance(Rs)</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  
                  <td>Internet
                    Explorer 
                  </td>
                  <td>WinOP</td>
                  <td> 17000</td>
                  <td>10000</td>
                  <td>70000</td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                  
                  <td>ishani
                  </td>
                  <td>udara</td>
                  <td>5000</td>
                  <td>2000</td>
                  <td>3000</td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
        
                
         </tbody>
         </table>
          </section>
          </div>
@endsection