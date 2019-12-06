<!DOCTYPE html>
<html>
<head>
	<title>prices</title>
	 <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.js">
<link rel="stylesheet" type="text/css" href="css/css/com.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <style type="text/css">
      .head{
      	background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("images/5.jpg");
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

	<div class="head">
		<h2 class="text-center">PRICES</h2>
	</div>
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
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/services') }}">Services</a>
      </li>
      <li class="nav-item active">
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
<div class="container">
	<table class=" table table-striped table-hover">
		<thead style="background-color:#1478c4; color: white;">
			<tr>
		<th>lesson</th>
		<th> Price(Rs)</th>
		</tr>
		</thead> 
		<tbody>
			<tr>
				<td>Prime mover</td>
				<td>28,000</td>
			</tr>
			<tr>
				<td>Heavy vehicle</td>
				<td>15,000</td>
			</tr>
				<tr>
				<td>Car/van manual</td>
				<td>13,000</td>
			</tr>
				<tr>
				<td>Car(auto)</td>
				<td>14,000</td>
			</tr>
				<tr>
				<td>Three Wheel</td>
				<td>7,500</td>
			</tr>
				<tr>
				<td>Motor Cycle</td>
				<td>6,500</td>
			</tr>
				<tr>
				<td>Heavy vehicle+Motor Cycle</td>
				<td>17,000</td>
			</tr>
				<tr>
				<td>Car+Three Wheeleter+motorcycle</td>
				<td>20,000</td>
			</tr>
				<tr>
				<td>Car+Motorcyle</td>
				<td>15,000</td>
			</tr>
				<tr>
				<td>Car+Three Wheeletr</td>
				<td>16,000</td>
			</tr>
				<tr>
				<td>Three wheeletr+motor Cycle</td>
				<td>10,500</td>
			</tr>
			<tr><td class="text-center" style="color:#1478c4; font-size: 20px; font-weight: 600; ">
			Practics Lessons</td></tr>
			<tr>
				<td>Heavy vehicle(half an hour)</td>
				<td>8000</td>
			</tr>
			<tr>
				<td>Car+Van manual(half an hour)</td>
				<td>600</td>
			</tr>
			<tr>
				<td>Car(auto)(half an hour)</td>
				<td>850</td>
			</tr>
			<tr>
				<td>Three Wheel</td>
				<td>500</td>
			</tr>
			<tr>
				<td>Motor cycle</td>
				<td>1,300</td>
			</tr>

			<tr><td class="text-center" style="color:#1478c4; font-size: 20px; font-weight: 600; ">
			Medical charges</td></tr>
			
			<tr>
				<td>car/Van</td>
				<td>800</td>
			</tr>
			<tr>
				<td>Three wheel</td>
				<td>800</td>
			</tr>
			<tr>
				<td>Heavy vehicle</td>
				<td>1,300</td>
			</tr>
			<tr><td class="text-center" style="color:#1478c4; font-size: 20px; font-weight: 600; ">
			Government charges</td></tr>
			<tr>
				<td>Heavy vehicle</td>
				<td>2,00</td>
			</tr>
			<tr>
				<td>Car/Van</td>
				<td>2,000</td>
			</tr>
			<tr>
				<td>Three wheel</td>
				<td>2,000</td>
			</tr>
			<tr>
				<td>motor cycle</td>
				<td>1,850</td>
			</tr>
			<tr>
				<td>Heavy vehicle+Motor cycle</td>
				<td>2,450</td>
			</tr>
			<tr>
				<td>Car/Three wheel/Motor Cycle </td>
				<td>2,700</td>
			</tr>
			<tr>
				<td>Car+Three wheel</td>
				<td>2,300</td>
			</tr>
			<tr>
				<td>Car+Motor cycle</td>
				<td>2,450</td>
			</tr>
			</tbody>
	</table>
	<div class="doc text-center">
		<h3 style="color:#1478c4; font-size: 30px; font-family:sans-serif; ">Required Documents</h3>
		<p>*National ID or passport</p>
		<p>*Birth Certificate(Original copy)</p>
		<p>*Medical Certificate</p>
		<p>*Marriage Certificate if the name has been changed after the marriage</p>
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