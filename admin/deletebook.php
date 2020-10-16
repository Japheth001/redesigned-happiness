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
	
	.scroll{
		width: 100%;
		height: 200px;
		overflow: auto;
	}
	.wrapper{
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    	transition: background-color .5s;
		background-color: lawngreen;
		
		
		width: 1200px;
		height: 500px;
		margin:  0px auto;
		background-color: greenyellow;
	
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
		
	
	.deletebook{
		padding-left: 300px;
		margin-top: 0px;
		
	}
	
		
	
</style>

<body>
<div class="wrapper">
<div class="wrapper">
		<div style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'" id="mySidenav" class="sidenav">
 
 
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
   <div class="Welcome" style="margin-left: 30px">
   
   
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
  <a class="h" href="addbook.php">Add Book</a>
  <a class="h" href="deletebook.php">Delete Books</a>
  <a class="h" href="requestbook.php">Book request</a>
  <a class="h" href="issue_info.php">Issue Information</a>
  <a class="h" href="expired.php">Expired List</a>
</div>




<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  <div class="container">
  
<h2><b><span>Delete Books</span></b></h2>
</div>

<div class="deletebook">
	
	<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="bookid" placeholder="Enter book ID to delete.." required>
	<button class="btn btn-default" type="submit" name="delete" 
	style="background-color: hotpink" >
		<span style="height: 30px">DELETE</span>
	</button>
</form>
</div>
	
	
		
<div class="srchi">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter book name to search.." required>
	<button class="btn btn-default" type="submit" name="srch" 
	style="background-color: hotpink" >
		<span style="height: 20px" class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>




<h3>List of Books</h3>

<div class="scroll">
<?php
	if(isset($_POST['srch']))
	{
	 $q=mysqli_query($db,"SELECT * FROM books
WHERE name LIKE '%$_POST[enter]%'");
	 
		
		if(mysqli_num_rows($q)==0)
		{
			echo "Sorry! No book found". mysqli_error($db);
		}else{
			echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "ID"	;			echo "</th>";
	echo "<th>";			echo "NAME"	;			echo "</th>";
	echo "<th>";			echo "AUTHORS"	;		echo "</th>";
	echo "<th>";			echo "EDITION"	;		echo "</th>";
	echo "<th>";			echo "STATUS"	;		echo "</th>";
	echo "<th>";			echo "QUANTITY"	;		echo "</th>";
	echo "<th>";			echo "DEPARTMENT";		echo "</th>";
	
	while($row=mysqli_fetch_assoc($q)){
		echo "<tr>";
		echo "<td>";		echo $row['bid'];			echo "</td>";
		echo "<td>";		echo $row['name'];			echo "</td>";
		echo "<td>";		echo $row['authors'];		echo "</td>";
		echo "<td>";		echo $row['edition'];		echo "</td>";
		echo "<td>";		echo $row['status'];		echo "</td>";
		echo "<td>";		echo $row['quantity'];		echo "</td>";
		echo "<td>";		echo $row['department'];	echo "</td>";
		
		echo "</tr>";
	}
	echo "</table>";
		}
		
			
		}else{
		
		
		/*-----Else if button is not pressed----*/
		$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");
	
	echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "ID"	;			echo "</th>";
	echo "<th>";			echo "NAME"	;			echo "</th>";
	echo "<th>";			echo "AUTHORS"	;		echo "</th>";
	echo "<th>";			echo "EDITION"	;		echo "</th>";
	echo "<th>";			echo "STATUS"	;		echo "</th>";
	echo "<th>";			echo "QUANTITY"	;		echo "</th>";
	echo "<th>";			echo "DEPARTMENT";		echo "</th>";
	
	while($row=mysqli_fetch_assoc($res)){
		echo "<tr>";
		echo "<td>";		echo $row['bid'];			echo "</td>";
		echo "<td>";		echo $row['name'];			echo "</td>";
		echo "<td>";		echo $row['authors'];		echo "</td>";
		echo "<td>";		echo $row['edition'];		echo "</td>";
		echo "<td>";		echo $row['status'];		echo "</td>";
		echo "<td>";		echo $row['quantity'];		echo "</td>";
		echo "<td>";		echo $row['department'];	echo "</td>";
		
		echo "</tr>";
	}
	echo "</table>";
	}
	
	
?>
</div>
</div>

<?php
	if(isset($_POST['delete']))
	{
		if(isset($_SESSION['logon'])){
			mysqli_query($db,"DELETE FROM BOOKS WHERE bid = ('$_POST[bookid]');");
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
</body>
</html>