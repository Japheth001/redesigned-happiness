<?php
include("connection.php");
include("navbar.php");
?>
<!doctype html>
<html>
<head>
<meta name="viewport" charset="utf-8" content="width=device-width, device-scale=1">
<title>Message</title>
</head>

<style type="text/css">
	body{
		background-color: #f9edd3;
	}
	.wrapper{
		height: 530px;
		width: 500px;
		background-color: black;
		margin: -20px auto;
		opacity: .9;
		padding: 10px;
	}
	.form-control{
		height: 40px;
		width: 65%;
	}
	.btn-lg{
		height: 40px;
		margin-left: 10px;
		width: 90px;
		margin-top: 0px;
		
	}
	.msg{
		height: 390px;
		background-color: #ffcf00;
		overflow-y: scroll;
	}
	.btn-info{
		background-color: #2cff00;
	}
	.chat{
		display: flex;
		flex-flow: row wrap;
	}
	.user-chatbox{
		height: 50px;
		width: 380px;
		padding: 13px 10px;
		background-color: #4aca41;
		border-radius: 10px;
		order: -1;
	}
	
	.admin-chatbox{
		height: 50px;
		width: 380px;
		padding: 13px 10px;
		background-color: white;
		border-radius: 10px;
		color: red;
	}
	
	
</style>

<body>


<!------------------------------PHP CODING SECTION FOR BOTH CHATTINGS.............................-->
<?php
		
			if(isset($_POST['emp-msg'])){
				mysqli_query($db,"INSERT INTO `messages`(`username`, `message`, `status`, `sender`) VALUES ( '$_SESSION[logon]',
				'$_POST[msg]','no','employee')");
				
				
				$res=mysqli_query($db,"SELECT * FROM `messages` WHERE username='$_SESSION[logon]'") or die(mysqli_error($db));
			}else{
				$res=mysqli_query($db,"SELECT * FROM `messages` WHERE username='$_SESSION[logon]'") or die(mysqli_error($db));
			}
		
?>


<!----------------------------------------------------------------------------------------------------->










<div class="wrapper">
	<div style="height: 70px; width: 100%; background-color:#339257; text-align: center; color: white">
		<h3 style="margin-top: -5px;padding-top: 15px;">Admin</h3>
	</div>
	
	<div class="msg">
	
	<?php
		while($row=mysqli_fetch_assoc($res)){
			
				
			if($row['sender']=='employee'){
			
	?>
	<br>
	
	
	<!--......................This is Employee section...............................................-->
		
		<div class="chat user">
			<div style="float: left; padding-top: 5px;">
			&nbsp;
				<?php
				$sql3=("SELECT pic FROM employee WHERE username='$_SESSION[logon]'");
				$result=mysqli_query($db,$sql3);
				
				while($q=mysqli_fetch_assoc($result)){
					echo("<table>");
					echo "<tr>";
					
				
					echo "<img class='img-circle profile_img' height=50 width=55 src='images/".$q['pic']."'>";
				}
				
				echo "</tr>";
				echo("</table>");
				
				
				
				
			?>
					
				
			</div>
			
			&nbsp;
			<div style="float: left" class="user-chatbox" >
			
	
				<p>Hello! This is Employee</p>
			</div>
			
			
		</div>
		
		<!--..................................End of Employee section.....................................-->		
		<!--............If condition ends just below there...........................................-->
		
	<br>	
		<?php
			}else{
				
				?>
				<div class="chat admin">
			<div style="float: left; padding-top: 5px;">
			&nbsp;
				<img class="profile-img img-circle" src="images/p" style="width: 50px; height: 50px; "	>
			</div>
			
				
				&nbsp;
			<div class="admin-chatbox" style="float: left">
				<p>Hello! This is Admin</p>
			</div>
			
			
			
		</div>
		
				
				<?php
		?>	
		
		
		
		
		<?php
			}
				}
		?>

		
	</div>
	
	
	<div style="height: 100px; padding-top: 10px;">
		<form action="" name="" method="post">
			<input class="form-control" type="text" name="msg" required="" placeholder="Write message..." style="float: left">
			<button name="admin-msg" class="btn btn-info btn-lg">&nbsp;<span class="glyphicon glyphicon-send" style="font-size: 10px;">&nbsp;</span>Send</button>
		</form>
	</div>
	
	<?php
		if(isset($_SESSION['logon'])){
			if(isset($_POST['admin-msg'])){
				$sqlmsg="INSERT INTO `comments`( `username`, `comment`, `status`, `sender`) VALUES ('$_SESSION[logon]',
				'$_POST[msg]','no','admin')";
				
				mysqli_query($db,$sqlmsg);
				
				
				
				mysqli_query($db,$sqlgetmsg);
			}else{
				$sqlgetmsg=" SELECT `id`, `username`, `comment` FROM `comments` WHERE username='$_SESSION[logon]';";
			}
		}
	?>
	
	
	
	
</div>
</body>
</html>