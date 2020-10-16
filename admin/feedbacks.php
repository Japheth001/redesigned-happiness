<?php
include 'navbar.php';
include 'connection.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, device-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
<link href="../css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script src="../js/bootstrap-3.3.7.js"></script>
<!--
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="bootstrap/js/bootstrap.min.js"></script>


-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">








<title>Feedback</title>
</head>

<body>
<style type="text/css">
			.wrapper{
				margin-top: -200px;
				height: 700px;
				width: 550px;
				background-color: black;
				opacity: .8;
				margin: 20px auto;
				padding: 10px auto;
				
			}
			.form-control{
				height: 50px;
				width: 500px;
				margin: 20px auto;
			}
			.btn-default{
				margin: 10px auto;
				width: 90px;
				background-color: pink;
			}
			.scroll{
				width: 100%;
				height: 350px;
				overflow: auto;
			}
			
		</style>
		
	<div class="wrapper">
		<form style="" action="" method="post">
		<br>
		<input class="form-control" type="text" name="comment" placeholder="Please enter some thing here..."/>
		
		&nbsp; 	&nbsp;	&nbsp;
		
		<input class="btn btn-default" type="submit" name="submit" value="Comment"/>
		&nbsp;&nbsp;
		<input class="btn btn-info" type="button" name="view" value="Click To View Comments"/>	
		</form>
	
		
	
	
	<div class="scroll">
	
		<?php
			if(isset($_POST['submit'])){
				$sql="INSERT INTO `comments`(`comment`) VALUES ('$_POST[comment]');";
				if(mysqli_query($db,$sql)){
					
					
					$sql2="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
			$res=mysqli_query($db,$sql2);
			
			while($row=mysqli_fetch_assoc($res)){
				echo "<table class='table table-bordered table-hover>";
				echo "<tr>";
												
				echo "<td>";		echo $row['comment'];		echo "</td>";
				
				echo "</tr>";
				echo "</table>";
			}
					
				}
			}
				
			?>
	
	
	
	
	
	
	</div>
	
	</div>
	
</body>

</html>