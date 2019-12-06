<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css/com.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.js">
	<style type="text/css">
		.con h3{
			color: black;
			font-weight: 500;
			font-size: 40px;
			text-align: center;
		}
		.con p{
			padding-top: 30px;
			font-size: 17px;
			font-family: roboto;
		}
		.team h2{
			font-weight: 600;
			color: #1478c4;
			margin-top: 20px;
		}
		.col-md-3 img{
			width: 230px;
			height: 230px;
			border-radius: 50%;
			
			box-shadow: 0px 0px 5px 3px #bdc3c7
		}
		.col-md-3:hover{
		box-shadow: 2px 3px 4px 2px #bdc3c7; 
		cursor: pointer;
		border-radius: 2%;
		height: auto;
		width: 200px;
		padding-top: 30px;
		background-color: #ffffff;}
		.col-md-3 h5{
			color:#1478c4;
		}
		.col-md-3 h6{
			color:gray;
		}
		.row{
			margin:40px;
		}
      .head{
      	background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("images/4.jpg");
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
        <a class="nav-link" href="{{ url('/home') }}">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/aboutus') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/services') }}">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/prices') }}">Packages</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        
        
      </li>
       <li class="nav-item">
        <a class="nav-link btn btn-primary" href="#" >LOGIN</a>
      </li>

    </ul>
    
  </div>
</div>

</nav>

	
	<div class="head">
		<h2 class="text-center">ABOUT</h2>
	</div>
<div class="container">
	<div class="con center">
		<h3>Who we are?</h3>
		<p class="justify">VIRAJA Driving School started in 1990 by Mr.Nanayakkara. Soon after it became a very trusted Government Registered Driving School in Matara are as well as the country. All our Professional & qualified instrctors are always with us in this journey. As a leading driving School in matara we give you a better train to pass your driving test as well as we make you a disciplined & responsible Driver.</p>
	</div><hr style="background: #1478c4;">
	<div class="con center">
		<h3>Why We Special?</h3>
		<p class="text-justify">Getting your driving license is a millstone in your life. Since the mpment you sit on the driver position our concentrate on you to train & improve your driving skills. We have great squad of instrctors who will teach you easy tips to get through your driving practical test on the first attempt. You may be a just after 18 or a busy person with ypur work. That's why we offer flexible training hours to you to get your license easily. all vehicles are comportable & well mainteined. Trainings will not happen on cloistral roads on a silent area. all the trains will do on public streets & roads to make you a road ready driver.</p>
	</div>
	<div class="team">
		<h2 class="text-center">Our Team<br></h2><h6 class="text-center" style="color:gray; ">The power of professional Instrctors</h6>
	</div>
<div class="row">
	<div class="col-md-3">

		<img src="images/t2.jpg" class="img-fluid">
		<h5 class="text-center">Sarath Rathnayake</h5>
		<h6 class="text-center">Expert Instrctor of team</h6>
	</div>
	<div class="col-md-3">

		<img src="images/t3.jpg"class="img-fluid">
		<h5 class="text-center">Priyal Subasinghe</h5>
		<h6 class="text-center">Experienced Instrctor of team</h6>
	</div>
	<div class="col-md-3">

		<img src="images/t1.jpg"class="img-fluid">
		<h5 class="text-center">Ramani Senanayake</h5>
		<h6 class="text-center">Women Instrctor of team</h6>
	</div>
	<div class="col-md-3">

		<img src="images/t2.jpg"class="img-fluid">
		<h5 class="text-center">Sarath Rathnayake</h5>
		<h6 class="text-center">Expert Instrctor of team</h6>
	</div>

</div>
</div>
<footer id="footer">
	<div class="footer-top"><div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 footer-info">
					<h3>VIRAJA Drining School</h3>
					<p> "A" Grade Driving school<br>
						<i class="fas fa-home mr-3"></i>
						<strong>125,Main Street,Akuressa</strong>
						<br>
						<i class="fas fa- mr-3"></i>
						<strong>0413411402</strong>
						<br>
						<i class="fas fa-gmail mr-3"></i>
						<strong>virajadrivingschool@gmail.com</strong>
						<br>
						<i class="fas fa- mr-3"></i>
						<strong>Reg No: DS 234</strong>
					</p>

				</div>
				<div class="col-lg-4 col-md-6 footer-info">
					<h5>Deniyaya Branch</h5>
					<hr style="background-color: blue;">
				<p> 
						<i class="fas fa-home mr-3"></i>
						<strong>125,Main Street,Akuressa</strong>
						<br>
						<i class="fas fa- mr-3"></i>
						<strong>0413411402</strong>
						<br>
						<i class="fas fa-gmail mr-3"></i>
						<strong>virajadrivingschool@gmail.com</strong>
						<br>
						<i class="fas fa- mr-3"></i>
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
</body></html>