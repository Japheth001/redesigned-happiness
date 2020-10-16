<?php
	session_start();
	include("connection.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<title>Employee Asset Cetification</title>
</head>

<style type="text/css">
	table,tr,td{
		width: 90%;
		border: 1px solid black;
		border-collapse: collapse;
	}
	th,td{
		font-size: 15px;
		padding: 5px;
		
	}
	th{
		width: 20%;
	}
	td{
		width: 20%;
	
	}
	
	
</style>
<body>

<style>
		@media print{
			/*Hide every other element*/
			body*{
				visibility: hidden;
			}
			/*..Then displaying print container elements..*/
			.print-container, .print-container*{
				visibility: visible;
			}
			/* Adjusting the position to always from start left*/
			.print-container{
				position: absolute;
				left: 0px;
				top: 0px;
				
			}
		}
	
	</style>
	
	<button onClick="window.print()" style="margin-top:20px">
		Print
	</button>
	


	
		<div class="formpage" style="margin-top: -15px;">
		
			<tr><td><img style="margin-left: 300px; height: 135px;" src="images/logo5.jpg"</td></tr>
	
			<div>
				<tr><td ><span style="margin-left: 240px; font-size: 20px;color: red"><b>COMPANY XYZ ASSETS LIMITED</b></span></td></tr>
			</div>
			
			
			<div align="center" style="line-height: 5px; margin-left:35px; ">
				<p style="font-size: 16px">P.O BOX 00200-4533 NAIROBI, KENYA</p>
				<p style="font-size: 15px">+25471520002</p>
				<p style="font-size: 14px">Email:companyxyzassets@xyz.ac.ke ~ Web://www.companyxyzassets.com</p>
				
			</div>
	
			
			<div class="profilepic" style="margin-top: -120px;">
				<?php
				$sql3=("SELECT pic FROM employee WHERE username='$_SESSION[logon]'");
				$result=mysqli_query($db,$sql3);
				
				while($q=mysqli_fetch_assoc($result)){
					echo("<table>");
					echo "<tr>";
					
				
					echo "<img class='img-circle profile-img' height=120 width=120 src='images/".$q['pic']."'>";
				}
				
			?> <h4><?php ?></h4 <?php 
				echo "</tr>";
				echo("</table>");	
				
			?>
			
			</div>		
			
			
			<br><br>
			
	<?php
		$sqldetails="SELECT department,date,fullnames,username,admission, email FROM employee WHERE employee.username='$_SESSION[logon]';";
		
		$res=mysqli_query($db,$sqldetails);
		
			while($row=mysqli_fetch_assoc($res)){
				$date=$row['date'];
				$fullname=$row['fullnames'];
				$admission=$row['admission'];
				$email=$row['email'];
				
				
				
				if($row['department']=='0' and '1'){
						$section="Null";
					}elseif($row['department']=='2'){
						$section="ICT";
					}elseif($row['department']=='3'){
						$section="Corporate Planning";
					}elseif($row['department']=='4'){
						$section="Corporate Communications";
					}elseif($row['department']=='5'){
						$section="Human Resource";
					}elseif($row['department']=='6'){
						$section="Finance";
					}elseif($row['department']=='7'){
						$section="Procurement Department";
					}elseif($row['department']=='8'){
						$section="Air Transport";
					}elseif($row['department']=='9'){
						$section="Flight Oparations";
					}elseif($row['department']=='10'){
						$section="Licensing and Examinations";
					}elseif($row['department']=='11'){
						$section="General Directors";
					}elseif($row['department']=='12'){
						$section="Aviation Security";
					}elseif($row['department']=='13'){
						$section="Ground Operations";
					}elseif($row['department']=='14'){
						$section="Airworthiness";
					}elseif($row['department']=='15'){
						$section="Aeronautical Information Services";
					}
			}
	?>		
			
			
	<div style="margin-top: -30px;">
		<table border="" align="center">
			<tr><td><span><b>EMPLOYEE NAME</b></span><td> <?php echo $fullname?></td></td><td><span><b>EMPLOYEE ID</b></span></td> <td><?php echo $admission?>  </td></tr>
			
			<tr><td><span><b>DEPARTMENT</b></span></td><td><?php echo $section?> </td><td><span><b>ADMITTED DATE</b></span></td><td> <?php echo $date?> </td></tr>
			
			<tr><td><b>Email</b></td><td colspan="3"><?php echo $email?></td></tr>
		</table>
	</div>
			
		</div>
		
			
			
			
		<br>
		<div align="center"><b><span style="color: blue"><caption>EMPLOYEE ASSET CERTIFICATION </caption></span></b></div>
		<br>
		<div align="center">
		<?php
			$count=0;
			$supplier="";
			
			$res=mysqli_query($db,"SELECT `issue_asset`.bid,`assets`.`name`,`issue_asset`.`approve`, `issue_asset`.`issue_date`,`issue_asset`.`return_date`  FROM issue_asset INNER JOIN assets ON issue_asset.bid=assets.bid WHERE issue_asset.username='$_SESSION[logon]';");
			
			
			$count=mysqli_num_rows($res);
			
			
			if($count=='0'){
				echo "Currently no request has been made";
			}else{
				
				echo "<table class='table table-bordered table-hover' border='1' style: width='70%; border: 0px solid black;'>";
					
					echo "<tr>";
					
					
	
					echo "<th>";		echo "BID";								echo"</th>";
					echo "<th>";		echo "ASSET NAME";						echo"</th>";
					echo "<th>";		echo "APPROVE";							echo"</th>";
					echo "<th>";		echo "ISSUE-DATE";						echo"</th>";
					echo "<th>";		echo "RETURN-DATE";						echo"</th>";
					
					
					echo "</tr>";
				
				
			
		while($row=mysqli_fetch_assoc($res)){
		
		echo "<tr border='0'>";
					
		
		
		echo "<td>";		echo $row['bid'];						echo "</td>";
		echo "<td>";		echo $row['name'];					echo "</td>";
		echo "<td>";		echo $row['approve'];					echo "</td>";
		echo "<td>";		echo $row['issue_date'];				echo "</td>";
		echo "<td>";		echo $row['return_date'];				echo "</td>";		
		
					
		
		echo "</tr>";
				}
				
				echo "</table>";
			}
			
			
		?>
		</div>
	</div>
		
		
	
</body>
</html>