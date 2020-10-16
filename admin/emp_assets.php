<?php
include 'navbar.php';
include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width ,initial-scale=1">
<title>assets</title>


<style type="text/css">
	
	.srchi{
	padding-left: 500px;
	
	}
	body {
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    transition: background-color .5s;
	
	
	
}
	.wrapper{
		background-color: #f3ecf2;
		width: 1200px;
		height: 350px;
		margin:  0px auto;
		margin-top: 50px;
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
	.scroll{
		width: 100%;
		height: 200px;
		overflow: auto;
	}
	th,td{
		padding: 25%;
		width: 15%;
		margin: 0 auto;
	}
	tr{
		width: 15px;
	}
	.back-button{
		margin-left: 1130px;
		margin-top: 10px;
	}
	.back-buttons{
		margin-left: 1100px;
		margin-top: -25px;
	}
	.back-buttons{
		margin-left: 570px;
		margin-top: 10px;
	}
	.footer{
		height: 50px;
		background-color: green;
		margin-top: 0px; 
		padding-top: 8px;
		 margin-left: -70px;
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

<!-----Adding the search option button----------------->

<div class="wrapper">
	<div class="srchi">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter asset name.." required>
	<button class="btn btn-default" type="submit" name="srch" 
	style="background-color: hotpink" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>



<div class="container">

	<h3 style="margin-top: -30px;">List of Assets Available</h3>

	


<?php
	if(isset($_POST['srch']))
	{
	 $q=mysqli_query($db,"SELECT * FROM assets
WHERE name LIKE '%$_POST[enter]%'");
	 
		
		if(mysqli_num_rows($q)==0)
		{
		?>
		<br><br>
		<img src="images/acc7.jpg" style="width: 210px; height: 200px; margin-left: 490px;">
		<br>
		
		<div>
		<?php
			echo "Sorry! No asset found". mysqli_error($db);
		?>
		</div>
		
			
		<?php
			
		}else{
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
	
		}
	
		
		
		?>
		</div>
		<?php	
	  			if(isset($_POST['backs'])){
					?>
					<script>
	  				window.location="assets.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		<div class="back-buttons" style="margin-top: 55px; margin-left: 580px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backs">BACKn</button>
	  				</form>
	  			</div>
		<br>
		<?php
		
		
		
			
		}else{
		
		
		
		?>
		
		<?php	
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="assets_adash.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		<div class="back-button" style="margin-left: 1050px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="back">BACK</button>
	  				</form>
	  			</div>
		
		<?php
		?>
		
		<?php
		
		?>
		<br>
		<?php
	
		/*-----Else if button is not pressed----*/
		$res=mysqli_query($db,"SELECT * FROM `assets`  ORDER BY `assets`.`id` DESC;");
	
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
		
		
		echo "<td><a href='images/".$row['file']."'' >View full_image</a>"; echo "<img class='img-circle profile-img' height=70 width=70 src='images/".$row['file']."'>"; echo "</td>";
		
		
		echo "<td>";		echo $row['name'];			echo "</td>";
		echo "<td>";		echo $row['date'];			echo "</td>";
		echo "<td>";		echo $row['quantity'];		echo "</td>";
		echo "<td>";		echo $row['status'];		echo "</td>"; 	
		
		
		
		echo "</tr>";
		
	}
	echo "</table>";
	
	}
	
	
?>


</div>

</div>




	
</div>



     


	
</body>
<footer style="height: 50px; background-color: green;">
				<p style="text-align: center; font-size:12px; color: white; margin-top: 60px; padding-top: 10px; margin-left: -60px;">
					&nbsp; @Kenya Civil Aviation Authority<br>
					Phone: &nbsp; +254714020558
				</p>
	
	</footer>
</html>