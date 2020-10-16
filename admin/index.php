

<?php
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kcaa Inventory Management System</title>
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

<div class="wrapper">
	<header>
	<!--Adding of Navigation at this point-->
	<!--Add Logo Image-->
	<div class="logo">
	 <img src="images/acc7.jpg " width="100px" height ="100px">
	<h1>KCAA INVENTORY MANAGEMENT SYSTEM</h1>
	
	
	</div>
	
	<div  style="color: white">
	<?php
			if(isset($_SESSION['logon'])) {
	?>
			
	<nav>
		<ul>
			<li><a href="index.php"> HOME</a></li>
			<li><a href="books.php"> ASSETS</a></li>
			<li><a href="logout.php">LOG-OUT</a></li>
			
			<li><a href="feedbacks.php">FEEDBACKS</a></li>
		</ul>
	</nav>
	<?php
			}else{
	?>
	<nav>
		<ul>
			<li><a href="index.php"> HOME</a></li>
			<li><a href="books.php"> ASSETS</a></li>
			<li><a href="admin-login.php">ADMIN-LOGIN</a></li>
			
			<li><a href="feedbacks.php">FEEDBACKS</a></li>
		</ul>
	</nav>
	<?php
			}
	
				
	?>
	</div>
	
	
	
	
	</header>

	<section>
	
		<div class="sec_img">
		<br><br><br><br><br><br><br><br><br>
			
			<div class="box" style="margin-top: -110px" >
			
				<h1 style="text-align: center; font-size: 30px"> Welcome To Kcaa Inventory Website</h1>
				<h1 style="text-align: center; font-size: 20px">Active</h1><br>
				<h1 style="text-align: center; font-size: 15px">Karibu</h1>
				<h1 style="text-align: center; font-size: 15px">Login to proceed...</h1>
		
			
			</div>
			</div>
	</section>

	<footer>
				<p style="text-align: center; font-size: 20px; color: white">
					Email: &nbsp; mumokimeu003@gmail.com<br><br>
					Phone: &nbsp; +254714020558
				</p>
	
	</footer>
	
	<?php
	include 'footer.php';
	?>
</div>
</body>
</html>
