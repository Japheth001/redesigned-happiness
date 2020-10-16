<?php
	session_start();
	include "connection.php";
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min">
<meta charset="utf-8">
<title>Sidebar Dashboard Template</title>
</head>

<style type="text/css">

	
	
	body{
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif"
	}
	header{
		position: fixed;
		background: #10E549;
		padding: 20px;
		width: 100%;
		height: 30px;
	}
	.left_area h3{
		color: #fff;
		margin: 0;
		text-transform: uppercase;
		font-size: 22px;
		font-weight: 900;
	}
	.left_area span{
		color: aqua;
	}
	.logout-btn{
		padding: 5x;
		background:#E8E8E8;
		text-decoration: none;
		float: right;
		margin-top: -30px;
		margin-right: 40px;
		border-radius: 2px;
		font-size: 15px;
		font-weight: 600;
		color: #fff;
		transition: 0.5s;
		transition-property: background;
	}
	.logout-btn:hover{
		background: #14ECCE;
	}
	.sidebar{
		background: #080349;
		margin-top: 70px;
		padding-top: 30px;
		position: fixed;
		left: 0px;
		width: 250px;
		height: 100px%;
		transition: 0.5s;
		transition-property: left;
		
	}
	.sidebar .profile-image{
		width: 100px;
		height: 100px;
		border-radius: 100px;
		margin-top: 10px;
		
	}
	.sidebar h4{
		color: #ccc;
		margin-top: 0px;
		margin-bottom: 20px;
	}
	.sidebar a{
		color: #fff;
		display: block;
		width: 100%;
		line-height: 60px;
		text-decoration: none; 
		padding-left: 40px;
		box-sizing: border-box;
		transition: 0.5s;
		transition-property: background;
		
	}
	.sidebar a:hover{
		background: #10ED83;
		
	}
	.sidebar i{
		padding-right: 10px;
	}
	label #sidebar_btn{
		z-index: 1;
		color: #fff;
		position: fixed;
		cursor: pointer;
		left: 300px;
		font-size: 20px;
		margin: 5px 0;
		transition: 0.5s;
		transition-property: color;
	}
	label #sidebar_btn:hover{
		color: aqua;
		
	}
	#check:checked~.sidebar{
		left: -190px;
	}
	#check:checked~.sidebar a span{
		display: none;
	}
	#check:checked~.sidebar a{
		font-size: 20px;
		margin-left: 170px;
		width: 80px;
		
	}
	.content{
		margin-left: 250px;
		background: url(images/818215-beach-wallpaper-for-computer-2560x1600-computer.jpg);
		background-position: center;
		background-size: cover;
		height: 100vh;
		transition: 0.5s;
		transition-property: 
	}
	#check:checked~.content{
		margin-left: 60px;
	}
	#check{
		display: none;
	}
</style>


<body>
<input type="checkbox" id="check">
	<!--.....................................Header area start...........................-->
	<header>
	<label for="check"><i class="fa fa-bars" id="sidebar_btn"></i></label>
		<div class="left_area">
			<h3>INVENTORY <span> SYSTEM</span></h3>
		</div>
		
		<div class="right_area">
			<a href="logout.php" class="logout-btn">Logout</a>
		</div>
	</header>
	<!--.....................................Header area end.............................-->
	
	<!-----------------------------Sidebar Start...........................................-->
	<div class="sidebar">
		<center>
		
			<?php
				$sql3=("SELECT pic FROM employee WHERE username='$_SESSION[logon]'");
				$result=mysqli_query($db,$sql3);
				
				while($q=mysqli_fetch_assoc($result)){
					echo("<table>");
					echo "<tr>";
					
				
					echo "<img class='img-circle profile-image' height=50 width=55 src='images/".$q['pic']."'>";
				}
				
			?> <h4><?php echo "Welcome" .""." ".$_SESSION['logon'];?></h4 <?php 
				echo "</tr>";
				echo("</table>");	
				
			?>
			
			
				
		</center>
		<a href="dashboard_empl.php"><i class="fa fa-desktop"><span>DashBoard</span></i></a>
			<a href="sprofile.php"><i class="fa fa-picture-o"><span>Profile</span></i></a>
			<a href="assets_dash.php"><i class="fa fa-table"><span>My Assets</span></i></a>
			<a href="emp_message.php"><i class="fa fa-th"><span>Messages</span></i></a>
			<a href="#"><i class="fa fa-info-circle"><span>About</span></i></a>
			<a href="#"><i class="fa fa-sliders-h"><span>Settings</span></i></a>
			
	</div>
	<!-----------------------------Sidebar Ends...........................................-->
	<div class="content">
		
	</div>
	
	
	
	
	
	
	<h2 style="font-size: 30; color: black; text-align: center; margin-top: -80px;">WELCOME TO ADMIN PANEL</h2>

		


<div class="container admin_number" style="background-color: #36a71a; width: 200px; height: 115px; margin-left: 150px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total  Admins</div>
<div>
<?php
	$sql1="SELECT id FROM admin ORDER BY id;";
	$query_run=mysqli_query($db,$sql1);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>



<div class="container admin_number" style="background-color: #ce7dc0; width: 200px; height: 115px; margin-left: 450px; margin-top: -115px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total Employees</div>
<div>
<?php
	$sql2="SELECT username FROM employee ORDER BY username;";
	$query_run=mysqli_query($db,$sql2);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>



<div class="container admin_number" style="background-color: #1aff1a; width: 200px; height: 115px; margin-left: 750px; margin-top: -115px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total Assets Registered</div>
<div>
<?php
	$sql3="SELECT bid FROM assets ORDER BY bid;";
	$query_run=mysqli_query($db,$sql3);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>



<div class="container admin_number" style="background-color: #1aff66; width: 200px; height: 115px; margin-left: 1050px; margin-top: -115px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total Issued Assets </div>
<div>
<?php
	$sql4="SELECT approve FROM issue_asset WHERE approve='Yes' ORDER BY approve ;";
	$query_run=mysqli_query($db,$sql4);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>

<br>



<div class="container admin_number" style="background-color: #00ff80; width: 200px; height: 115px; margin-left: 1050px; margin-top: -7px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total Expired Assets </div>
<div>
<?php
	$var='<p style="color:pink; background-color:BLUE">EXPIRED</p>';
	$sql5="SELECT approve FROM issue_asset WHERE approve='$var' ORDER BY approve ;";
	$query_run=mysqli_query($db,$sql5);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>
<br>


<div class="container admin_number" style="background-color:  #ff471a; width: 200px; height: 115px; margin-left: 1050px; margin-bottom: 130px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Returned Assets </div>
<div>
<?php
	$var1='<p style="color:pink; background-color:BLUE">RETURNED</p>';
	$sql5="SELECT approve FROM issue_asset WHERE approve='$var1' ORDER BY approve ;";
	$query_run=mysqli_query($db,$sql5);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>




</body>
</html>