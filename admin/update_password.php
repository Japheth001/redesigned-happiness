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
	.wrapper{
		width: 600px;
		height: 500px;
		margin: 0 auto;
		background-color: #06f71f;
		opacity: .7;
	}
	.container{
		width: 300px;
		margin: 0 auto;
		padding-top: 110px;
	}
	


</style>
<body>

			<div class="wrapper">
		
				<div class="container">
					
			<div>
				<h2 style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'"><b>Change Admin Password</b</h2><br><br>
			</div>
			
			
			
					<form action="" name="" method="post">
						<input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
						<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
						<input class="form-control" type="text" name="newpassword" placeholder="New password"><br>
					
						<button class="btn btn-default" type="submit" name="update" >
						<span class="glyphicon glyphicon-edit">UPDATE</span> 
							
						</button>
						
					</form>
				</div>
			</div>
			
			
			<!------------------------------------------PHP CODE BEGINS HERE.........................................-->
			
			
			<?php
			if(isset($_POST['update']))
			{
				$sql= mysqli_query($db,"UPDATE admin SET password='$_POST[newpassword]' WHERE username='$_POST[username]'  AND email='$_POST[email]';");
				
				if($sql) {
					
					?>
					
					<script type="application/javascript">
						alert("Password Successfuly updated..")
					</script>
					
					<?php
					} else{
					?>
					<script type="application/javascript">
						alert("Incorrect username or email provided")
					</script>
					
					<?php
				}
					
				}	
				
					
			?>		
			
			
</body>
</html>