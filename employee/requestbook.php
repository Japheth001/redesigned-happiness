<?php
include 'navbar.php';
include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Books</title>


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
		width: 1000px;
		height: 400px;
		overflow: auto;
		margin: 0px auto;
	}
	.h:hover{
		background-color: coral;
	}
	
	
</style>
</head>

<body>

<!-----Adding the search option button----------My Side Navigation bar------->

<div id="mySidenav" class="sidenav">



 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
   |<div class="Welcome" style="margin-left: 30px">
   
   
 <?php
	if(isset($_SESSION['logon']))
		$sql3="SELECT pic FROM student WHERE username='$_SESSION[logon]'";
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

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="h" href="dashboard.php"><span class="glyphicon glyphicon-dashboard">DashBoard</span></a>
  <a class="h" href="sprofile.php"><span class="glyphicon glyphicon-picture">My-Profile</span></a>
  <a class="h" href="library_dash.php"><span class="glyphicon glyphicon-book">Library</span></a>
  <a class="h" href="#">Issue Info</a>
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
<div class="scroll"> 
<h3>My Requested Books</h3> 
   
<?php

	if(isset($_SESSION['logon']))
	{
		$q=mysqli_query($db,"SELECT * FROM issue_book where username='$_SESSION[logon]';");
		if(mysqli_num_rows($q)==0){
			
			
			
				echo "Sorry..No pending request found!";
			
		
		}else{
			echo "<table class='table table-bordered table-hover'>";
			echo "<tr style='background-color: yellow'>";
			echo "<th>";	echo "User Name";		echo "</th>";
			echo "<th>";	echo "Book ID";			echo "</th>";
			echo "<th>";	echo "Status";			echo "</th>";
			echo "<th>";	echo "Issue_Date";		echo "</th>";
			echo "<th>";	echo "Return_Date";		echo "</th>";
		
			
			while($row=mysqli_fetch_assoc($q)){
				echo "<tr>";
				echo "<td>";	echo $row['username'];	echo "</td>";
				echo "<td>";	echo $row['bid'];		echo "</td>";
				echo "<td>";	echo $row['approve'];	echo "</td>";
				echo "<td>";	echo $row['issue_date'];	echo "</td>";
				echo "<td>";	echo $row['return_date'];	echo"</td>";
				
				echo "</tr>";
				
			}
			echo "</table>";
		}
	}else{
		

				echo "You need to Login First";
		
	}
		
?>
</div>


</div>
</body>
</html>