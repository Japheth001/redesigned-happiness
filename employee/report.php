<?php
 include 'navbar.php';
 include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" >
<meta content="width=device-width, device-scale=1"
<title></title>
</head>

<style type="text/css">
	
	.wrapper {
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    transition: background-color .5s;
	background-color: lawngreen;
		
	
		height: 550px;
		
		margin: 0px auto;
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
		
	}
	/*Style for the email*/
	
	
	
	.mains{
		
		width: 700px;
		margin: 0px auto;
		border-radius: 10px;
				border-left: -100px solid  aquamarine;
		
		margin-left: -30px;
		margin-top: -150px;
	}
	.info{
		
		width: 90%;
		background-color:aquamarine;
		padding: 0.5px;
		text-shadow: 1px 1px 1px #222;
		color: black;
		font-size: 18px;
	}
	.form-box{
		background-color: #eee;
		padding: 30px;
	}
	input{
		width: 100px;
	}
	label{
		color: hotpink;
	}
	
	
	@media(max-width;720px){
		.main{
			width: 70%;
		}
	}

</style>
<body >
	<div class="container">
	

	
	<div class="mains">
		<div class="info" style="margin: 0 auto; margin-left: 300px; margin-top: 160px;"><h3>Fill the form to get an Assistance</h3></div>	
		<div class="info" style="margin: 0 auto; margin-left: 300px; margin-top: 10px;" >
		<form name="form" action="" method="post" class="form-box">
		
			<label style="margin-left: -220px;" for="todaysdate">Select department I need assistance from:</label><br>
			<div class="custom-select form-control" style="width: 250px; font-size: 13px;margin-left:5px">
							<select name="assistance_from" size="1">
						<option value="1">Select Department</option>
						<option value="2">Department of ICT</option>
						<option value="3">Corporate Planning</option>	
						<option value="4">Corporate Commucations</option>
						<option value="5">Department of HR </option>
						<option value="6">Department of Finance</option>
						<option value="7">Department of Procurement</option>
						<option value="8">Department of Air Transport</option>
						
						<option value="9">Licensing and Examinations</option>
						<option value="10">General Directors</option>
						<option value="11">Flight Operations</option>
						<option value="12">Aviation Security</option>
						<option value="13">Ground Operations</option>
						<option value="14">Department of Airworthiness</option>
						<option value="15">Aeronautical Information Services</option>
						<option value="16"></option>
						</select>
						</div>
						
			
			
			
			<div class="custom-select form-control" style="width: 200px; font-size: 13px; margin-left: 390px; margin-top:-10px; ">
				<select name="urgency" size="1">
						<option value="1">Select Status</option>
						<option value="2">Urgent</option>
						<option value="3">Not-Urgent</option>	
						
				</select>
			</div><br>
						
			
			<label style="margin-left: 90px;" for="todaysdate">Enter Todays Date</label><br>
			<input style="width: 200px;margin-left:250px; " class="form-control" type="date" name="date" placeholder="Date" reqired><br>
					
						<label style="margin-left: 120px;" for="todaysdate">Enter your department</label><br>
						<div class="custom-select form-control" style="width: 250px; font-size: 13px;margin-left:255px">
							<select name="mydepartment" size="1">
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
						
						</select>
						</div><br>
			
			<label style="margin-left: 90px;" for="message">Name the problem</label><br>
			
			<textarea style="width: 200px;margin-left:140px;font-size: 13px; " name="text" class="message" placeholder="Write..." required></textarea><br><br>
			
			<input style="margin-left: 140px" type="submit" name="submit" value="Send" class="btn btn-success">
		</form>
	</div>
	
		
				
	</div>
	
</div>



</div>
		
		<?php
		if(isset($_POST['submit']))
		{
			if(isset($_SESSION['logon']) ){
				mysqli_query($db,"INSERT INTO `support`(`employee_name`, `mydepartment`, `urgency`, `assistance_from`, `date`, `message`, `served_by`, `approve`) VALUES ( '$_SESSION[logon]','$_POST[mydepartment]','$_POST[urgency]','$_POST[assistance_from]',
				'$_POST[date]','$_POST[text]','-','-');");
				
			?>
				<script>
			alert ("Welcome <?php echo $_SESSION[logon]?><br>Reported Successfully...");
				</script>
				<?php
			}else{
				
				?>
				<script>
			alert ("Report not sent.");
				</script>
				<?php
			}
			
		}
		?>




<?php	
	  			if(isset($_POST['backs'])){
					?>
					<script>
	  				window.location="dashboard_empl.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		<div class="back-buttons" style="margin-top: -60px; margin-left: 870px;">
	  				<form name="" action="" method="post">
	  					<button style="border: none;" class="btn btn-warning glyphicon glyphicon-backward" name="backs">BACK</button>
	  				</form>
	  			</div>
		<br>
		

</body>
<br>
</html>