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
            <h3 style="color:#3061b0;">READING MATERIALS</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Materials</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content" style="margin-right:50px; margin-left:50px;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <div  class="row">
				<div style="padding-top:50px;" >
					<h2 style="font-family: 'Lato', sans-serif,color:blue;"><b> Get Ready for your Test...</b></h2>
					<br>
				</div>
				</div>
<div class="row">
        <div class="col-md-5">
            <div class="card" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.26), 0 6px 20px 0 rgba(0, 0, 0, 0.45);">
                <div class="card-image">
                    <a href="reading.html" data-toggle="modal" data-target="#addmodal"><img style="width:100%;" class="img-responsive" src="images/tips.webp"></a>
                </div><!-- card image -->
                
                <div class="card-content">
                    <span class="card-title" text-align="center"><b>Reading Materials 1</b></span>                    
                </div><!-- card content -->
            </div>
        </div>
        <div class="col-md-5">
            <div class="card" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.26), 0 6px 20px 0 rgba(0, 0, 0, 0.45);">
                <div class="card-image">
                    <a href="reading.html" data-toggle="modal" data-target="#modal2"><img style="width:100%;" class="img-responsive" src="images/exam.png"></a>
                </div><!-- card image -->
                
                <div class="card-content">
                    <span class="card-title" text-align="center"><b>Reading Materials 2</b></span>                    
                </div><!-- card content -->
            </div>
        </div>

        <div class="modal fade" role="dialog" id="addmodal">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title">Reading Materials</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
         
          <div class="modal-body">

          <embed src="images/3.pdf" type="application/pdf" width="100%" height=600px;>
          </div>
          </div>
          </div>
          </div>
          <div class="modal fade" role="dialog" id="modal2">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title">Reading Materials</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
         
          <div class="modal-body">

          <embed src="images/2.pdf" type="application/pdf" width="100%" height=600px;>
          </div>
          </div>
          </div>
          </div>
          

		
		
				
				</div>
				</div>
				
          </section>
          
@endsection