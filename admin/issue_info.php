<?php
include 'navbar.php';
include 'connection.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assets</title>


<style type="text/css">
	
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
	.scroll{
		background-color: #befdfd;
		color: black;
		
		width: 1150px;
		height: 215px;
		overflow: auto;
		margin: 0px auto;
	}
	.h:hover{
		background-color: coral;
	}
	th,td{
		margin: 0px auto;
		width: 5%;
		padding: 50px;
	}
	.approve{
	
		margin-left: 900px;
		width: 250px;
		
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

<!-----Adding the search option button----------My Side Navigation bar------->

<div class="container">
 
 
 <div class="srchi">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter employee id.." required>
	<button class="btn btn-default" type="submit" name="srch" 
	style="background-color: hotpink" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>
 
 
 
 
 
 

 <?php	
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="assets_adash.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
<?php	
	  			if(isset($_POST['backo'])){
					?>
					<script>
	  				window.location="issue_info.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
<?php	
	  			if(isset($_POST['backoo'])){
					?>
					<script>
	  				window.location="issue_info.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		
  
  
<h3><b>Information On Issued assets</b></h3> 
   
   
   
<?php
	   if(isset($_SESSION['logon'])){
	if(isset($_POST['srch']))
	{
	 $q=mysqli_query($db,"SELECT employee.username, admission, assets.bid,name,approve,issue_asset.issue_date, issue_asset.return_date FROM employee INNER JOIN issue_asset ON employee.username=issue_asset.username INNER JOIN assets ON assets.bid=issue_asset.bid WHERE admission LIKE '%$_POST[enter]%'");
	 
			
		
		
		
		if(mysqli_num_rows($q)==0)
		{
		?>
		<br><br>
		<img src="images/acc7.jpg" style="width: 210px; height: 198px; margin-left: 490px;">
		<br><br>
		
		<div>
		<?php
			echo "Sorry! No Asset found". mysqli_error($db);
			
		?>
		<div class="back-button" style="margin-left: 550px; margin-top: -30px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backo">BACK</button>
	  				</form>
	  			</div>
		<?php
			
			
			
		}else{
			echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: #afff04'>";
			
			echo "<th>";	echo "USERNAME";		echo "</th>";
			echo "<th>";	echo "EMPLOYEE ID";		echo "</th>";
			echo "<th>";	echo "ASSET NAME";		echo "</th>";
			echo "<th>";	echo "ASSET_ID";		echo "</th>";
			
			echo "<th>";	echo "STATUS";			echo "</th>";
			echo "<th>";	echo "ISSUE DATE";		echo "</th>";
			echo "<th>";	echo "RETURN DATE";		echo "</th>";
	
	echo "</table>";
	?>
	<div class="scroll">
	<?php
	echo "<table class='table table-bordered table-hover'>";
	while($row=mysqli_fetch_assoc($q)){
		echo "<tr>";
		
		
				echo "<td>";	echo $row['username'];		echo "</td>";
				echo "<td>";	echo $row['admission'];		echo "</td>";
				echo "<td>";	echo $row['name'];			echo "</td>";
				echo "<td>";	echo $row['bid'];			echo "</td>";
				
				echo "<td>";	echo $row['approve'];		echo"</td>";
				echo "<td>";	echo $row['issue_date'];	echo"</td>";
				echo "<td>";	echo $row['return_date'];	echo"</td>";
				
		
		echo "</tr>";
	}
	echo "</table>";
	
		
		?>
			
		</div>
		<div class="back-buttonww" style="margin-left: 1130px; margin-top: -340px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backoo">BACK</button>
	  				</form>
	  			</div>
	  			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php	
		
			
		}
			
			
		}else{
		
		?>
		<div class="back-button" style="margin-left: 1130px; margin-top: -60px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="back">BACK</button>
	  				</form>
	  			</div><br>
		<?php
		
		$sql=("SELECT employee.username, admission, assets.bid,name,approve,issue_asset.issue_date, issue_asset.return_date FROM employee INNER JOIN issue_asset ON employee.username=issue_asset.username INNER JOIN assets ON assets.bid=issue_asset.bid WHERE issue_asset.approve='yes'");
		
		$res=mysqli_query($db,$sql);
			
			
			echo "<table class='table table-bordered' style='width:100%;'>";
			echo "<tr style='background-color: #afff04'>";
			echo "<th>";	echo "USERNAME";		echo "</th>";
			echo "<th>";	echo "EMPLOYEE ID";			echo "</th>";
			echo "<th>";	echo "ASSET NAME";		echo "</th>";
			echo "<th>";	echo "ASSET_ID";		echo "</th>";
			
			echo "<th>";	echo "STATUS";		echo "</th>";
			echo "<th>";	echo "ISSUE DATE";		echo "</th>";
			echo "<th>";	echo "RETURN DATE";		echo "</th>";
			
			echo "</table>";
		
		
				?>
			<div class="scroll"> 
			<?php
			
			
			echo "<table class='table table-bordered' style='width:100%;' >";
			while($row=mysqli_fetch_assoc($res)){
			$c=0;
			$d=date("Y-m-d");
			
				
				if($d > $row['return_date'] ){
					$c=$c+1;
				$var='<p style="color:yellow; background-color:red">EXPIRED</p>';	
				
				mysqli_query($db,"UPDATE issue_asset SET approve='$var' WHERE return_date= '$row[return_date]' and approve='Yes' limit $c;");
					
				echo "$d";
				}
				
				echo "<tr>";
				echo "<td>";	echo $row['username'];	echo "</td>";
				echo "<td>";	echo $row['admission'];		echo "</td>";
				echo "<td>";	echo $row['name'];	echo "</td>";
				echo "<td>";	echo $row['bid'];	echo "</td>";
				
				echo "<td>";	echo $row['approve'];	echo"</td>";
				echo "<td>";	echo $row['issue_date'];	echo"</td>";
				echo "<td>";	echo $row['return_date'];	echo"</td>";
				
				echo "</tr>";
				
			}
			echo "</table>";	
			
		}
		
			
			
		}else{
			echo("You need to Login first");
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