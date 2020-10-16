<?php
	include("connection.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assets to be disposed</title>
</head>

<style type="text/css">
	table,tr,td{
		border: 1px;
		border-collapse: collapse;
	}
	th,td{
		font-size: 14px;
		padding: 3px;
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
	


	
		<div class="formpage">
		
			<tr><td><img style="margin-left: 290px; height: 135px;" src="images/logo5.jpg"</td></tr>
	
			<div>
				<tr><td ><span style="margin-left: 220px; font-size: 20px;color: red"><b>COMPANY XYZ ASSETS LIMITED</b></span></td></tr>
			</div>
			
			<div align="center" style="line-height: 5px;">
				<p style="font-size: 16px">P.O BOX 00200-4533 NAIROBI, KENYA</p>
				<p style="font-size: 15px">+25471520002</p>
				<p style="font-size: 14px">Email:companyxyzassets@xyz.ac.ke ~ Web://www.companyxyzassets.com</p>
				
			</div>
			
			
		<br>
		<div align="center"><b><span style="color: blue"><caption>REPORT ON REPAIR ASSETS </caption></span></b></div>
		<br>
		<div align="center">
		<?php
			$count=0;
			$supplier="";
			
			$res=mysqli_query($db,"SELECT * FROM `assets` WHERE assets.status='3' ORDER BY `assets` .`id` DESC ;");
			
			
			$count=mysqli_num_rows($res);
			if(mysqli_fetch_assoc($res));
			
			if($count=='0'){
				echo "Currently no assets to repair";
			}else{
				echo "<table class='table table-bordered table-hover' border='1'>";
					
					echo "<tr>";
					
					echo "<th>";		echo "PRODUCT ID";					echo"</th>";
					echo "<th>";		echo "ASSET NAME";					echo"</th>";
					echo "<th>";		echo "DATE REGISTERED";				echo"</th>";
					echo "<th>";		echo "QUANTITY";					echo"</th>";
					echo "<th>";		echo "DEPARTMENT";					echo"</th>";
					echo "<th>";		echo "SUPPLIER";					echo"</th>";
					
					
					echo "</tr>";
				
				
			
				while($row=mysqli_fetch_assoc($res)){
					
					if($row['supplier']=='2'){
						$supplies="Government";
					}elseif($row['supplier']=='3'){
						$supplies="Company purchases";
					}elseif($row['supplier']=='4'){
						$supplies="Donations";
					}else{
						$supplies="Not Stated";
					}
					
					
					if($row['department']=='1'){
						$section="Not-stated";
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
						$section="Procurement";
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
					
		echo "<tr border='1'>";
					
		
		echo "<td>";		echo $row['bid'];					echo "</td>";
		echo "<td>";		echo $row['name'];					echo "</td>";
		echo "<td>";		echo $row['date'];					echo "</td>";
		echo "<td>";		echo $row['quantity'];				echo "</td>";
		echo "<td>";		echo $section;						echo "</td>";		
		echo "<td>";		echo $supplies;						echo "</td>";
		
					
		
		echo "</tr>";
				}
				
				echo "</table>";
			}
			
			
		?>
		</div>
	</div>
		
</body>
</html>