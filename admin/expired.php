<?php
include 'navbar.php';
include 'connection.php';

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Expired List</title>
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
		background-color: #ddf1dd;
		color: black;
		
		width: 1150px;
		height: 200px;
		overflow: auto;
		margin: 0px auto;
	}
	.h:hover{
		background-color: coral;
	}
	th,td{
		margin: 0px auto;
		width: 8%;
		padding: 50px;
	}
	.approve{
	
		margin-left: 900px;
		width: 250px;
		
	}
	.group_assets{
		margin-top: 10px;
		margin-left: 70px;
	}
	
</style>
</head>


<body>
		


<div class="group_assets">
	<form method="post" name="" action="">
	<button class="btn btn-default" name="returnbtn" style="background-color: green" type="submit">RETURNED</button>&nbsp;&nbsp;&nbsp;
	<button class="btn btn-default" name="expiredbtn" style="background-color: red" type="submit">EXPIRED</button>	
	</form>
</div>
 


 
 <div class="approve" style="margin-left: 1000px; line-height: 5px; margin-top: -30px;">
 <form method="post" name="form1" action="">
 <input class="form-control" type="date" name="date" required="" placeholder="Enter Date For Return Case"><br>
 	<input class="form-control" type="text" name="name" placeholder="Username" required=""><br>
 	<input class="form-control" type="text" name="bid" placeholder="bid" required=""><br>
 	<button style="margin-left: 80px;" class="btn btn-success" name="submit1" type="submit">RETURN</button>
 </form>
</div> 




 
	  		<?php	
	  			if(isset($_POST['backa'])){
					?>
					<script>
	  				window.location="assets_adash.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	  
 
 
 
 


<div class="container">
<h3 style="margin-top: -25px;"><b>Information on Expired Requests</b></h3> 
   
   <?php
		if(isset($_POST['submit1'])){
		
		$var1='<p style="color:pink; background-color:BLUE">RETURNED</p>';
			
		mysqli_query($db,"UPDATE issue_asset SET return_date ='$_POST[date]' WHERE username='$_POST[name]' AND bid='$_POST[bid]'");
		mysqli_query($db,"UPDATE issue_asset SET approve = '$var1' WHERE username='$_POST[name]' AND bid ='$_POST[bid]';");
		mysqli_query($db,"UPDATE assets SET quantity=quantity+1 WHERE bid='$_POST[bid]'");
		}
	
	?>

   
<?php
	$c=0;
	
	if(isset($_SESSION['logon']))
	{
		$var1='<p style="color:pink; background-color:BLUE">RETURNED</p>';
		$var='<p style="color:yellow; background-color:red">EXPIRED</p>';
		
		?>
		
		<?php
		
		$sql=("SELECT employee.username, admission, assets.bid,name,approve,issue_asset.issue_date, issue_asset.return_date FROM employee INNER JOIN issue_asset ON employee.username=issue_asset.username INNER JOIN assets ON assets.bid=issue_asset.bid WHERE issue_asset.approve !='' AND issue_asset.approve !='Yes' ORDER BY `issue_asset`.`approve` ASC ");
		
		$res=mysqli_query($db,$sql);
		
		if(isset($_POST['returnbtn'])){
		$sql=("SELECT employee.username, admission, assets.bid,name,approve,issue_asset.issue_date, issue_asset.return_date FROM employee INNER JOIN issue_asset ON employee.username=issue_asset.username INNER JOIN assets ON assets.bid=issue_asset.bid WHERE issue_asset.approve !='' AND issue_asset.approve ='$var1' ORDER BY `issue_asset`.`approve` ASC ");
			
		$res=mysqli_query($db,$sql);
		}
		else{
			if(isset($_POST['expiredbtn'])){
				$sql=("SELECT employee.username, admission, assets.bid,name,approve,issue_asset.issue_date, issue_asset.return_date FROM employee INNER JOIN issue_asset ON employee.username=issue_asset.username INNER JOIN assets ON assets.bid=issue_asset.bid WHERE issue_asset.approve !='' AND issue_asset.approve ='$var' ORDER BY `issue_asset`.`approve` ASC ");
				
				$res=mysqli_query($db,$sql);
			}
		}
		
		$res=mysqli_query($db,$sql);
			
			
			echo "<table class='table table-bordered' style='width:100%;'>";
			echo "<tr style='background-color: orange'>";
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
		}else{
	
		echo "You need to Login First";
		
	}
	
?>

<?php
				
?>

</div>


</div>




		<div class="back-button" style="margin-left: 600px; margin-top: 15px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backa">BACK</button>
	  				</form>
	  			</div>
			
</body>
</html>