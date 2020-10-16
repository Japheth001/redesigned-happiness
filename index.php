<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kcaa Inventory System</title>
<link rel="stylesheet" type="text/css" href="style.css">
<!--More styling to be declared-->


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Above code allows the browser to be able to fit in any given display-->


</head>

<style type="text/css">
	nav{
	float: right;
	word-spacing: 30px;
	line-height: 0px;
	padding: 50px;
}
	
</style>
<body>

<div class="wrapper" style="height: 450px;">
	<header style="height: 80px">
	<!--Adding of Navigation at this point-->
	<!--Add Logo Image-->
	<div class="logo">
	 <img src="images/accn1.png" width="100px" height ="50px">
	<h1>KCAA INVENTORY SYSTEM</h1>
	
	
	</div>
	
	<div  style="color: white">
	<?php
			if(isset($_SESSION['logon'])) {
	?>
			
	<nav>
		<ul>
			<li><a href="index.php"> HOME</a></li>
			
			<li><a href="logout.php">LOG-OUT</a></li>
			
			<li><a href="feedbacks.php">FEEDBACKS</a></li>
		</ul>
	</nav>
	<?php
			}else{
	?>
	<nav>
		<ul style="margin-left: 600px;">
			<li><a href="index.php"> HOME</a></li>
			
			<li><a href="login.php">LOGIN</a></li>
			
		
		</ul>
	</nav>
	<?php
			}
	
				
	?>
	</div>
	
	
	
	
	
	</header>

	<section>
	
		<div class="sec_imgstd" style="background-image:url(images/kcaa8.png); height: 500px; width:1300; background-image: no-repeat">
		<br><br><br><br><br><br><br><br><br>
			
			<div class="box11" style="margin-top: -100px" >
			
			
			<h1 style="text-align: center; font-size: 30px"> Welcome To Kcaa Inventory Website</h1>
				<h1 style="text-align: center; font-size: 20px">Active</h1><br>
				<h1 style="text-align: center; font-size: 15px">Karibu</h1>
				<h1 style="text-align: center; font-size: 15px">Login to proceed...</h1>
		
			
			</div>
			</div>
			
			
	</section>
	<br><br>
	<div style="margin-top: -90px;">
		<?php
	include 'footer.php';
	?>
	</div>
	
</div>
</body>
</html>
