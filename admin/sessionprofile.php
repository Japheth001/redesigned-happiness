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
		background-color: darkgreen;
		color: white;
		
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
		width: 5%;
		padding: 50px;
	}
	.approve{
	
		margin-left: 900px;
		width: 250px;
		
	}
	
</style>
</head>


<body>
		<div id="mySidenav" class="sidenav">



 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
   |<div class="Welcome" style="margin-left: 30px">
 <?php
	if(isset($_SESSION['logon']))
		
	{
		echo "<img class='img-circle profile-img' height=150 width=150 src='images/".$_SESSION['pic']."'>";
		echo "</br></br>";
  
		echo "Welcome" .""." ".$_SESSION['logon'];
		
	}
?>
 </div>

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="h" href="addbook.php">Add Book</a>
  <a class="h" href="deletebook.php">Delete Books</a>
  <a class="h" href="requestbook.php">Book request</a>
  <a class="h" href="issue_info.php">Issued Info</a>
  <a class="h" href="expired.php">Expired List</a>
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
 


<div class="container">
<h3><b>Test Profile</b></h3> 
   
   
   
<?php
	
	if(isset($_SESSION['logon']))
	{
			
		
		
		$sql=mysqli_query($db,"SELECT * FROM admin");
		
		$res=mysqli_query($db,$sql);
			
			
			echo "<table class='table table-bordered' style='width:100%;'>";
			echo "<tr style='background-color: orange'>";
			echo "<th>";	echo "FIRST";		echo "</th>";
			echo "<th>";	echo "LAST";			echo "</th>";
			echo "<th>";	echo "USERNAME";		echo "</th>";
			echo "<th>";	echo "PASSWORD";		echo "</th>";
			echo "<th>";	echo "EMAIL";		echo "</th>";
			echo "<th>";	echo "CONTACT";		echo "</th>";
			echo "<th>";	echo "PIC";		echo "</th>";
			
			
			echo "</table>";
			
			?>
			<div class="scroll"> 
			<?php
			
			
			echo "<table class='table table-bordered' style='width:100%;' >";
			while($row=mysqli_fetch_assoc($res)){
			
			
				
				echo "<tr>";
				echo "<td>";	echo $row['first'];	echo "</td>";
				echo "<td>";	echo $row['last'];		echo "</td>";
				echo "<td>";	echo $row['username'];	echo "</td>";
				echo "<td>";	echo $row['password'];	echo "</td>";
				echo "<td>";	echo $row['email'];	echo"</td>";
				echo "<td>";	echo $row['contact'];	echo"</td>";
				echo "<td>";	echo $row['pic'];	echo"</td>";
				
				
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


</body>
</html>