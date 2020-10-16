<?php
include 'navbar.php';
include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>assets</title>


<style type="text/css">
	.wrapper{
		height: 370px;
	}
	.scroll{
	width: 1150px;
	height: 260px;
	overflow: auto;
	
	}
	th,td{
		padding: 35%;
		width: 15%;
		
	}
	tr{
		width: 15%;
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
		height: 50px;
	}
	.request{
		margin-top: -60px;
		padding-left: 15px;
	}
	
		
/*Style for Shaking Image*/	
	
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

	
	
</style>
</head>

<body>

<div class="wrapper">
	

<div class="srchi" style="margin-left: 500px;">
<form class="navbar-form" name="form2" method="post">
	<input class="form-control" type="text" name="enterid" placeholder="Enter asset ID" required>
	<button class="btn btn-default" type="submit" name="request" 
	style="background-color: hotpink" >
		<span>REQUEST</span>
	</button>
	
	

</form>

</div>

<div class="srchi" style="margin-top: 10px; margin-left: 75px;">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="search by name.." required>
	<button class="btn btn-default" type="submit" name="srch" 
	style="background-color: hotpink" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div><br>

<div>

<!------------------------------------------------------------------------------------------------------------
<form class="navbar-form" name="form3" method="post">
	<button  name="requested" type="submit" class="btn btn-default" style="color: green; border: none; margin-left: 75px; background-color: greenyellow">
	Requested assets
</button>

