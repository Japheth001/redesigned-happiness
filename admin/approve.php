<?php
include 'navbar.php';
include 'connection.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ASSETS</title>


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
		
		width: 1000px;
		height: 400px;
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
	
		margin-left: 450px;
		width: 250px;
		
	}
	.wrapper{
		padding-top: 80px;
		height: 400px;
		width: 500px;
		margin: 0px auto;
		background-color: green;
		
		
	}
	.form-control{
		
		width: 250px;
		background-color: green;
		margin: 0px auto;
		text-align: center;
		align-content: center;
		color: white;
	}
	.btn-default{
		margin-left: 200px;
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
		
	{
		echo "<img class='img-circle profile-img' height=150 width=150 src='images/".$_SESSION['pic']."'>";
		echo "</br></br>";
  
		echo "Welcome" .""." ".$_SESSION['logon'];
		
	}
?>
 </div>

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a class="h" href="addasset.php">Add Book</a>
  <a class="h" href="deleteasset.php">Delete assets</a>
  <a class="h" href="requestasset.php">Book request</a>
  <a class="h" href="#">Issue Info</a>
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
<div class="wrapper">

<h3 style="text-align: center"><b>Approve Request</b></h3><br>
 
 <form method="post" name="form1" action="">
 	<input class="form-control" type="text" name="status" placeholder="Yes or No" required=""><br>
 	<input class="form-control" type="date" name="issue" placeholder="Issue Date yyyy-mm-dd" required=""><br>
 	<input class="form-control" type="date" name="return" placeholder="Return Date yyyy-mm-dd" required=""><br>
 	<button class="btn btn-default" name="submit" type="submit">APPROVE</button>
 </form>
</div>
</div>


<?php
	if(isset($_POST['submit'])){
		
		
		mysqli_query($db,"UPDATE issue_asset SET approve = '$_POST[status]', issue_date = '$_POST[issue]'
		, return_date = '$_POST[return]' WHERE bid= '$_SESSION[bid]' AND username= '$_SESSION[username]';");
		
		
		
		mysqli_query($db,"UPDATE assets SET quantity=quantity-1 WHERE bid='$_SESSION[bid]'");
		
		$res=mysqli_query($db,"SELECT quantity FROM assets WHERE bid='$_SESSION[bid]'");
		
		while($row=mysqli_fetch_assoc($res)){
			if($row['quantity']==0){
				mysqli_query($db,"UPDATE assets SET status='Not-Available;' WHERE bid='$_SESSION[bid]'");
			}
		}
		mysqli_query($db,"UPDATE assets SET status='Issued;' WHERE bid= '$_SESSION[bid]' AND name= '$_SESSION[username]';");
			?>
			<script type="text/javascript">
				alert ("Updated successfully.");
				window.location="requestasset.php";
			
			</script>
			<?php
		
	}
	
?>

</body>
</html>