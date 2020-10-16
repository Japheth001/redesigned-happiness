<?php
include("connection.php");
include("navbar.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Admin Profile</title>
<style type="text/css">
	body{
		
	}
	.wrapper{
		margin-top: 50px;
		width: 900px;
		height: 510px;
		background-image: url(images/User-Registration.jpg);
		background-color: #801b0029;
	
		background-repeat: no-repeat;
	}
	.form-control{
		margin: 0px auto;
		margin-left: 580px;
		width: 250px;
		height: 30px;
		
	}
	.editform{
		margin-top: 50px;
	}
	.label{
		margin: 0px auto;
		margin-left: 580px;
		width: 250px;
		font-size: 14px
	}
	.btn{
		margin-left: 660px;
		margin-top: 15px;
	}
	.btn-success{
		
	}
	label2{
		margin-left: 70px;
		font-size: 20px;
	}
	
</style>

</head>

<body>

<div class="wrapper">

<div>
	<form method="post">
		
	</form>
</div>
 <div class="form-pack">
  <div class="editform">
  			
			
			
		<!............Create a php form to fetch all data to be posted to the profile.............-->
		<?php
			
				$sql="SELECT * FROM `student` WHERE username='$_SESSION[logon]'";
				$result=mysqli_query($db,$sql) or die (mysqli_error());
				
				while($row = mysqli_fetch_assoc($result)){
					
					$first=$row['first'];
					$last=$row['last'];
					
					$username=$row['username'];
					$password=$row['password'];
				
					$email=$row['email'];
					$contact=$row['contact'];
					
					
					?>
					
					
				<form method="post" name="" action="" enctype="multipart/form-data">
				
				<label2><b>Edit your Profile Information</b></label2>
				
				<input class="form-control" type="file" name="file" ><br>
				<label><span class="label label-primary" >First Name</span></label>
				<input class="form-control" type="text" name="first" value="<?php  echo $row['first']; ?>">
				<label><span class="label label-primary" >Last Name</span></label> 
				<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">
				<label><span class="label label-primary" >Username</span></label>
				<input class="form-control" type="text" name="username"  value="<?php echo $username; ?>">
				<label><span class="label label-primary" >Password</span></label>
				<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">
				
				<label><span class="label label-primary" >Email</span></label>
				<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
				<label><span class="label label-primary" >Contact</span></label>
				<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">
				<button class="btn btn-success" name="submit" type="submit">UPDATE
				
				
					
				</button>			
			</form>
					<?php
				}
			
	  	?>
	  
	  	
	  	<?php
	  		if(isset($_POST['submit'])){
				
				
					move_uploaded_file($_FILES['file']['tmp_name'],"images/" .$_FILES['file']['name']);
				
					$first=$_POST['first'];
					$last=$_POST['last'];
					
					$username=$_POST['username'];
					$password=$_POST['password'];
				
					$email=$_POST['email'];
					$contact=$_POST['contact'];
					$pic=$_FILES['file']['name'];
			
				
				$sql1=("UPDATE student SET pic='$pic', first='$_POST[first]',last='$_POST[last]',username='$_POST[username]',password='$_POST[password]',email='$_POST[email]',contact='$_POST[contact]' WHERE username='$_SESSION[logon]';");
				
				
				if(mysqli_query($db,$sql1)){
					?>
					<script type="text/javascript">
						alert("Saved Successfully");
						window.location="sprofile.php";
	  				</script>
					<?php
				}
					
			}
	  	?>
	</div>
	
</div>
</div>	
 
</body>
</html>