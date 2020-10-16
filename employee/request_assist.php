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
		width: 15%;
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
 
<h3>My Job Requests</h3> 
   
<?php

	if(isset($_SESSION['logon']))
	{
		$q=mysqli_query($db,"SELECT * FROM support where employee_name='$_SESSION[logon]';");
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
			
			echo "<th>";	echo "ID";				echo "</th>";
			echo "<th>";	echo "URGENCY";				echo "</th>";
			echo "<th>";	echo "ASSISTANCE FROM";					echo "</th>";
			echo "<th>";	echo "DATE POSTED";				echo "</th>";
			echo "<th>";	echo "TASK INFO";				echo "</th>";
			echo "<th>";	echo "SERVED BY";				echo "</th>";
			echo "<th>";	echo "STATUS";				echo "</th>";
			
	echo "</table>";
	?>
		<div class="scroll"> 
	<?php
			
			
	echo "<table class='table table-bordered' style='width:98%;' >";	
			while($row=mysqli_fetch_assoc($q)){
				echo "<tr style='background-color: #befdfd'>";
				
				if($row['urgency']=='1'){
					$urgency="Not-stated";
					}elseif($row['urgency']=='2'){
						$urgency="Urgent";
					}elseif($row['urgency']=='3'){
						$urgency="Not-Urgent";
		};
		
		
		if($row['approve']=='1'){
			
					$approve="Un-Stated";
					}elseif($row['approve']=='2'){
						$approve="Wait shortly...";
					}elseif($row['approve']=='3'){
						$approve="Am Coming";
					}elseif($row['approve']=='4'){
						$approve="Solved";
					}elseif($row['approve']=='5'){
						$approve="Call for Assistance";
					}else{
						$approve="-";
				};
				
				
		
		if($row['assistance_from']=='1'){
						$section="Not-stated";
					}elseif($row['assistance_from']=='2'){
						$section="ICT";
					}elseif($row['assistance_from']=='3'){
						$section="Corporate Planning";
					}elseif($row['assistance_from']=='4'){
						$section="Corporate Communications";
					}elseif($row['assistance_from']=='5'){
						$section="Human Resource";
					}elseif($row['assistance_from']=='6'){
						$section="Finance";
					}elseif($row['assistance_from']=='7'){
						$section="Procurement";
					}elseif($row['assistance_from']=='8'){
						$section="Air Transport";
					}elseif($row['assistance_from']=='9'){
						$section="Flight Operations";
					}elseif($row['assistance_from']=='10'){
						$section="Licensing and Examinations";
					}elseif($row['assistance_from']=='11'){
						$section="General Directors";
					}elseif($row['assistance_from']=='12'){
						$section="Aviation Security";
					}elseif($row['assistance_from']=='13'){
						$section="Ground Operations";
					}elseif($row['assistance_from']=='14'){
						$section="Airworthiness";
					}elseif($row['assistance_from']=='15'){
						$section="Aeronautical Information Services";
					}
				echo "<td>";	echo $row['id'];			echo "</td>";
				echo "<td>";	echo $urgency;				echo "</td>";	
				echo "<td>";	echo $section;				echo"</td>";
				echo "<td>";	echo $row['date'];			echo"</td>";
				echo "<td>";	echo $row['message'];		echo"</td>";
				echo "<td>";	echo $row['served_by'];		echo"</td>";
				echo "<td>";	echo $approve;				echo"</td>";
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
	<h3 style="text-align: center; font-size: 20px; color: red; font-size: 30px;"><b><span class="glyphicon glyphicon-car"><caption>Clear_Request</caption></span></b></h3>
	
	<img src="images/dispose2.jpg" style="margin-top: -5px; height: 60px; width: 90px; ;">
		
		<div style="margin-left: 150px;">			
			<p>Enter Id to Delete</p><br>
			<input style="margin-left: 60px; width: 200px;" class="form-control" type="id" name="id" placeholder="Task Id" required="">
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
		$sql="SELECT * FROM support WHERE id='$_POST[id]'";
		$ress=mysqli_query($db,$sql);
		
		$count=(mysqli_num_rows($ress));
		if($count==0){
			?>
				<script type="text/javascript">
					alert("Not able be deleted");
					window.location="request_assist.php";
				</script>
			<?php
		}else{
			mysqli_query($db,"DELETE FROM `support` WHERE id='$_POST[id]';");
			
			?>
				<script type="text/javascript">
					alert("Record deleted successfully!");
					window.location="request_assist.php";
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