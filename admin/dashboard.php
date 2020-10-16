<?php
	include("navbar.php");
	include("connection.php");
?>


<!doctype html>
<html>
<head>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min">
<meta charset="utf-8">
<title>Admin Dashboard</title>

</head>


<style type="text/css">
.scroll{
	width: 900px;
	height: 350px;
	overflow: auto;
	margin: 0px auto;
	}
	
	body {
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    transition: background-color .5s;
	
}

.sidenav {
	
	margin-top: 65px;
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #222;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
	
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	
	.Welcome{
		color: white;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
		margin-left: 20px;
		font-size: 25px;
	}
	.h:hover{
		background-color: orange;
		height: 45px;
	}
	.request{
		margin-top: -60px;
		padding-left: 15px;
	}
	
	.form-student_sum{
		background-color: green;
		width: 200px;
		height: 100px;
		color: white;
	}
</style>


<body>
		
		<div id="mySidenav" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
   |<div class="Welcome" style="margin-left: 30px">
   
   
 <?php
	if(isset($_SESSION['logon']))
		$sql3="SELECT pic FROM admin WHERE username='$_SESSION[logon]'";
		$result=mysqli_query($db,$sql3);
	
	while($row=mysqli_fetch_assoc($result)){
		echo("<table>");
		echo("<tr>");
		echo "<img class='img-circle profile-img' height=120 width=120 src='images/".$row['pic']."'>";
		
		echo "</br></br>";
  
		echo "Welcome" .""." ".$_SESSION['logon'];
		
		echo("</table>");
		echo("</tr>");
	}
		
	
	?>
 </div>
 
  
  <a class="h" href="dashboard.php"><span class="glyphicon glyphicon-dashboard">DashBoard</span></a>
   <a class="h" href="profile.php"><span class="glyphicon glyphicon-picture">My-Profile</span></a>
	<a class="h" href="assets_adash.php"><span class="glyphicon glyphicon-scale">Manage_Assets</span></a>
 <a class="h" href="mantain_dash.php"><span class="glyphicon glyphicon-home">Maintenances</span></a>
  
  <a class="h" href="disposal.php"><span class ="glyphicon glyphicon-print">Generate_Reports</span></a>
</div>


<div id="main">

 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
  <!--
 <div class="container">
 	<div class="student_sum">
 	<button class="form-student_sum" ></button>
 	
 </div>
 </div>   
 
-->

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
<div style="margin-top:  -108px;">
	<?php
	include("footer.php");
	?>
</div>

</html>