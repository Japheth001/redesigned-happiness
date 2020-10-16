<?php
	session_start();
	include("connection.php");
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, device-scale=1">
<!--The device to adjust display depending on the device using-->




<title>Registration</title>
</head>

<style type="text/css">
	body{
		background-color: white;
	}
	.box1{
		height: 300px;
		width: 500px;
		margin-top: -30px;
		margin-left: 400px;
		
	}
	body1{
		width: 300px;
		height: 300px;
		background-color: aqua;
	}
	
	
		
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

	
/* Other styles used*/
	
	
	.btn-default{
		cursor: pointer;
		border: none;
		opacity: 0.9;
		color: white;
	}
	.form-control{
		background-color: #fff;
		background: white;
		width: 200px;
		height: 30px;
		margin: 0 auto;
	}
	
	
	
	
</style>

<body>


		
<section>
	<div class="reg" style="height: 300px;">
	
		<br><br><br><br>
			
			<div class="box1" style="margin-top: 0px; background-color: #003cff" >
			
			
			<h1 style="color: white; text-align: center; font-size: 25px">Kcaa Inventory System</h1>
			<h1 style="text-align: center; font-weight: 600px; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">Select Registration Mode</h1>
	
		
		<b><p style="padding-left: 50px;font-size: 15; font-weight: 700;">Register as</p></b>
		
		
<div class="registeradmin" id="registers_admins" style="margin-left: 50px;">
<a >
<h4 style="margin-left: 20px; margin-bottom: 5px; height: 10px; margin-top: 3px ">ADMIN</h4>
	<img src="images/register4" alt="ADD SUBJECT"  title="ADMIN" style="width: 100px;">
</a>	
</div>
					
									
<br><br>

					
<div class="registeremployee" id="register_employees" style="margin-left: 300px; margin-top: -295px ">
<a >
<h4 style="margin-left: 20px; margin-bottom: 5px; height: 10px; margin-top: 150px ">EMPLOYEE</h4>
	<img src="images/register4" alt="ADD SUBJECT"  title="ADMIN" style="width: 100px;">
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
	<p>Welcome Employee</p>
</div>

	
	<div class="modal-body">
	<form method="post" action="" name="" >	
	<h3 style="text-align: center; font-size: 20px; color: orangered; font-size: 30px;"><b><span class="glyphicon glyphicon-car"><caption>Employee_Registration_Form</caption></span></b></h3>
	
		
	<div class="custom-selects" style="width: 200px; font-size: 12.5px;">
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
						<option value="12">Flight Operations</option>
						<option value="13">Aviation Security</option>
						<option value="14">Ground Operations</option>
						<option value="15">Department of Airworthiness</option>
						<option value="16">Aeronautical Information Services</option>
						<option value="11"></option>
						</select>
						</div>
						
						
		<div style="margin-left: 250px;">
			<input class="form-control" type="date" name="date" placeholder="Date" reqired><br>
						<input class="form-control" type="text" name="fullnames" placeholder="Full Names" reqired><br>
						
						<input class="form-control" type="text" name="username" placeholder="Username" required><br>
						<input class="form-control" type="password" name="password" placeholder="Password" required><br>
						<input class="form-control" type="text" name="admission" placeholder="Employee Number" required><br>
						<input class="form-control" type="email" name="email" placeholder="Email" required><br>
						
						<input class="form-control" type="number" name="contact" placeholder="Phone Number" required><br>
						
						
						<input class="btn btn-default" type="submit" name="submit_reg" value="Sign Up" style="width:70px; color: black; background-color: salmon; margin-left: 270px;">

		</div>		
						
		
	</div>		
		
	
</form>
	
							
								
										
												
														
																		
			</div>
			
		
		
	</div>
	</div>			
			
					
							
									
											
													
	<!--Modal for Student Marks.....-->
<!-- Html Code for modal form to select term -->


