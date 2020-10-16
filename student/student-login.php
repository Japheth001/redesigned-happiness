<?php
include 'connection.php';
include 'navbar.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, device-scale=1">
<!--The device to adjust display depending on the device using-->
<link rel="stylesheet" type="text/css" href="style.css">
<!--Implement bootstrap here.........-->
<!-- Latest compiled and minified CSS -->
<!-- jQuery library -->
<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
<link href="../css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="../js/jquery-1.11.3.min.js"></script>
<!-- Latest compiled JavaScript -->
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script src="../js/bootstrap-3.3.7.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Online Library Management System</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<style type="text/css">
	
		/*New Style for Modal*/
	
	body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
	margin: 0 auto;
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 1px 8px;
    background-color: #5cb85c;
    color: white;
}
	
	
	
/* Other styles used*/
	
	
	.btn-default{
		cursor: pointer;
		border: none;
		opacity: 0.9;
		color: white;
	}
	.form-control{
		background-color: #ddd;
		background: #f1f1f1;
		width: 200px;
		height: 30px;
		margin: 0 auto;
	}

</style>


<body style="padding-top: 0px">

<!--<header style="height=80px">
<div class="logo">
	
	<h1 style="padding-left: 20px; margin-top: 20px; line-height: 50px">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
	</div>
	
	<nav>
		<ul>
			<li><a href="index.html"> HOME</a></li>
			<li><a href=""> BOOKS</a></li>
			<li><a href="student_login.html">STUDENT-LOGIN</a></li>
			<li><a href="registration.html">REGISTRATION</a></li>
			<li><a href="">FEEDBACKS</a></li>
		</ul>
	</nav>
				
</header>-->
		
	<!--
		
				
	<nav class="navbar navbar-inverse">
	<div class="container-fluid" >
	<div class="navbar-header">
		<a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
	</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php"> HOME</a></li>
			<li><a href="books.php"> BOOKS</a></li>
			
			<li><a href="feedbacks.php">FEEDBACKS</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="student-login.php"><span ><br>LOGIN</span></a></li>
			<li><a href="logout.php"><span ><br>LOG-OUT</span></a></li>
			<li><a href="registration.php"><span ><br>SIGN-UP</span></a></li>

		</ul>
		
		
		</div>
	</nav>
			
			-->
				
<section>
	<div class="log_img">
	
		<br><br><br><br>
			
			<div class="box1" style="margin-top: 0px; background-color: #003cff" >
			
			
			<h1 style="color: white; text-align: center; font-size: 25px">Library Management System</h1>
			<h1 style="text-align: center; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">Students Login Form</h1>
	
		<form name="" action="" method="post"> 
		
		<br>
			
			<div class="login">
				<input class="form-control" type="text" name="username" placeholder="Username" required ><br>
				<input class="form-control" type="password" name="password" placeholder="Password" required><br>
				
				
				<input class="btn btn-default" type="submit" name="submit" value="Login" style="width:70px; color: black; background-color: mediumseagreen"  >
		
				
				<br><br>
				<p style="color: white">
					<a style="color: white; width: 50px"   href="update_password.php">Forgot password ?</a><br><br>
					
					<div id="register_student">
						New to this website ? &nbsp; &nbsp; <a style="color: white">Sign-Up</a>
					</div>
					
				</p>
			</div>
			
		</form>
		
	</div>
	</div>			
					
					
</section>


<!--Modal for Student Marks.....-->
<!-- Html Code for modal form to select term -->


<!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
	<p>Welcome Admin</p>
</div>
	
	<div class="modal-body">
	<form method="post" action="" name="" >	
	<h3 style="text-align: center; font-size: 20px; color: orangered; font-size: 30px;"><b><span class="glyphicon glyphicon-car"><caption>Student_Registration_Form</caption></span></b></h3>
	
	
						<input class="form-control" type="text" name="first" placeholder="FirstName" reqired><br>
						
						<input  class="form-control" type="text" name="last" placeholder="Last Name" required><br>
						<input class="form-control" type="text" name="username" placeholder="Username" required><br>
						<input class="form-control" type="password" name="password" placeholder="Password" required><br>
						<input class="form-control" type="text" name="admission" placeholder="Admission" required><br>
						<input class="form-control" type="email" name="email" placeholder="Email" required><br>
						<input class="form-control" type="number" name="contact" placeholder="Phone Number" required><br>
						<input class="btn btn-default" type="submit" name="submit_reg" value="Sign Up" style="width:70px; color: black; background-color: salmon; margin-left: 270px;">

		
		
	</form>
	</div>
	
	
	
	<div class="modal-footer">
		<h5>@Admin</h5>
	</div>
</div>
	
</div>












	<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		
		//Get the button that opens the modal
		var btn=document.getElementById("register_student");
		
		
		//Get the span element that closes the modal
		var span=document.getElementsByClassName("close")[0];
		

		//Open the button once clicked
		btn.onclick=function(){
			modal.style.display="block"
		}
		//When the user clicks on the span to close the button
		span.onclick=function(){
			modal.style.display="none";
		}
		
		//When the user click outside the modal box this is what happens
		window.onclick=function(event){
			if(event.target==modal){
				modal.style.display="none";
			}
		}
			
		
	
	</script>
	
	





<?php
/*Check if the button is pressed*/
if (isset($_POST['submit'])){
	
	$count=0;
	$res=mysqli_query($db,"select * from student where username='$_POST[username]' && password='$_POST[password]';");
	
	/*This function will count how many rows are there in our result*/
	$res1=mysqli_query($db,"select * from student");
	
	$row=mysqli_fetch_assoc($res1);
	 $count=mysqli_num_rows($res);
		if($count==0){
		?>
		
		<!--
		 <script>
	alert("Username and password does not match");
			 
	</script>
	
	-->
	
	<div class="alert alert-danger" style="width=10px; margin-right: 800px; margin-top: -90px; padding-right: 50px">
		<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Username and password does not match</strong>
		
	</div>
	}
	<?php
		}else{
			 $_SESSION['logon']=$_POST['username'];
			 $_SESSION['pic']=$row['pic'];
	?>
			 
			
			<script>
					window.location="dashboard.php";
				
			</script>
			}
			<?php
		}
	}

	
	
?>





<?php
	if(isset($_POST['submit_reg']))
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



	
</body>
</html>
























