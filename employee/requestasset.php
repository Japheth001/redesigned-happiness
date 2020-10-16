<?php
include 'navbar.php';
include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>asset</title>


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
		width: 1150px;
		height: 200px;
		overflow: auto;
		margin: 0px auto;
		overflow: auto;
		margin: 0px auto;
		
	}
	th,td{
		margin: 0px auto;
		width: 7.5%;
		padding: 30px;
	}
	.h:hover{
		background-color: coral;
	}
	.back-button{
		margin-left: 1070px;
	}
	
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


	
	/*New Style for Modal*/
	
	body {font-family: Arial, Helvetica, sans-serif;}

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
    background-color: #10e64e;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 1px 8px;
    background-color: #10e64e;
    color: white;
}
	.form-control{
		width: 250px;
		margin: 0 auto;
		height: 28px;
	}	
	
	button{
		border: none;
	}
	
</style>
</head>

<body>


<div class="prints" style="margin-left: 1150px; margin-top: -50px;">
	<form name="" action="" method="post" >
	<a href="printcertification.php">
	<img src="images/print4.jpg" style="margin-top: 25px; width: 90px; height: 90px;">
	</a>
	</form>
</div>  
  
 
<div class="back-button">
	  <form name="" action="" method="post">
	  		<button class="btn btn-warning glyphicon glyphicon-backward" name="back" style="border: none;">BACK</button>
	  </form>
</div>
  
  
   <?php	
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="assets_dash.php";
	  				</script>
					<?php
				}	
	  			
	 ?>	 

   

   
<div class="container">
 
<h3>My Requested Assets</h3> 
   
<?php

	if(isset($_SESSION['logon']))
	{
		$q=mysqli_query($db,"SELECT issue_asset.username,issue_asset.bid,issue_asset.approve,
		issue_asset.issue_date,issue_asset.return_date FROM issue_asset where username='$_SESSION[logon]';");
		if(mysqli_num_rows($q)==0){
			
			?>
		<br><br>
		<img src="images/acc7.jpg" style="width: 210px; height: 200px; margin-left: 440px;">
		<br>
		
		<div>
		<?php
			
				echo "Sorry..No pending request found!";
			
		
		}else{
			echo "<table class='table table-bordered table-hover' style='width:99%;'>";
			echo "<tr style='background-color: yellow'>";
			
			echo "<th>";	echo "User Name";		echo "</th>";
			echo "<th>";	echo "asset ID";		echo "</th>";
			
			echo "<th>";	echo "Status";			echo "</th>";
			echo "<th>";	echo "Issue_Date";		echo "</th>";
			echo "<th>";	echo "Return_Date";		echo "</th>";
			echo "</tr>";
			
			
	echo "</table>";
	?>
		<div class="scroll"> 
	<?php
			
			
	echo "<table class='table table-bordered' style='width:98%;' >";	
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
			?></div><?php
			
		}
	}else{
		

				echo "You need to Login First";
		
	}
		
?>
</div>
</div>








<div class="prints" style="margin-left: 635px; margin-top: -10px;" id="deleteoption">
	<a href="#">
	<img src="images/delete4.jpg" style="margin-top: 10px; width: 40px; height: 40px;">
	</a>
</div> 




<!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
	<p>Welcome Employee</p>
</div>
	
	<div class="modal-body">
	
	
	<form method="post" action="" name="" >	
	<h3 style="text-align: center; font-size: 20px; color: red; font-size: 30px;"><b><span class="glyphicon glyphicon-car"><caption>Delete_Request</caption></span></b></h3>
	
	<img src="images/dispose2.jpg" style="margin-top: -5px; height: 60px; width: 90px; ;">
		
		<div style="margin-left: 150px;">
			<input style="margin-left: 60px; width: 200px;" class="form-control" type="text" name="productid" placeholder="Product ID" required="">
			<br>				
						
			<br>
			<button class="btn btn-danger" type="submit" name="deletebtn" style="width: 100px; height: 30px; margin-left: 110px; margin-top: 10px;" >DELETE</button>			
			<br><br>			
		
		</div>		
						
		
	</form>
	</div>
	
	
	
	<div class="modal-footer">
		<h5>@employee</h5>
	</div>
</div>
	
</div>

	 



	<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		
		//Get the button that opens the modal
		var btn=document.getElementById("deleteoption");
		
		
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
	if(isset($_POST['deletebtn'])){
		$count=0;
		$sql4="SELECT * FROM issue_asset WHERE issue_asset.approve='' AND issue_asset.bid='$_POST[productid]' AND username='$_SESSION[logon]'";
		$res=mysqli_query($db,$sql4);
		
		$count=(mysqli_num_rows($res));
		if($count==0){
			?>
				<script type="text/javascript">
					alert("Not able be deleted");
					window.location="requestasset.php";
				</script>
			<?php
		}else{
			mysqli_query($db,"DELETE FROM `issue_asset` WHERE issue_asset.approve='' AND issue_asset.bid='$_POST[productid]' AND username='$_SESSION[logon]';");
			
			?>
				<script type="text/javascript">
					alert("Record deleted successfully!");
					window.location="requestasset.php";
				</script>
			<?php
		}
		
		}
		

	?>
	
	
	



</body>
<div style="margin-top: -45px;">
	<?php
		include "footer.php";
	?>
</div>

</html>