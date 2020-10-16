<?php
	session_start();
	include("connection.php");
?>


<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, device-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
<link href="../css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script src="../js/bootstrap-3.3.7.js"></script>
<!--
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="bootstrap/js/bootstrap.min.js"></script>


-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>School Management System</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>



<nav class="navbar navbar-inverse">
	<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand active" style="background-color: #222">SCHOOL MANAGEMENT SYSTEM</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"> HOME</a>
				</li>
				
			</ul>
			
			
	<?php
		
			if(isset($_SESSION['logon'])){
		?>
			<div>
				<ul class="nav navbar-nav">
				<li>
					<a href="sprofile.php"><span class="glyphicon glyphicon-user">MY-PROFILE</span></a>
				</li>
				<li>
					<a href="dashboard.php"><span class="glyphicon glyphicon-dashboard">DASHBOARD</span></a>
				</li>
					
				</ul>
			</div>
			
		
			
		<div style="color: white" class="nav navbar-nav navbar-right">
				
		
			
			
	<?php
				
	  if(isset($_SESSION['logon'])){
		  
		  $sql3=("SELECT pic FROM student WHERE username='$_SESSION[logon]'");
		  $result=mysqli_query($db,$sql3);
		  
		  	
			echo "<table class='table table-bordered' style='width:100%;'>";
			echo "<tr style='background-color: orange'>";
			
		  			
			echo "</table>";
		  
		  echo "<table class='table table-bordered' style='width:100%;' >";
		  while($row=mysqli_fetch_assoc($result)){
			 
			  echo "<tr>";
				
				
				echo "<img class='img-circle profile-img'  width=70 height=70 src='images/".$row['pic']."'>";	
				
				echo "</tr>";
			  
			echo ""."".$_SESSION['logon'];
		  }
		   echo "</table>";
		  
	  }
			
	  ?>
				
				
	</div>		
			
	<div class="nav navbar-nav navbar-right">
			<br><br>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">LOG-OUT</span></a>
				</li>
			</div>		
			
			
			
			
			
			
		</div ></a></li>
			
	
	
	<?php	
					}else{
	?>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="student-login.php"><span class="glyphicon glyphicon-log-in"><br>LOGIN</span></a>
				</li>
				
				<li><a href="registration.php"><span class="glyphicon glyphicon-user" ><br>SIGN-UP</span></a>
				</li>

			</ul>
			<?php
					}
			?>

		
			

  </div>
</nav>




<script src="../js/jquery-1.11.3.min.js"></script>
</body>

</html>