<?php
include("navbar.php");
include("connection.php");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assets Dashboard</title>
</head>

<style type="text/css">
	
	/*New Style for Modal*/
	
	body {font-family: Arial, Helvetica, sans-serif; background-color: white;}

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
	.closes {
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

.closes:hover,
.closes:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {
	padding: 2px 16px;
	line-height: 12px;
	}

.modal-footer {
    padding: 1px 8px;
    background-color: #5cb85c;
    color: white;
}

	.form-control{
		width: 250px;
		margin: 0 auto;
	}	
	
	
	
	
	
	/*New Style for Masomo Page*/
	
	.wrapper{
		
		width: 920px;
		height: 420px;
		margin: 0 auto;
		
		background-color: #801b0029;
	}
	
	}
	.registersub{
		height: 400px;
		width: 250px;
		background-color: green;
		margin-left: 50px;
		margin-top: 40px;
		opacity: .3;
	}
	.studentmarks{
		margin-left: 300px;
		margin-top: -200px;
	}
	.editmarks{
	margin-left: 600px;
	margin-top: -150px;	
	}
	.reports{
	margin-left: 40px;
	margin-top: 70px;	
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
</style>

<body>

<div class="wrapper">


<div style="margin-left: 80px;" >
	<div class="registersubB" id="borrowasset">
<a href="#">
	<h4 style="margin-left: 80px; margin-bottom: 10px">REQUEST<br> ASSET</br></h4>
	<img src="images/request2.jpg" alt="ADD SUBJECT"  title="REQUEST EQUIPMENT" style="width: 180px;">
</a>
	
</div>


<div class="editmarks" style="margin-top: -185px" id="mydepassets1">
<a href="#" >
<h4 style="margin-left: 60px; margin-bottom: 10px">VIEW<br>ASSETS<br></h4>
	<img src="images/view2.jpg" alt="EDIT SUBJECT" title="EDIT MARKS" style="width: 150px; height: 150px;">
</a>	
</div>

<div class="studentmarks" id="viewmarks" style="margin-top: -220px;">
<a href="requestasset.php">
<h4 style="margin-left: 60px; margin-bottom: 8px; margin-top: 30px;">ASSETS<br>STATUS</h4>
	<img src="images/serviced2.jpg" alt="ADD SUBJECT" title="VIEW STATUS" style="width: 170px; height: 150px;">
</a>	
</div>



<div class="reports" style="margin-top: 10px; margin-left: 5px;">
<a href="printcertification">
<h4 style="margin-left: 18px; margin-bottom: 5px">CERTIFICATION<br></h4>
	<img src="images/transfer4.jpg" alt="EDIT SUBJECT" title="GENERATE REPORTS" style="width: 180px; height: 160px;">
</a>	
</div>



<div class="studentmarks" id="viewmarks" style="margin-top: -220px;">
<a href="request_assist.php">
<h4 style="margin-left: 50px; margin-bottom: 5px; margin-top: 30px;">ASSIST<br>REQUESTS</h4>
	<img src="images/logo16.jpg" alt="ADD SUBJECT" title="VIEW STATUS" style="width: 170px; height: 150px;">
</a>	
</div>

</div>
	



</div>

<?php	
	 if(isset($_POST['backs'])){
		?>
			<script>
	  			window.location="dashboard_empl.php";
	  		</script>
		<?php
				}	
	  			
	  		?>	
	  		
	  		<div class="back-buttons" style="margin-top: 10px; margin-left: 640px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backs" style="border: none;">BACK</button>
	  				</form>
	  		</div>

<!--Modal for Student Marks.....-->
<!-- Html Code for modal form to select term -->


<!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
	<p><?php 
	echo  "Welcome"." "." ".$_SESSION['logon'];
	
	?></p>
</div>

	<h3 style="text-align: center; font-size: 20px"><b><span class="glyphicon glyphicon-car">SELECT YOUR DEPARTMENT</span></b></h3>
	<form method="post" action="" name="" >
	
	
	<div class="custom-select" style="width: 200px; font-size: 12.5px;">
						<select name="department" size="1">
						<option value="1">Select Department</option>
						<option value="2">Department of ICT</option>
						<option value="3">Corporate Planning</option>	
						<option value="4">Corporate Commucations</option>
						<option value="5">Department of HR </option>
						<option value="6">Department of Finance</option>
						<option value="7">Department of Procurement</option>
						<option value="8">Department of Air Transport</option>
						<option value="9">Flight Operations</option>
						<option value="10">Licensing and Examinations</option>
						<option value="11">General Directors</option>
						<option value="12">Aviation Security</option>
						<option value="13">Ground Operations</option>
						<option value="14">Airworthiness</option>
						<option value="15">Aeronautical Information Services</option>
						
						</select>
						</div>
		<button type="submit" name="viewdepasset" style="margin-left: 300px;margin-top: 100px;border: none;" class="btn btn-info"><span>PROCEED</span></button>
		<br><br><br><br><br><br><br><br><br>
	</form>
	
	
	
	<div class="modal-footer">
		<h3>@employee</h3>
	</div>
</div>
	
</div>





	<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		//Get the button that opens the modal
		var btn=document.getElementById("mydepassets1");
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





<!--Open the modal-->
<div class="modal" id="myModals">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="closes">&times;</span>
	<p><?php 
	echo  "Welcome"." "." ".$_SESSION['logon'];
	
	?></p>
</div>
	
	<div class="modal-body">
	
	
	<form method="post" action="" name="" >	
	<h3 style="text-align: center; font-size: 20px"><b><span class="glyphicon glyphicon-car">SELECT YOUR DEPARTMENT</span></b></h3>
	<form method="post" action="" name="" >
	
	
	<div class="custom-select" style="width: 200px; font-size: 12.5px;">
						<select name="department" size="1">
						<option value="1">Select Department</option>
						<option value="2">Department of ICT</option>
						<option value="3">Corporate Planning</option>	
						<option value="4">Corporate Commucations</option>
						<option value="5">Department of HR </option>
						<option value="6">Department of Finance</option>
						<option value="7">Department of Procurement</option>
						<option value="8">Department of Air Transport</option>
						<option value="9">Flight Operations</option>
						<option value="10">Licensing and Examinations</option>
						<option value="11">General Directors</option>
						<option value="12">Aviation Security</option>
						<option value="13">Ground Operations</option>
						<option value="14">Airworthiness</option>
						<option value="15">Aeronautical Information Services</option>
						
						</select>
						</div>
		<button type="submit" name="askdepasset" style="margin-left: 300px;margin-top: 100px;" class="btn btn-info"><span>PROCEED</span></button>
		<br><br><br><br><br><br><br><br><br><br>
			
						
		
	</form>
	</div>
	
	
	
	<div class="modal-footer">
		<h5>@employee</h5>
	</div>
</div>
	
</div>

	 



	<script>
		//Get the modal
		var modals=document.getElementById('myModals');
		
		//Get the button that opens the modal
		var btns=document.getElementById("borrowasset");
		
		
		//Get the span element that closes the modal
		var spans=document.getElementsByClassName("closes")[0];
		

		//Open the button once clicked
		btns.onclick=function(){
			modals.style.display="block"
		}
		//When the user clicks on the span to close the button
		spans.onclick=function(){
			modals.style.display="none";
		}
		
		//When the user click outside the modal box this is what happens
		window.onclick=function(event){
			if(event.target==modals){
				modals.style.display="none";
			}
		}
			
		
	
	</script>
	
	
	
	<?php
		if(isset($_POST['viewdepasset'])){
			$_SESSION['department']=$_POST['department'];
			
			?>
			<script>
				window.location="emp_assets";
			</script>
			<?php
		}
	?>
	
	
	<?php
		if(isset($_POST['askdepasset'])){
			$_SESSION['department']=$_POST['department'];
			
			?>
			<script>
				window.location="e_assets";
			</script>
			<?php
		}
	?>
	


</body>

	<div style="margin-top: -45px;">
		<?php
			include "footer.php";
		?>
	</div>
</html>