</form>
-------------------------------------------------------------------------------------------------------------->
</div>

		
		<?php	
	  			if(isset($_POST['backs'])){
					?>
					<script>
	  				window.location="assets_dash.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		
			<br>
		
		
		<?php	
	  			if(isset($_POST['backz'])){
					?>
					<script>
	  				window.location="e_assets.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	








<div class="container">

 <?php
	
	if($_SESSION['department']=='1'){
						$section="Not-stated";
					}elseif($_SESSION['department']=='2'){
						$section="ICT";
					}elseif($_SESSION['department']=='3'){
						$section="Corporate Planning";
					}elseif($_SESSION['department']=='4'){
						$section="Corporate Communications";
					}elseif($_SESSION['department']=='5'){
						$section="Human Resource";
					}elseif($_SESSION['department']=='6'){
						$section="Finance";
					}elseif($_SESSION['department']=='7'){
						$section="Procurement";
					}elseif($_SESSION['department']=='8'){
						$section="Air Transport";
					}elseif($_SESSION['department']=='9'){
						$section="Flight Operations";
					}elseif($_SESSION['department']=='10'){
						$section="Licensing and Examinations";
					}elseif($_SESSION['department']=='11'){
						$section="General Directors";
					}elseif($_SESSION['department']=='12'){
						$section="Aviation Security";
					}elseif($_SESSION['department']=='13'){
						$section="Ground Operations";
					}elseif($_SESSION['department']=='14'){
						$section="Airworthiness";
					}elseif($_SESSION['department']=='15'){
						$section="Aeronautical Information Services";
					}
		?>
		<h3 style="margin-top: -30px;">Borrow Assets at <?php
	echo  ""." "." ".$section;
					
		
	
	?></h3>

	

<?php
	if(isset($_POST['srch']))
	{
	 $q=mysqli_query($db,"SELECT * FROM assets
WHERE quantity !='0' AND department=$_SESSION[department] AND name LIKE '%$_POST[enter]%'");
	 
		
		if(mysqli_num_rows($q)==0)
		{
			?>
		<br><br>
		<img src="images/acc7.jpg" style="width: 210px; height: 175px; margin-left: 450px; margin-top: -53px;">
		
		
		<div>
		<?php
			echo "Sorry! No asset found". mysqli_error($db);
		?>
		</div>
		
		<div class="back-buttons" style="margin-top: 0px; margin-left: 510px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backz">BACK</button>
	  				</form>
	  	</div>	
			
			
		<?php
		}else{
		?>
		<br>
		<div class="back-buttons" style="margin-top: -75px; margin-left: 1050px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backz">BACK</button>
	  				</form>
	  	</div>
		<br>
<?php		
	
			
			echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "ID"	;			echo "</th>";
	echo "<th>";			echo "IMAGE";			echo "</th>";
	echo "<th>";			echo "NAME"	;			echo "</th>";
	echo "<th>";			echo "DATE"	;			echo "</th>";
	echo "<th>";			echo "QUANTITY"	;		echo "</th>";
	echo "<th>";			echo "STATUS"	;		echo "</th>";
	echo "</table>";
	
	echo "</table>";
	?>
	<div class="scroll">
	<?php
	
		
			
			
	echo "<table class='table table-bordered table-hover'>";
	
	while($row=mysqli_fetch_assoc($q)){
		echo "<tr>";
		echo "<td>";		echo $row['bid'];			echo "</td>";
		
		echo "<td><a href='images/".$row['file']."''>View</a>"; echo "<img class='img-circle profile-img' height=70 width=70 src='images/".$row['file']."'>"; echo "</td>";
		echo "<td>";		echo $row['name'];			echo "</td>";
		echo "<td>";		echo $row['date'];			echo "</td>";
		echo "<td>";		echo $row['quantity'];		echo "</td>";
		echo "<td>";		echo $row['status'];		echo "</td>"; echo "";
		
		echo "</tr>";
	}
		
	
		
	echo "</table>";
		}
	
		
		
		
	?>		
	</div>
	<?php
		
		}else{
		
		?>
		<br><br>
		<div class="back-buttons" style="margin-top: -85px; margin-left: 1100px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backs">BACK</button>
	  				</form>
	  	</div><br>
		
		<?php
		/*-----Else if button is not pressed----*/
		$res=mysqli_query($db,"SELECT * FROM `assets` WHERE quantity !='0' AND department=$_SESSION[department] ORDER BY `assets`.`name` ASC;");
	
	echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "ID"	;			echo "</th>";
	echo "<th>";			echo "IMAGE";			echo "</th>";
	echo "<th>";			echo "NAME"	;			echo "</th>";
	echo "<th>";			echo "DATE"	;			echo "</th>";
	echo "<th>";			echo "QUANTITY"	;		echo "</th>";
	echo "<th>";			echo "STATUS"	;		echo "</th>";
	
	echo "</table>";
		?>
		<div class="scroll">
		<?php
	echo "<table class='table table-bordered table-hover'>";	
		
	while($row=mysqli_fetch_assoc($res)){
		echo "<tr>";
		echo "<td>";		echo $row['bid'];			echo "</td>";
		
		echo "<td><a href='images/".$row['file']."''>View</a>"; echo "<img class='img-circle profile-img' height=70 width=70 src='images/".$row['file']."'>"; echo "</td>";
		echo "<td>";		echo $row['name'];			echo "</td>";
		echo "<td>";		echo $row['date'];			echo "</td>";
		echo "<td>";		echo $row['quantity'];		echo "</td>";
		echo "<td>";		echo $row['status'];		echo "</td>"; echo "";
		
		echo "</tr>";
	}
	echo "</table>";
	}
	
	
?>
	</div>
<!--------------------------------PHP Code to Request asset....................-->
<?php
	if(isset($_POST['request'])){
	
	
	
	if($_SESSION['department']=='1'){
						$section="Not-stated";
					}elseif($_SESSION['department']=='2'){
						$section="ICT";
					}elseif($_SESSION['department']=='3'){
						$section="Corporate Planning";
					}elseif($_SESSION['department']=='4'){
						$section="Corporate Communications";
					}elseif($_SESSION['department']=='5'){
						$section="Human Resource";
					}elseif($_SESSION['department']=='6'){
						$section="Finance";
					}elseif($_SESSION['department']=='7'){
						$section="Procurement";
					}elseif($_SESSION['department']=='8'){
						$section="Air Transport";
					}elseif($_SESSION['department']=='9'){
						$section="Flight Operations";
					}elseif($_SESSION['department']=='10'){
						$section="Licensing and Examinations";
					}elseif($_SESSION['department']=='11'){
						$section="General Directors";
					}elseif($_SESSION['department']=='12'){
						$section="Aviation Security";
					}elseif($_SESSION['department']=='13'){
						$section="Ground Operations";
					}elseif($_SESSION['department']=='14'){
						$section="Airworthiness";
					}elseif($_SESSION['department']=='15'){
						$section="Aeronautical Information Services";
					}
		
		
		
		
		$count=0;
		$sqlcheck="SELECT bid FROM assets INNER JOIN employee ON assets.department=employee.department WHERE bid =$_POST[enterid] AND $_SESSION[department] MATCH $row[department];
		;";		
		
		
		
		
		if(isset($_SESSION['logon'])){
			mysqli_query($db,"INSERT INTO issue_asset Values ('$_SESSION[logon]', '$_POST[enterid]', '', '', '');");
			?>
			<script type="application/javascript">
				window.location="requestasset.php";
			</script>
			<?php
		}else{
			?>
			<script type="application/javascript">
				alert("You need to login first");
			</script>
			<?php
		}
	}
?>



<?php
	if(isset($_POST['requested'])){
		if(isset($_SESSION['logon'])){
			
			?>
			<script type="application/javascript">
				window.location="requestasset.php";
			</script>
			<?php
		}else{
			?>
			<script type="application/javascript">
				alert("You need to login first");
			</script>
			<?php
		}
	}
?>
	
</div>

</div>

</body>

<div style="margin-top: 45px;">
	<?php
	include("footer.php");
?>
</div>
</html>