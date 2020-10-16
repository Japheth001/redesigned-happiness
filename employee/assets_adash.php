<?php
include("navbar.php");
include("connection.php");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<style type="text/css">
	
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
	}	
	
	
	
	
	
	/*New Style for Masomo Page*/
	
	.wrapper{
		height: 400px;
		width: 400px;
		margin-left: 900px;
		margin-top: -400px;
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
</style>

<body>
<div class="registersubB">
<a href="addbook.php">

<h4 style="margin-left: 60px; margin-bottom: 10px">REGISTER NEW ASSETS</h4>
	<img src="images/register2.jpg" alt="ADD SUBJECT"  title="ADD NEW ASSET" style="width: 200px;">
</a>
	
</div>


<div class="studentmarks" id="viewmarks">
<a href="deletebook.php">
<h4 style="margin-left: 60px; margin-bottom: 10px">DE-REGISTER ASSETS</h4>
	<img src="images/logo21.jpg" alt="ADD SUBJECT" title="DELETE ASSET" style="width: 200px;">
</a>	
</div>



<div class="editmarks">
<a href="requestasset.php">
<h4 style="margin-left: 60px; margin-bottom: 10px">HANDLE EMPLOYEE<br>REQUESTS</h4>
	<img src="images/acc12.jpg" alt="EDIT SUBJECT" title="HANDLE REQUESTS" style="width: 180px; height: 130px;">
</a>	
</div>


<div class="reports">
<a href="issue_info">
<h4 style="margin-left: 20px; margin-bottom: 10px">REPORT ON<br> ISSUED ASSETS</h4>
	<img src="images/logo12.png" alt="EDIT SUBJECT" title="ISSUED ASSETS" style="width: 180px; height: 130px;">
</a>	
</div>



<!--Modal for Student Marks.....-->
<!-- Html Code for modal form to select term -->


<!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
	<p>Welcome Admin</p>
</div>

	<h3 style="text-align: center; font-size: 20px"><b><span class="glyphicon glyphicon-car">PROVIDE-INFO</span></b></h3>
	<form method="post" action="" name="" >
	
	
	<div >
		<p style="font-size: 18px; color: olivedrab">Select Class</p>
	<select class="form-control" style="color:purple; width: 200px; height: 35px; margin-left: 20px;" name="class">
		<option  value="1">Form 1</option>
		<option value="2">Form 2</option>
		<option value="3">Form 3</option>
		<option value="4">Form 4</option>
	</select><br>
	</div>
	
		
		
		<select class="form-control" style="color: purple" name="year" size="1" >
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
			<option value="2029">2029</option>
			<option value="2030">2030</option>
			<option value="2031">2031</option>
			<option value="2032">2032</option>
			<option value="2033">2033</option>
			<option value="2034">2034</option>
			<option value="2035">2035</option>
			<option value="2036">2036</option>
			<option value="2037">2037</option>
			<option value="2038">2038</option>
			<option value="2039">2039</option>
			<option value="2040">2040</option>
			<option value="2041">2041</option>
			<option value="2042">2042</option>
		</select><br>
		
		<select style="color: purple" class="form-control" name="period">
			<option value="1">Term 1</option>
			<option value="2">Term 2</option>
			<option value="3">Term 3</option>
		</select><br>
		
		<select style="color: purple" class="form-control" name="side">
			<option value="1">NORTH</option>
			<option value="2">SOUTH</option>
			<option value="3">EAST</option>
			<option value="3">WEST</option>
		</select><br>
		
		<input class="form-control" name="admission" type="text" placeholder="Admission Number" required=""><br>
		
		<button type="submit" name="entermarks" style="margin-left: 300px;" class="btn btn-info"><span>ENTER</span></button>
	</form>
	
	
	
	
	<div class="modal-footer">
		<h3>@Admin</h3>
	</div>
</div>
	
</div>





	<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		//Get the button that opens the modal
		var btn=document.getElementById("viewmarks");
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






</body>
</html>