<?php
 include 'navbar.php';
 include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" >
<meta content="width=device-width, device-scale=1"
<title></title>
</head>

<style type="text/css">
	
	.wrapper {
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    transition: background-color .5s;
	background-color: lawngreen;
		
	
		height: 550px;
		
		margin: 0px auto;
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
	

</style>
<body >
	<div class="wrapper">
		<div style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'" id="mySidenav" class="sidenav">
 
 
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
   |<div class="Welcome" style="margin-left: 30px">
   
 <?php
	if(isset($_SESSION['logon']))
		$sql3="SELECT pic FROM admin WHERE username='$_SESSION[logon]'";
		$result=mysqli_query($db,$sql3);
	
	while($row=mysqli_fetch_assoc($result)){
		echo("<table>");
		echo("<tr>");
		echo "<img class='img-circle profile-img' height=150 width=150 src='images/".$row['pic']."'>";
		
		echo "</br></br>";
  
		echo "Welcome" .""." ".$_SESSION['logon'];
		
		echo("</table>");
		echo("</tr>");
	}
		
	
	?>
 </div>
 
  
   <a class="h" href="dashboard.php"><span class="glyphicon glyphicon-dashboard">DashBoard</span></a>
  <a class="h" href="addasset.php">Add asset</a>
  <a class="h" href="deleteasset.php">Delete assets</a>
  <a class="h" href="requestasset.php">asset requested</a>
  <a class="h" href="#">Issue Information</a>
</div>




<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  <div class="container">
  
<h2><b><span>Add New assets</span></b></h2>

<form name="" action="" method="post">
		<input class="form-control" type="text" name="bid" placeholder="asset ID" required=""><br>
		<input class="form-control" type="text" name="name" placeholder="asset Name" required=""><br>
		<input class="form-control" type="text" name="author" placeholder="Author Name" required=""><br>
		<input class="form-control" type="text" name="edition" placeholder="asset Edition" required=""><br>
		<input class="form-control" type="text" name="status" placeholder="asset Status" required=""><br>
		<input class="form-control" type="text" name="quantity" placeholder="Quantity" required=""><br>
		<input class="form-control" type="text" name="department" placeholder="Department" required=""><br>
		
		<button class="btn btn-default" style="background-color: pink" name="submit" value="submit" type="submit">ADD asset</button>
	
	
</form>
	
</div>


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
     

</div>
		
		<?php
		if(isset($_POST['submit']))
		{
			if(isset($_SESSION['logon']) ){
				mysqli_query($db,"INSERT INTO assets VALUES ('$_POST[bid]','$_POST[name]','$_POST[author]','$_POST[edition]',
				'$_POST[status]','$_POST[quantity]','$_POST[department]');");
				
			?>
				<script type="application/javascript">
			alert ("Record Added Successfully");
				</script>
				<?php
			}else{
				
				?>
				<script type="application/javascript">
			alert ("You need to login first..");
				</script>
				<?php
			}
			
		}
		?>


</body>
<br>
</html>