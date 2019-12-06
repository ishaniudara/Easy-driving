<!DOCTYPE html>
<html>
<head>

	<title>services</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.js">
<link rel="stylesheet" type="text/css" href="css/css/com.css">
<style type="text/css">
	.icon{
		font-size: 40px;
		margin: 20px auto;
		padding:5px;
		height: 80px;
		width: 80px;
		border-radius: 50%;
		border:1px solid #1478c4; 
		background-color: #1478c4;
		text-align: center;
		



	}

	.icon i{
		font-size: 40px;
				color: white;
		

	}
	.icon i:hover{
	
				color:blue;
		

	}
	.col-md-3:hover{
		box-shadow: 5px 7px 9px -3px  #1478c9 ; 
		cursor: pointer;
		height: 300px;
	}
	.col-md-3 h3{
		font-size: 25px;
	}
	.col-md-3 p{
		font-family: roboto;
	}

      .head{
      	background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("images/3.jpg");
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
      .row{
      	margin-bottom: 40px;
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
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/aboutus') }}">About</a>
      </li>
      <li class="nav-item active">
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
		<h2 class="text-center">SERVICES</h2>
	</div>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-3">
				<div class="icon">
					<i class="fa fa-truck"></i>
				</div>
				<h3>Heavy Vehicle</h3>
				<p>Viraja driving school is provided heavy vehicle training.Join us with for better driving training.</p>

			</div>
						<div class="col-md-3">
				<div class="icon">
					<i class="fa fa-car"></i>
				</div>
				<h3>Car/Van</h3>
				<p>Viraja driving school is provided auto/manual training for car/van.</p>

			</div>
						<div class="col-md-3">
				<div class="icon">
					<i class="fa fa-female"></i>
				</div>
				<h3>Women oriented services</h3>
				<p>It is various opportunity for womens who wants to get training from women instrctors.</p>

			</div>
						<div class="col-md-3">
				<div class="icon">
			<i class="fa fa-traffic-light"></i>
				</div>
				<h3>Road Sign Knowledge</h3>
				<p>We are ready to give all knowledge about road signs for exams.</p>

			</div>
		</div><div class="row">
						<div class="col-md-3">
				<div class="icon">
					<i class="fa fa-motorcycle"></i>
				</div>
				<h3>Motorcycles</h3>
				<p> We are provided auto/manual motoecycles training.</p>

			</div>
						<div class="col-md-3">
				<div class="icon">
					<i class=""></i>
				</div>
				<h3>Threewheelers</h3>
				<p>we are provided threewheeler training by professional instrctors.</p>

			</div>
						<div class="col-md-3">
				<div class="icon">
					<i class="fas fa-book-open"></i>
				</div>
				<h3>Exam</h3>
				<p>Now you can get ready for exams by participating our lectues sessions.</p>

			</div>
						<div class="col-md-3">
				<div class="icon">
					<i class="fa fa-bus"></i>
				</div>
				<h3>Bus</h3>
				<p>we are provided bus training within short period.</p>

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
</body>
</html>