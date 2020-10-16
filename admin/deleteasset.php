<?php
	include 'navbar.php';
	include 'connection.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, device-scale=1">
<title></title>
</head>


<style type="text/css">
	
	.back-buttons{
		margin-left: 1000px;
		margin-top: 0px;
	}
	.scroll{
		width: 100%;
		height: 200px;
		overflow: auto;
	}
	.wrapper{
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    	transition: background-color .5s;
		background-color: #b5f392;
		
		
		width: 1200px;
		height: 450px;
		margin:  0px auto;
		background-color: #befdfd;
		
	}
	th,td{
		width: 8%;
		padding: 50px;
		margin: 0px auto;
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
	.container{
		text-align: center;
		margin: 0px auto;
	}
	.form-control{
		width: 300px;
		height: 30px;
		
		margin: 0px auto;
		align-content: center
	}
	
	.deleteasset{
		padding-left: 200px;
		margin-top: 10px;
		margin-left: 50px;
		
		
	}
	
		
		
		
	
</style>

<body>

<div class="wrapper">
		
  <div class="container">
  
<h2><b><span>Delete assets</span></b></h2>




	  		
	  		
		

<div class="deleteasset" style="margin-left: -150px;">
	
	<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="assetid" placeholder="Enter Asset ID to delete.." required>
	<button class="btn btn-default" type="submit" name="delete" 
	style="background-color: hotpink; border: none" >
		<span style="height: 15px">DELETE</span>
	</button>
</form>
</div>
	
	
		
<div class="srchi" style="margin-left: -900px; margin-top:-50px; " >
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter Asset Name to search.." required>
	<button class="btn btn-default" type="submit" name="srch" 
	style="background-color: hotpink" >
		<span style="height: 20px" class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>




<h3>List of assets</h3>




<?php
	if(isset($_POST['srch']))
	{
	 $q=mysqli_query($db,"SELECT * FROM assets
WHERE name LIKE '%$_POST[enter]%'");
	 
		
		if(mysqli_num_rows($q)==0)
		{
			
			?>
		<img src="images/acc7.jpg" style="width: 210px; height: 180px; margin-left: 15px;">
		<br>
		<?php
			echo "Sorry! No asset found". mysqli_error($db);
		?>
			<div class="back-button">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backss">BACK</button>
	  				</form>
	  
	  			</div>
	
		</div>	
		<?php
		}else{
			echo "<table class='table table-bordered table-hover' style='width:99%;'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "ID"	;			echo "</th>";
	echo "<th>";			echo "IMAGE";			echo "</th>";
	echo "<th>";			echo "NAME"	;			echo "</th>";
	echo "<th>";			echo "DATE"	;			echo "</th>";
	echo "<th>";			echo "QUANTITY"	;		echo "</th>";
	echo "<th>";			echo "STATUS"	;		echo "</th>";
	
	echo "</table>";
	echo "<table class='table table-bordered' style='width:99%;' >";		
	while($row=mysqli_fetch_assoc($q)){
		echo "<tr>";
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
	
	?>
	
	<?php		
	?>	
	  		
	  		<div class="back-button">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="back">BACK</button>
	  				</form>
	  
	  			</div>
	
		</div>	
		<?php
			
		
	
		}
		
		
			
		}else{
		
	
	
		
		/*-----Else if button is not pressed----*/
			
	?>
	<div class="back-buttons" style="margin-top: -20px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-success glyphicon glyphicon-backward" name="backs">BACK</button>
	  				</form>
	  			</div>
		<br>
	<?php		

		$res=mysqli_query($db,"SELECT * FROM `assets` ORDER BY `assets`.`id` DESC;");
	
	
		
		
	echo "<table class='table table-bordered table-hover' style='width:99%;'>";
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
	echo "<table class='table table-bordered table-hover' style='width:99%;'>";
		
	while($row=mysqli_fetch_assoc($res)){
		echo "<tr>";
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
	
	
		
	  			if(isset($_POST['backs'])){
					?>
					<script>
	  				window.location="assets_adash.php";
	  				</script>
					<?php
				}	
	  			
	  		
	
?>

</div>

<?php
	if(isset($_POST['delete']))
	{
		if(isset($_SESSION['logon'])){
			mysqli_query($db,"DELETE FROM assetS WHERE bid = ('$_POST[assetid]');");
			?>
			
			<script type="application/javascript">
				alert("Record Deleted Successfully");
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
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="deleteasset.php";
	  				</script>
					<?php
				}	
	  			
?>
	  		
	  		
<?php	
	  			if(isset($_POST['backss'])){
					?>
					<script>
	  				window.location="deleteasset.php";
	  				</script>
					<?php
				}	
	  			
	  		?>






	
</div>
</body>
<div style="margin-top: -27px;margin-left: -55px;">
	<?php
		include "footer.php";
	?>
</div>
</html>