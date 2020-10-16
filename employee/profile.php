<?php
	include 'connection.php';
	include 'navbar.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
</head>

		<style type="text/css">
			.wrapper{
				margin: 0 auto;
				height: 500px;
				width: 1000px;
				background-color: #00ff78;
			}
			.buttonedit{
				text-align: right;
				padding-top: 150px;
				padding-right: 150px;
			}
			.profileimg{
				margin: -150px auto;
			}
			.profile_details{
				margin: 150px auto;
			}
			.details_session_user{
				margin: -140px auto;
				padding-left: 150px;
				padding-right: 150px;
				padding-bottom: 50px;
				
			}

		</style>
<body>
<div class="wrapper">
	<div class="buttonedit">
		<form name="" action="" method="post">
			<button class="btn btn-default"><span class="glyphicon glyphicon-edit">EDIT</span>
				
			</button>
		</form>
	</div>
	
	<div class="profileimg" style="text-align: center">
	<?php
	echo "<img class='img-circle profile-img'  width=170 height=170 src='images/".$_SESSION['pic']."'>";
	
	?>
	</div>
	
	<div class="profile_details" style="text-align: center">
	
	<b>
	<?php
	echo  "Welcome"." "." ".$_SESSION['logon'];
	
	?>
	</b>
	
	</div>
	
	
				<div class="details_session_user" style="text-align: center">
					<?php
					
					$q=mysqli_query($db,"select * from student where username='$_SESSION[logon]';");
					$row=mysqli_fetch_assoc($q);
					
							echo "<table class='table table-bordered table-hover'>";
										
								echo "<tr>";
								echo"<td>"; 	echo"First Name";	echo "</td>";
								
								echo"<td>";		echo $row['first'];	echo"</td>";
								echo "</tr>";
					
									
											echo "<tr>";
											echo"<td>"; 	echo"LastName";	echo "</td>";
															
											echo"<td>";		echo $row['last'];	echo"</td>";
											echo "</tr>";
					
								echo "<tr>";
								echo"<td>"; 	echo"User Name";	echo "</td>";
															
								echo"<td>";		echo $row['username'];	echo"</td>";
								echo "</tr>";
					
											echo "<tr>";
											echo"<td>"; 	echo"Password";	echo "</td>";
															
											echo"<td>";		echo $row['password'];	echo"</td>";
											echo "</tr>";
					
					
								echo "<tr>";
								echo"<td>"; 	echo"Admission Number";	echo "</td>";
															
								echo"<td>";		echo $row['admission'];	echo"</td>";
								echo "</tr>";
					
					
											echo "<tr>";
											echo"<td>"; 	echo"Email";	echo "</td>";
															
											echo"<td>";		echo $row['email'];	echo"</td>";
											echo "</tr>";
					
					
								echo "<tr>";
								echo"<td>"; 	echo"Contact";	echo "</td>";
															
								echo"<td>";		echo $row['contact'];	echo"</td>";
								echo "</tr>";
					
					
					
					
							
							echo "</table>";
					?>
				</div>
	
</div>
</body>
</html>