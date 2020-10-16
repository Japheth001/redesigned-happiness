<?php
include 'navbar.php';
include("connection.php");
?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, device-scale=1">

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
<title>Online Library Management System</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<!--

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"> HOME</a>
				</li>
				<li><a href="books.php"> BOOKS</a>
				</li>

				<li><a href="feedbacks.php">FEEDBACKS</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="student-login.php"><span><br>LOGIN</span></a>
				</li>
				<li><a href="logout.php"><span ><br>LOG-OUT</span></a>
				</li>
				<li><a href="registration.php"><span ><br>SIGN-UP</span></a>
				</li>

			</ul>


  </div>
</nav>


-->
<style>
	section{
		
	}
	.regg_img{
		
		margin: 0 auto;
		width: 150px;
		height: 100px;
		
	}
	.form-control{
		
	}
	
	
</style>

<section2>
	<div class="log_imgw">
	
		<br><br><br><br>
			
			<div class="box1" style="margin-top: 0px; background-color: #003cff" >
			
			
			<h1 style="color: white; text-align: center; font-size: 25px">Kcaa Inventory System</h1>
			<h1 style="text-align: center; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">Login Form</h1>
	
		<form name="" action="" method="post"> 
		<b><p style="padding-left: 50px;font-size: 15; font-weight: 700;">Login as</p></b>
		
		<input type="radio" style="margin-left: 50px; width: 18px;" name="user" value="admin" id="admin">
		<label for="admin">Admin</label>
		<input type="radio" style="margin-left: 50px; width: 18px;" name="user" value="employee" id="employee">
		<label for="employee">Employee</label>
		
		<br>
			
			<div class="login">
				<input class="form-control" type="text" name="username" placeholder="Username" required ><br>
				<input class="form-control" type="password" name="password" placeholder="Password" required><br>
				
				
				<input class="btn btn-default" type="submit" name="submit" value="Login" style="width:70px; color: black; background-color: mediumseagreen"  >
		
				
				<br><br>
				<p style="color: white">
					<a style="color: white; width: 50px"   href="update_password.php">Forgot password ?</a><br><br>
					
					<div id="register_employee">
						New to this website ? &nbsp; &nbsp; <a style="color: white">Sign-Up</a>
					</div>
					
				</p>
			</div>
			
		</form>
		
	</div>
	</div>			
					
					
</section2>





	<?php
	if(isset($_POST['submit']))
	{
		$count=0;
		$sql="select username from student";
		$res=mysqli_query($db,$sql);
		
		while($row=mysqli_fetch_assoc($res)){
			if(($row['username'])==($_POST['username'])){
			$count=$count+1;	
			}
			
		}
		if($count==0)
			
		{
		mysqli_query($db,"INSERT INTO `student`  VALUES ('$_POST[first]','$_POST[last]','$_POST[username]',
		'$_POST[password]','$_POST[admission]','$_POST[email]','$_POST[contact]', 'pic.jpg');");
		
		?>
		<script type="text/javascript">
	alert("Registration Successful");
	</script>
	
	
			
	<?php
		}else{
				
	?>
	<script>
	alert("The Username exists,Create new one");
	</script>
}
		<?php		 
			
		}
	}
	
	?>

<script src="../js/jquery-1.11.3.min.js"></script>
	

</html>