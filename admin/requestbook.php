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

<!-----Adding the search option button----------My Side Navigation bar------->

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
		echo "<img class='img-circle profile-img' height=150 width=150 src='images/".$row['pic']."'>";
		
		echo "</br></br>";
  
		echo "Welcome" .""." ".$_SESSION['logon'];
		
		echo("</table>");
		echo("</tr>");
	}
		
	
	?>
 </div>

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="h" href="addbook.php">Add Book</a>
  <a class="h" href="deletebook.php">Delete Books</a>
  <a class="h" href="requestbook.php">Book request</a>
  <a class="h" href="issue_info.php">Issued Books</a>
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
  

<div class="approve">
 <form method="post" name="form1" action="">
 	<input class="form-control" type="text" name="name" placeholder="Username" required=""><br>
 	<input class="form-control" type="text" name="bid" placeholder="bid" required=""><br>
 	<button class="btn btn-default" name="submit1" type="submit">SUBMIT</button>
 </form>
</div> 


   
<div class="container">
<h3><b>Requested Books by Students</b></h3> 

   
<?php
	
	if(isset($_SESSION['logon']))
	{
		$sql=mysqli_query($db,"SELECT student.username, admission, books.bid,name,authors,edition, status FROM student INNER JOIN issue_book ON student.username=issue_book.username INNER JOIN books ON books.bid=issue_book.bid WHERE issue_book.approve=''");
		
		if(mysqli_num_rows($sql)==0){
			
			
				echo "Sorry..No pending request found!";
			
		
		}else{
			
			echo "<table class='table table-bordered' style='width:100%;'>";
			echo "<tr style='background-color: orange'>";
			echo "<th>";	echo "User Name";		echo "</th>";
			echo "<th>";	echo "ROLL";			echo "</th>";
			echo "<th>";	echo "BOOK NAME";		echo "</th>";
			echo "<th>";	echo "BOOK_ID";		echo "</th>";
			echo "<th>";	echo "AUTHOR";		echo "</th>";
			echo "<th>";	echo "EDITION";		echo "</th>";
			echo "<th>";	echo "STATUS";		echo "</th>";
			
			echo "</table>";
			
			?>
			<div class="scroll"> 
			<?php
			
			
			echo "<table class='table table-bordered' style='width:100%;' >";
			while($row=mysqli_fetch_assoc($sql)){
			
			
				
				echo "<tr>";
				echo "<td>";	echo $row['username'];	echo "</td>";
				echo "<td>";	echo $row['admission'];		echo "</td>";
				echo "<td>";	echo $row['name'];	echo "</td>";
				echo "<td>";	echo $row['bid'];	echo "</td>";
				echo "<td>";	echo $row['authors'];	echo"</td>";
				echo "<td>";	echo $row['edition'];	echo"</td>";
				echo "<td>";	echo $row['status'];	echo"</td>";
				
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

	<?php
	  if(isset($_POST['submit1'])){
		  
		  $_SESSION['username']=$_POST['name'];
		  $_SESSION['bid']=$_POST['bid'];
		  
		  ?>
		  	<script type="text/javascript">
				window.location="approve.php";
			</script>
		  <?php
	  }
	
?>



</body>
</html>