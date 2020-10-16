<?php
include 'navbar.php';
include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>employee Information</title>


<style type="text/css">
	.srchi{
	padding-left: 600px;
	margin-left: -150px;
	}
	.back-button{
		margin-left: 600px;
		margin-top: 30px;
	}
	td,th{
		width: 10%;
		padding: 30px;
		margin: 0px auto;
	}
	.scroll{
		background-color: #ddf1dd;
		width: 100%;
		height: 300px;
		overflow: auto;
		
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
<div class="container">
<!-----Adding the search option button----------------->

<div class="group_assets">
	<form method="post" name="" action="">
	<button class="btn btn-default" name="service_staff" style="background-color: green" type="submit">SERVICE STAFF</button>&nbsp;&nbsp;&nbsp;
	
	</form>
</div>

<div class="srchi">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter employee first name.." required>
	<button class="btn btn-default" type="submit" name="employeeinfo" 
	style="background-color: hotpink" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>




<h3>Employee Information</h3>

<?php
	if(isset($_POST['employeeinfo']))
	{
	 $q=mysqli_query($db,"SELECT * FROM employee WHERE fullnames LIKE '%$_POST[enter]%'");
	
		
		if(mysqli_num_rows($q)==0)
		{
		?>
		<br><br>
		<img src="images/acc7.jpg" style="width: 210px; height: 200px; margin-left: 440px;">
		<br>
		
		<div>
		<?php
			echo "Sorry! No employee found". mysqli_error($db);
		}else{
			echo "<table class='table table-bordered table-hover'  style='width:100%;'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "FULL NAMES"	;			echo "</th>";
	echo "<th>";			echo "USERNAME"	;			echo "</th>";
	echo "<th>";			echo "PASSWORD"	;			echo "</th>";
	echo "<th>";			echo "SERVICE KEY"	;			echo "</th>";
	echo "<th>";			echo "SERVED BY"	;			echo "</th>";
	echo "<th>";			echo "EMPLOYEE NUMBER";		echo "</th>";
	echo "<th>";			echo "EMAIL"	;		echo "</th>";
	echo "<th>";			echo "CONDACT"	;		echo "</th>";
	echo "<th>";			echo "DEPARTMENT"	;		echo "</th>";
	
	echo "</table>";
		?>
		<div class="scroll">
		<?php
	echo "<table class='table table-bordered table-hover'  style='width:100%;'>";
	while($row=mysqli_fetch_assoc($q)){
		if($row['department']=='1'){
						$mydep="Not-stated";
					}elseif($row['department']=='2'){
						$mydep="ICT";
					}elseif($row['department']=='3'){
						$mydep="Corporate Planning";
					}elseif($row['department']=='4'){
						$mydep="Corporate Communications";
					}elseif($row['department']=='5'){
						$mydep="Human Resource";
					}elseif($row['department']=='6'){
						$mydep="Finance";
					}elseif($row['department']=='7'){
						$mydep="Procurement";
					}elseif($row['department']=='8'){
						$mydep="Air Transport";
					
					}elseif($row['department']=='9'){
						$mydep="Licensing and Examinations";
					}elseif($row['department']=='10'){
						$mydep="General Directors";
					}elseif($row['department']=='11'){
						$mydep="Flight Operations";
					}elseif($row['department']=='12'){
						$mydep="Aviation Security";
					}elseif($row['department']=='13'){
						$mydep="Ground Operations";
					}elseif($row['department']=='14'){
						$mydep="Air Worthiness";
					}elseif($row['department']=='15'){
						$mydep="Aeronautical Information Services";
					}else{
						$mydep="Null";
		}
		echo "<tr>";
		
		echo "<td>";		echo $row['fullnames'];			echo "</td>";
		echo "<td>";		echo $row['username'];		echo "</td>";
		echo "<td>";		echo $row['password'];		echo "</td>";
		echo "<td>";		echo $row['Job_Id'];		echo "</td>";
		echo "<td>";		echo $row['key_issued_by'];		echo "</td>";
		echo "<td>";		echo $row['admission'];		echo "</td>";
	
		echo "<td>";		echo $row['email'];		echo "</td>";
		echo "<td>";		echo $row['contact'];		echo "</td>";
		echo "<td>";		echo $mydep;		echo "</td>";
	
		
		
		echo "</tr>";
	}
	echo "</table>";
		}
		?>
		</div>
		
		<?php	
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="employeeinfo.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		<div class="back-button" style="margin-left: 530px; border: none;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="back" style="border: none">BACK</button>
	  				</form>
	  			</div>
		
		<?php
		
		
			
		}else{
		
		
		/*-----Else if button is not pressed----*/
		$res=mysqli_query($db,"SELECT `fullnames`, `username`, `password`,`Job_Id`,`key_issued_by`, `admission`, `email`, `contact`,`department`, `pic` FROM `employee`");
	
	echo "<table class='table table-bordered table-hover' style='width:100%;'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "FULL NAMES"	;			echo "</th>";
	echo "<th>";			echo "USERNAME"	;			echo "</th>";
	echo "<th>";			echo "PASSWORD"	;			echo "</th>";
	echo "<th>";			echo "SERVICE KEY"	;			echo "</th>";
	echo "<th>";			echo "SERVED BY"	;			echo "</th>";
	echo "<th>";			echo "EMPLOYEE NUMBER";		echo "</th>";
	echo "<th>";			echo "EMAIL"	;		echo "</th>";
	echo "<th>";			echo "CONDACT"	;		echo "</th>";
	echo "<th>";			echo "DEPARTMENT"	;		echo "</th>";
	
	echo "</table>";
		?>
		<div class="scroll">
		<?php
	echo "<table class='table table-bordered table-hover'  style='width:100%;'>";
		
	while($row=mysqli_fetch_assoc($res)){
		
		if($row['department']=='1'){
						$mydep="Not-stated";
					}elseif($row['department']=='2'){
						$mydep="ICT";
					}elseif($row['department']=='3'){
						$mydep="Corporate Planning";
					}elseif($row['department']=='4'){
						$mydep="Corporate Communications";
					}elseif($row['department']=='5'){
						$mydep="Human Resource";
					}elseif($row['department']=='6'){
						$mydep="Finance";
					}elseif($row['department']=='7'){
						$mydep="Procurement";
					}elseif($row['department']=='8'){
						$mydep="Air Transport";
					
					}elseif($row['department']=='9'){
						$mydep="Licensing and Examinations";
					}elseif($row['department']=='10'){
						$mydep="General Directors";
					}elseif($row['department']=='11'){
						$mydep="Flight Operations";
					}elseif($row['department']=='12'){
						$mydep="Aviation Security";
					}elseif($row['department']=='13'){
						$mydep="Ground Operations";
					}elseif($row['department']=='14'){
						$mydep="Air Worthiness";
					}elseif($row['department']=='15'){
						$mydep="Aeronautical Information Services";
					}else{
						$mydep="Null";
		}
		echo "<tr>";
		
		echo "<td>";		echo $row['fullnames'];			echo "</td>";
		echo "<td>";		echo $row['username'];		echo "</td>";
		echo "<td>";		echo $row['password'];		echo "</td>";
		echo "<td>";		echo $row['Job_Id'];		echo "</td>";
		echo "<td>";		echo $row['key_issued_by'];		echo "</td>";
		echo "<td>";		echo $row['admission'];		echo "</td>";
	
		echo "<td>";		echo $row['email'];		echo "</td>";
		echo "<td>";		echo $row['contact'];		echo "</td>";
		echo "<td>";		echo $mydep;		echo "</td>";
		
		echo "</tr>";
	}
	echo "</table>";
		
		?>
		</div>
		<?php
		?>
		
	<div class="back-button" style="margin-left: 530px; border: none;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backs" style="border: none;">BACK</button>
	  				</form>
	  			</div>
		<?php
	}
	
	



	
	  			if(isset($_POST['backs'])){
					?>
					<script>
	  				window.location="dashboard_adfinal.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		
		
	


</div>




</body>
</html>