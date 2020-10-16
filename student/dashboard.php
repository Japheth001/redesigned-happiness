<?php
	include("navbar.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Dashboard</title>
</head>


<style type="text/css">
	
	/*     ....................Style for the Slideshow Effect........................ */
	
	* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none; height: 50%;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	
	
	
	
	
	
	
	
	
	
	
	
	
/*................Stytle for the Side Navigation Effect......................*/
	.scroll{
	width: 900px;
	height: 350px;
	overflow: auto;
	margin: 0px auto;
	}
	
	body {
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    transition: background-color .5s;
}

.sidenav {
	
	margin-top: 65px;
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #222;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
	
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	
	.Welcome{
		color: white;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
		margin-left: 20px;
		font-size: 25px;
	}
	.h:hover{
		background-color: orange;
		height: 50px;
	
	
	
	
	
	
	
	
	
	

</style>

<body>
	










<!-----Adding the search option button----------My Side Navigation bar------->

<div id="mySidenav" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
   |<div class="Welcome" style="margin-left: 30px">
   
   
 <?php
	if(isset($_SESSION['logon']))
		$sql3="SELECT pic FROM student WHERE username='$_SESSION[logon]'";
		$result=mysqli_query($db,$sql3);
	
	while($row=mysqli_fetch_assoc($result)){
		echo("<table>");
		echo("<tr>");
		echo "<img class='img-circle profile-img' height=150 width=150 src='images/".$row['pic']."'>";
		
		echo "</br></br>";
  
		echo "Welcome" .""." ".$_SESSION['logon'];
		
		echo("</table>");
		echo("</tr>");
	}
		
	
	?>
 </div>
 
  
  <a class="h" href="dashboard.php"><span class="glyphicon glyphicon-dashboard">DashBoard</span></a>
  <a class="h" href="sprofile.php"><span class="glyphicon glyphicon-picture">My-Profile</span></a>
  <a class="h" href="library_dash.php"><span class="glyphicon glyphicon-book">Library</span></a>
  <a class="h" href="academic_dash.php"><span class="glyphicon glyphicon-education">Academics</span></a>
  <a class="h" href="#"><span class="glyphicon glyphicon-modal-window">Fees</span></a>
  <a class="h" href="#">Issue Info</a>
</div>


<div id="main">
	





<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>









 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
 

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     


<h2></h2>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/7.jpg" style="width:100%">
  <div class="text">Caption One</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/27.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/school_building.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
















</body>
</html>