<!DOCTYPE html>
<html>
<head>
	<title>Viraja Driving School</title>
  <link rel="shortcut icon" href="images/t.jpg">
	 
	 <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.js">
	 <link rel="stylesheet" type="text/css" href="css/css/header.css">
   <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  .col-md-4 {
		float: right;
		width: 400px;
		background: gray;

		border-radius: 100px 0 50px 0;
    padding: 30px;
    margin-right:20px;
    height:300px;
    font-family: 'Rajdhani', sans-serif;
    opacity:0.6;

  }
   .co2{
		float: right;
		width: 400px;
		background: white;

		border-radius: 100px 0 50px 0;
    padding: 30px;
    margin-right:20px;
    height:300px;
    font-family: 'Rajdhani', sans-serif;

	}
  .cus{
  
    height:450px;
    width:100%;
    background-size:cover;
    background-position:center;
    background-color: rgba(0,0,255,0.7);
    padding-bottom:40px;
   
    position:relative;
  }
 
		
		#particles-js{
			background-image:  linear-gradient(gray,lightgray);
			background-size: cover;
      height: auto;
     
    }
    
    .footer .footer-top .sociallinks a{
		font-size: 18px;
		display: inline-block;


color:#fff;
border-radius:50%;

width:36px;
height:36px;
transition:0.3s;
background-color: #0469cf;
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
      <li class="nav-item active">
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
       <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
      </li>
       <li class="nav-item">
        <a class="btn btn-primary" href="{{ url('/login') }}" >LOGIN</a>
      </li>

    </ul>
    
  </div>
</div>

</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/5.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
          <h5 class="animated fadeInRight" style="animation-delay:1s;font-weight:600;">WELCOME<h6> To Driving School</h6></h5>
          <p class="animated fadeInLeft" style="animation-delay:2s;">GET A BETTER TRAINING</p>
          <a href="{{ url('/login') }}" class="btn btn-primary">APPLY NOW</a>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/7.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
          <h5 class="animated fadeInRight" style="animation-delay:1s;">Learn more with us</h5>
          <p>To be more safety driving</p>
          <a href="{{ url('/login') }}" class="btn btn-primary">APPLY NOW</a>
        </div>
    </div>
    

    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
          <h5 class="animated fadeInRight" style="animation-delay:1s;">THE BEST SAFETY MEASURES</h5>
          <p>With a profesional instrctors.</p>
          <a href="{{ url('/login') }}" class="btn btn-primary">APPLY NOW</a>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>
</div></div></div>

<div id="particles-js">
<h3  class="text-center"style="color: #090f45; font-family:Bebas Neue;font-family:500; font-size:40px;padding-top:50px;">WELCOME TO VIRAJA DRIVING SCHOOL</h3>
<h5  class="text-center"style="color: #1478c4;">"To safety drive<br>with professional instrctors"</h5><hr size="30"style="width:20%; border:3px solid #4666db;"><p class="text-center">
Viraja driving school is a trusted driving school in matara Sri Lanka with over 20 years experience in teaching leaners how to drive. We highly believe in promoting road safety and safe driving with all our very professional, motivated driving instructors who specially have xcellent knowledge to get you driving test first time & train you for the lifetime.We treat all our customers woth the highest priority and try to deliver our pipils "a fun to drive approach to drive". It is our mission to deliver this through our highly trainer professional instrctors with the modern day training program packages backed up with a brand new fleet of vehicles.Achieving this training fro unprofessional people will out your life as well as other's lives and your vehicle at enoromous risk.</p>


</div>
<div class="cus">
<h3 class="text-center" style="color:white;">
CUSTOMERS TESTOMONIALS</h3>
<hr size="10"style="width:5%; border:3px solid #4666db;">
<h6 class="text-center" style="color:white;">Read what our satisfied customers say that<h6>
<div class="col-md-4">

			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			<h4 class="text-center" style="color:#2c347d;">Mr.Sarath Gunapala</h4>
	
  
</div>

<div class="col-md-4 co2">

			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			<h4 class="text-center" style="color:#2c347d;">Mr.Sarath Gunapala</h4>
	
  
</div>
<div class="col-md-4">

			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			<h4 class="text-center" style="color:#2c347d;">Mr.Sarath Gunapala</h4>
	
  
</div>
</div>
<footer id="footer">
	<div class="footer-top">
		<div class="container">
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
</div>


<div class="container1 text-center">
	<div class="copyright">
		&copy;copyright    VIRAJA DRIVING SCHOOL  All Right Reserved
	</div>
	<div class="credit">
		Design & Developed by IU
	</div>
</div>

 
</footer>
<script type="text/javascript" src="particles.min.js"></script>
<script type="text/javascript" src="app.js"></script>

</body>
</html>