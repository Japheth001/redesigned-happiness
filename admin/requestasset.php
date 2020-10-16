<?php
include 'navbar.php';
include 'connection.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>assets</title>


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
		background-color: #f3d4aff2;
		color: black;
		
		width: 1150px;
		height: 230px;
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
	
	
		body {font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";}

/* The Modal (background) */
.modal {
	margin: 0 auto;
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
	.form-control{
		width: 250px;
		margin: 0 auto;
		height: 30px;
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

<!-----Adding the search option button----------My Side Navigation bar------->



<div class="approve">
 <form method="post" name="form1" action="">
 	<input class="form-control" type="text" name="name" placeholder="Username" required=""><br>
 	<input class="form-control" type="text" name="bid" placeholder="bid" required=""><br>
 	
 	<div >
 		<button id="approvestage" class="btn btn-success" name="submit1" type="submit" >SUBMIT</button>
 	</div>
 	
 </form>
</div> 
  
 <div class="container">
 	<div class="srchi" style="margin-top: -80px;">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter employee id.." required>
	<button class="btn btn-default" type="submit" name="srch" 
	style="background-color: hotpink" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>
 </div>
  


  <?php	
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="assets_adash.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		
	  	<?php	
	  			if(isset($_POST['backb'])){
					?>
					<script>
	  				window.location="requestasset.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	  			
	  		
	  		
	  		
	  		
	  		
	
	  		<?php	
	  			if(isset($_POST['backc'])){
					?>
					<script>
	  				window.location="requestasset.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	  		
  
  
  
  <!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
<p>Welcome Admin</p>
</div>
	
	<div class="modal-body">
	
	
		
	<h3 style="text-align: center"><b>Approve Request</b></h3><br>
 
 <form method="post" name="form1" action="">
 	<input class="form-control" type="text" name="status" placeholder="Yes or No" required=""><br>
 	<label style="margin-left: 70px; color: crimson">Issue Date</label>
 	<input class="form-control" type="date" name="issue" placeholder="Issue Date yyyy-mm-dd" required=""><br>
 	<label style="margin-left: 70px; color: crimson">Return Date</label>
 	<input class="form-control" type="date" name="return" placeholder="Return Date yyyy-mm-dd" required=""><br><br>
 	
 	
 		<button style="margin-left: 270px;" class="btn btn-info" name="submit" type="submit">APPROVE</button>
 
 	
 </form>
		
	
	</div>
	
	
	
	<div class="modal-footer">
		<h5>@Admin</h5>
	</div>
</div>
	
</div>

  
  
  

  
	<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		//Get the button that opens the modal
		var btn=document.getElementById("approvestageq");
		//Get the span element that closes the modal
		var span=document.getElementsByClassName("close")[0];
		
		
		//Open the button once clicked
		btn.onclick=function(){
			modal.style.display="block"
		}
		//When the user clicks on the span to close the button
		span.onclick=function(){
			modal.style.display="none";
		}
		
		//When the user click outside the modal box this is what happens
		window.onclick=function(event){
			if(event.target==modal){
				modal.style.display="none";
			}
		}
		
		
		
		
		
	
	</script>
	
	
	


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

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   
<div class="container">
<h3 style="margin-top: 10px;"><b>Requested assets by employees</b></h3> 
<br>
   
<?php
	$c=0;
	if(isset($_SESSION['logon'])){
		if(isset($_POST['srch'])){
			
		 $q=mysqli_query($db,"SELECT employee.username, admission, assets.bid,name,approve,issue_asset.issue_date, issue_asset.return_date FROM employee INNER JOIN issue_asset ON employee.username=issue_asset.username INNER JOIN assets ON assets.bid=issue_asset.bid WHERE issue_asset.approve='' AND admission LIKE '%$_POST[enter]%'");
	 
	
		
		if(mysqli_num_rows($q)==0)
		{
		?>
		
		<img src="images/acc7.jpg" style="width: 210px; height: 137px; margin-left: 460px;">
		
		
		<div>
			<br><br><br><br>
			
  
			
		
		<?php
			
			echo "Sorry! No Asset found". mysqli_error($db);
		?>
		<div class="back-button" style="margin-left: 520px; margin-top: -30px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backc">BACK</button>
	  				</form>
	  			</div>
		<?php	
			
		}else{
			echo "<table class='table table-bordered table-hover' style='width:100%;'>";
	echo "<tr style='background-color: pink'>";
			
			echo "<th>";	echo "USERNAME";			echo "</th>";
			echo "<th>";	echo "ASSET NAME";			echo "</th>";
			echo "<th>";	echo "ASSET_ID";			echo "</th>";
			echo "<th>";	echo "STATUS";				echo "</th>";
			echo "<th>";	echo "ISSUE DATE";			echo "</th>";
			echo "<th>";	echo "RETURN DATE";			echo "</th>";
			
	
	echo "</tr>";		
	echo "</table>";
	?>
			<div class="scroll"> 
	<?php
			
			
	echo "<table class='table table-bordered' style='width:100%;' >";		
			
	while($row=mysqli_fetch_assoc($q)){
		echo "<table class='table table-bordered' style='width:100%;' >";	
		echo "<tr>";
		
		
				echo "<td>";	echo $row['username'];		echo "</td>";
				
				echo "<td>";	echo $row['name'];			echo "</td>";
				echo "<td>";	echo $row['bid'];			echo "</td>";	
				echo "<td>";	echo $row['approve'];		echo"</td>";
				echo "<td>";	echo $row['issue_date'];	echo"</td>";
				echo "<td>";	echo $row['return_date'];	echo"</td>";
				
		
		echo "</tr>";
	}
	
	echo "</table>";
	
	?>
	</div>	
	
	<div class="back-button" style="margin-left: 1120px; margin-top: -250px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backb">BACK</button>
	  				</form>
	  			</div><br>
		<br><br><br><br><br><br><br>
	<?php
		}
		}else{
		?>
			<div class="back-button" style="margin-left: 1120px; margin-top: -89px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="back">BACK</button>
	  				</form>
	  			</div>
  		<br>
			<?php
			
		$var='<p style="color:yellow; background-color:red">EXPIRED</p>';	
		$var1='<p style="color:pink; background-color:BLUE">RETURNED</p>';
			
		$sql=("SELECT employee.username, admission, assets.bid,name,approve,issue_asset.issue_date, issue_asset.return_date FROM employee INNER JOIN issue_asset ON employee.username=issue_asset.username INNER JOIN assets ON assets.bid=issue_asset.bid WHERE issue_asset.approve=''" );
		
		$res=mysqli_query($db,$sql);
			
			
			
			
			echo "<table class='table table-bordered' style='width:100%;'>";
			echo "<tr style='background-color: pink'>";
			
			echo "<th>";	echo "USERNAME";				echo "</th>";
			echo "<th>";	echo "ASSET NAME";				echo "</th>";
			echo "<th>";	echo "ASSET_ID";				echo "</th>";
			echo "<th>";	echo "STATUS";					echo "</th>";
			echo "<th>";	echo "ISSUE DATE";				echo "</th>";
			echo "<th>";	echo "RETURN DATE";				echo "</th>";
			
		
			echo "</tr>";
			echo "</table>";
			?>
			<div class="scroll"> 
			<?php
			
			
			echo "<table class='table table-bordered' style='width:100%;' >";
			while($row=mysqli_fetch_assoc($res)){
			
			
				
				echo "<tr style='background-color: #befdfd'>";
				
				echo "<td>";	echo $row['username'];			echo "</td>";
				echo "<td>";	echo $row['name'];				echo "</td>";
				echo "<td>";	echo $row['bid'];				echo "</td>";	
				echo "<td>";	echo $row['approve'];			echo"</td>";
				echo "<td>";	echo $row['issue_date'];		echo"</td>";
				echo "<td>";	echo $row['return_date'];		echo"</td>";
				
				
				echo "</tr>";
				
			}
			echo "</table>";	
			
		}
		
			
		}else{
		echo("You need to login first");
	}
	
	
		
	
	
?>





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


	<br><br>
	</div>
</body>

<div style="margin-top: -79px;">
		<?php
			include("footer.php");
		?>
</div>

</html>