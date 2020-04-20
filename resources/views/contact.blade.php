<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="shortcut icon" href="images/t.jpg">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.js">
<link rel="stylesheet" type="text/css" href="css/css/com.css">

<style type="text/css">
	   .address p{
		color: #1478c4;

	}
	h5{
		font-weight: 600;
	}
	.container{
		margin:50px;

	}
	.address{
		margin-top: 150px;
	

	}
	.row{
		margin:20px;
	}

      .head{
      	background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("images/10.jpg");
      	height: 500px;
      	background-size: cover;
      	background-position: center center;
      	-webkit-background-size:cover;
      position: relative;
      margin-bottom: 40px;

      }
      .head h2{
      	color: white;
      	padding-top: 200px;
      	font-weight: 600;
      	font-size: 50px;
      }
     
       i{
	font-size: 50px;
	border-radius: 50%;
	border: 1px solid #1d46ad;
	padding:  3px;
	background-color: #1d46ad;
	color: #92a8e0;
	padding:10px;

}
       i:hover{
	font-size: 30px;
	border-radius: 50%;
	border: 1px solid #92a8e0;
	padding:  3px;
	background-color:#92a8e0 ;
	color: #1d46ad;

}

	
</style>
</head>
<body>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
	<div class="container">	
  <a class="navbar-brand" href="#">VIRAJA <h4>Driving school</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/aboutus') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/services') }}">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/prices') }}">Packages</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
      </li>
       <li class="nav-item">
	   <a href="{{ url('/login') }}"  class="btn"style="border:3px solid #183bc7; color:#183bc7; border-radius:10px; font-weight:300px;">LOGIN</a>
      </li>

    </ul>
    
  </div>
</div>

</nav>
	<div class="head">
		<h2 class="text-center" style="letter-spacing: 5px; font-family:'Bebas Neue';">CONTACT</h2>
	</div>
<div class="Container">
	<div class="row">
		<div class="col-12">
			<h6 class="text-center">Do not hesitate to contact us for any support ot assistance that you may require regarding the VIRAJA driving school. We are always prepared to help you.</h6>
			<hr style="background-color: #1478c4;">

		</div></div>
		<div class="row">
			<div class="col-md-6">
				<h3>Send Your Inquiries</h3>
				<form action="/enquir" method="post">
				{{csrf_field()}}
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name">
						@if ($errors->has('name'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('name') }}</p>
                                    </span>
                                @endif
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email">
						@if ($errors->has('email'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
					</div>
					
					<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
						<label for="Subject">Subject</label>
						<input type="text" class="form-control" name="subject">
						@if ($errors->has('subject'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('subject') }}</p>
                                    </span>
                                @endif
					</div>
				<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
	

						<label for="message">Message</label>
									<textarea class="form-control" rows="5" cols="15" name="message"></textarea>
									@if ($errors->has('message'))
                                    <span class="help-block">
                                        <p style="color:red;">{{ $errors->first('message') }}</p>
                                    </span>
                                @endif
								</div>
								<div class="form-group text-center">
			
								<button type="submit" class="btn btn-primary btn-lg" >SEND MESSAGE</button>
							</form>
						</div>
					</div>
						<div class="col-md-6 address">
			
												<i class="fa fa-home"></i><h5>Location address</h5>
							<p>NO:210, Main street, Akuressa</p>
											<i class="fa fa-envelope"></i><h5>Email address</h5>
							<p>virajadrivingschool@gmail.com</p>
											<i class="fa fa-phone"></i><h5>Direct Contact</h5>
							<p>0413411402</p>
						</div>
					</div>
					<div class="container-fluid">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.256985439441!2d80.47446691426549!3d6.0960473296772095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae14269dda9ad11%3A0x876d38939d6a33af!2sViraja%20Driving%20School!5e0!3m2!1sen!2slk!4v1573361318489!5m2!1sen!2slk" width="100%" height="400" frameborder="0" style="border:0;"></iframe>
</div>
<footer id="footer">
	<div class="footer-top"><div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 footer-info">
					<h3>VIRAJA Drining School</h3>
					<p> "A" Grade Driving school<br>
						
						<strong>125,Main Street,Akuressa</strong>
						<br>
												<strong>0413411402</strong>
						<br>
											<strong>virajadrivingschool@gmail.com</strong>
						<br>
												<strong>Reg No: DS 234</strong>
					</p>

				</div>
				<div class="col-lg-4 col-md-6 footer-info">
					<h5>Deniyaya Branch</h5>
					<hr style="background-color: blue;">
				<p> 
												<strong>125,Main Street,Akuressa</strong>
						<br>
											<strong>0413411402</strong>
						<br>
											<strong>virajadrivingschool@gmail.com</strong>
						<br>
												<strong>Reg No: DS 234</strong>
					</p>
				</div>
				<div class="col-lg-3 col-md-6 footer-contact">
				<div class="sociallinks">
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="googleplus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="googleplus"><i class="fa fa-twitter"></i></a>
				</div>

		</div>
	</div>
</div></div>


<div class="container1 text-center">
	<div class="copyright">
		&copy;copyright    VIRAJA DRIVING SCHOOL  All Right Reserved
	</div>
	<div class="credit">
		Design & Developed by IU
	</div>
</div>

 
</footer>
</body>
</html>