<!--Open the modal-->
<div class="modal" id="myModals">
<!--Open the modal content-->
<div class="modal-content" id="myContents">
<div class="modal-header">
<span class="closes">&times;</span>
	<p>Welcome Admin</p>
</div>

	<div class="modal-body">
	<form method="post" action="" name="" >	
	<h3 style="text-align: center; font-size: 20px; color: red; font-size: 30px;"><b><span class="glyphicon glyphicon-car"><caption>Admin_Registration_Form</caption></span></b></h3>
	
							
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
						<option value="12">Flight Operations</option>
						<option value="13">Aviation Security</option>
						<option value="14">Ground Operations</option>
						<option value="15">Department of Airworthiness</option>
						<option value="16">Aeronautical Information Services</option>
						<option value="11"></option>
						</select>
						</div>
						
			<div style="margin-left: 250px;">
				<input class="form-control" type="date" name="date" placeholder="Date" reqired><br>
						<input class="form-control" type="text" name="fullnames" placeholder="Full Names" reqired><br>
						
						
						<input class="form-control" type="text" name="username" placeholder="Username" required><br>
						<input class="form-control" type="password" name="password" placeholder="Password" required><br>
						<input class="form-control" type="text" name="admission" placeholder="Employee Number" required><br>
						<input class="form-control" type="email" name="email" placeholder="Email" required><br>
						<input class="form-control" type="number" name="contact" placeholder="Phone Number" required><br>

						<input class="btn btn-default" type="submit" name="submit_regadmin" value="Sign Up" style="width:70px; color: black; background-color: salmon; margin-left: 270px;">

		
			</div>			
						
		
	</form>
	</div>
		
		
	
												
																		
			</div>
			
		
		
	</div>
	</div>			
					
			
					
						
								
										
		
					
</section>


<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		//Get the button that opens the modal
		var btn=document.getElementById("register_employees");
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
	
	
	
	

<script>
		//Get the modal
		var modals=document.getElementById('myModals');
		//Get the button that opens the modal
		var btns=document.getElementById("registers_admins");
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
	if(isset($_POST['submit_reg']))
	{
		$count=0;
		$sql="select username from employee";
		$res=mysqli_query($db,$sql);
		
		while($row=mysqli_fetch_assoc($res)){
			if(($row['username'])==($_POST['username'])){
			$count=$count+1;	
			}
			
		}
		if($count==0)
			
		{
		mysqli_query($db,"INSERT INTO `employee`  VALUES (`bid`,'$_POST[department]','$_POST[date]','$_POST[fullnames]','$_POST[username]',
		'$_POST[password]','$_POST[admission]','z','-','$_POST[email]','$_POST[contact]', 'info2.jpg');");
		
		?>
		<script type="text/javascript">
	alert("Registration Successful");
	window.location="login.php";
	</script>
	
	
			
	<?php
		}else{
				
	?>
	<script>
	alert("The Username exists,Create new one");
	window.location="mainsignup.php";
	</script>
}
		<?php		 
			
		}
	}
	
	?>





<?php
	if(isset($_POST['submit_regadmin']))
	{
		$count=0;
		$sql="select username from `admin`";
		$res=mysqli_query($db,$sql);
		
		while($row=mysqli_fetch_assoc($res)){
			if($row['username']==$_POST['username']){
			$count=$count+1;	
			}
			
		}
		if($count==0)
			
		{
		mysqli_query($db,"INSERT INTO `admin`  VALUES (`bid`,'$_POST[department]','$_POST[date]','$_POST[fullnames]','$_POST[username]',
		'$_POST[password]','$_POST[admission]','$_POST[email]','$_POST[contact]', 'info2.jpg');");
		?>
		
		<script type="text/javascript">
			alert("Registration Successful");
			window.location="login.php";
		</script>
	
	
			
	<?php
		}else{
			
	?>
	
	<script>
	alert("The Username exists,Create new one");
	window.location="mainsignup.php";
	</script>
}
		<?php		 
			
		}
	}
	
	?>
	





</body>
</html>