<?php
include 'connection.php';
include 'navbar.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Password</title>
</head>
<style type="text/css">
	body{
		height: 550px;
	}
	.wrapper{
		width: 500px;
		height: 380px;
		margin: 0 auto;
		background-color: #06f71f;
		opacity: .7;
	}
	.container{
		
		width: 500px;
		margin: 0 auto;
		align-content: center;
		padding-top: 30px;
	}
	.btn-success{
		margin-left: 90px;
	}
	.btn-default{
		border: none;
	}
	.form-control{
		width: 280px;
		margin-left: 100px;
	
	}
	


</style>
<body>

			<div class="wrapper">
		
				<div class="container">
					
			<div>
				<h2 style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'"><b> Employee Change Password</b</h2><br><br>
			</div>
			
			
			
					<form action="" name="" method="post">
						<input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
						<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
						<input class="form-control" type="text" name="newpassword" placeholder="New password"><br>
					
						<button style="margin-left: 100px;" class="btn btn-default" type="submit" name="update" >
						<span class="glyphicon glyphicon-edit">UPDATE</span> 
							
						</button>
						
						
						
					</form><br>
					
					<form action="login.php" name="" method="post">
						<button class="btn btn-success" type="submit" name="back" style="background-color: #2f04f5; margin-left: 310px; margin-top: -90px;" >
						<span class="glyphicon glyphicon-backward" >Login</span> 
							
						</button>
					</form>
					
			
				</div>
			</div>
			
			
			
			
			<!------------------------------------------PHP CODE BEGINS HERE.........................................-->
			
			<?php
				if(isset($_POST['back'])){
					?>
					<script type="text/javascript">
						window.location="login.php";
					</script>
					<?php
				}	
			?>
			
			
			
			
			
			
			
			
			<?php
			$count=0;		
			if(isset($_POST['update']))
			{
				$count=0;
				$sqlsearch="SELECT * FROM employee WHERE username='$_POST[username]' AND email='$_POST[email]';";
				
				$results=mysqli_query($db,$sqlsearch);
				$count=mysqli_num_rows($results);
				
				if($count==0){
					?>
					<script type="application/javascript">
						alert("Incorrect username or email provided")
					</script>
					
					<?php
				}else{
					
				
				
				$sql= mysqli_query($db,"UPDATE employee SET password='$_POST[newpassword]' WHERE username='$_POST[username]'  AND email='$_POST[email]';");
				
				
					
					?>
					
					<script type="application/javascript">
						alert("Password Successfuly updated..")
					</script>
					
					<?php
					
				}	
				
			}
				
			
			?>
			
			
			
			
			
			
			
	
			
</body>
<div style="margin-top: 40px;">
	<?php
	include "footer.php";
	?>	
</div>
	
</html>