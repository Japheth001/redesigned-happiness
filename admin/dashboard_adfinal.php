<?php
	session_start();
	include "connection.php";
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<meta charset="utf-8">
<title>Sidebar Dashboard Template</title>
</head>

<style type="text/css">

	
	
	body{
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
		height: 400px;
	}
	header{
		position: fixed;
		background: #10E549;
		padding: 20px;
		width: 100%;
		height: 30px;
	}
	.left_area h3{
		color: #fff;
		margin: 0;
		text-transform: uppercase;
		font-size: 22px;
		font-weight: 900;
	}
	.left_area span{
		color: aqua;
	}
	.right_area_mes{
		float: right;
		margin-top: -30px;
		margin-right: 40px
		
	}
	.logout-btn{
		padding: 5x;
		background:#080349;
		text-decoration: none;
		float: right;
		margin-top: -30px;
		margin-right: 40px;
		border-radius: 2px;
		font-size: 15px;
		font-weight: 600;
		color: #fff;
		transition: 0.5s;
		transition-property: background;
	}
	.logout-btn:hover{
		background: #14ECCE;
	}
	.sidebar{
		background: #080349;
		margin-top: 70px;
		padding-top: 30px;
		position: fixed;
		left: 0px;
		width: 250px;
		height: 70px%;
		transition: 0.5s;
		transition-property: left;
		
	}
	.sidebar .profile-image{
		width: 100px;
		height: 100px;
		border-radius: 100px;
		margin-top: 10px;
		
	}
	.sidebar h4{
		color: #ccc;
		margin-top: 0px;
		margin-bottom: 20px;
	}
	.sidebar a{
		color: #fff;
		display: block;
		width: 100%;
		line-height: 53px;
		text-decoration: none; 
		padding-left: 40px;
		box-sizing: border-box;
		transition: 0.5s;
		transition-property: background;
		
	}
	.sidebar a:hover{
		background: #10ED83;
		
	}
	.sidebar i{
		padding-right: 10px;
	}
	label #sidebar_btn{
		z-index: 1;
		color: #fff;
		position: fixed;
		cursor: pointer;
		left: 300px;
		font-size: 20px;
		margin: 5px 0;
		transition: 0.5s;
		transition-property: color;
	}
	label #sidebar_btn:hover{
		color: aqua;
		
	}
	#check:checked~.sidebar{
		left: -190px;
	}
	#check:checked~.sidebar a span{
		display: none;
	}
	#check:checked~.sidebar a{
		font-size: 20px;
		margin-left: 170px;
		width: 80px;
		
	}
	.content{
		
		margin-left: 250px;
		background: url(images/818215-beach-wallpaper-for-computer-2560x1600-computer.jpg);
		background-position: center;
		background-size: cover;
		height: 470px;
		transition: 0.5s;
		transition-property: 
	}
	#check:checked~.content{
		margin-left: 60px;
	}
	#check{
		display: none;
	}
</style>


<body>

<input type="checkbox" id="check">
	<!--.....................................Header area start...........................-->
	<header>
	<label for="check"><i class="fa fa-bars" id="sidebar_btn"></i></label>
		<div class="left_area">
			<h3>INVENTORY <span> SYSTEM</span></h3>
		</div>
		
		<div class="right_area_mes">
			<a href="message.php"><span class="glyphicon glyphicon-envelope">&nbsp;<span class="badge bg-green">0</span></span></a>
		</div>
		
		
		<div class="right_area">
			<a href="logout.php" class="logout-btn">Logout</a>
		</div>
		<h3 style="color: red; margin-left: 500px;">WELCOME TO ADMIN PANEL</h3>
	</header>
	<!--.....................................Header area end.............................-->
	
	<!-----------------------------Sidebar Start...........................................-->
	<div class="sidebar">
		<center>
		
			<?php
				$sql3=("SELECT pic FROM admin WHERE username='$_SESSION[logon]'");
				$result=mysqli_query($db,$sql3);
				
				while($q=mysqli_fetch_assoc($result)){
					echo("<table>");
					echo "<tr>";
					
				
					echo "<img class='img-circle profile-image' height=50 width=55 src='images/".$q['pic']."'>";
				}
				
			?> <h4><?php echo "Welcome" .""." ".$_SESSION['logon'];?></h4 <?php 
				echo "</tr>";
				echo("</table>");	
				
			?>
			
			
				
		</center>
		<a href="dashboard_adfinal.php"><i class="fa fa-desktop"><span>DashBoard</span></i></a>
			<a href="profile.php"><i class="fa fa-picture-o"><span>Profile</span></i></a>
			<a href="assets_adash.php"><i class="fa fa-table"><span>Manage Assets</span></i></a>
			<a href="mantain_dash.php"><i class="fa fa-th"><span>Maintenances</span></i></a>
			<a href="service_manage.php"><i class="fa fa-archive"><span>Service Manager</span></i></a>
			<a href="employeeinfo.php"><i class="fa fa-archive"><span>Employees Info</span></i></a>
			<a href="assets_chart.php"><i class="fa fa-globe"><span>Chart Reports</span></i></a>
			
			
	</div>
	<!-----------------------------Sidebar Ends...........................................-->
	
	<div class="content" style=" margin-top: -70px;">
			
	
	<h2 style="font-size: 30; color: black; text-align: center; margin-top: -80px; margin-top: 70px;">WELCOME TO ADMIN PANEL</h2>

		


<div class="container admin_number " style="background-color: #36a71a; width: 200px; height: 115px; margin-left: 25px; margin-top: 80px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total  Admins</div>
<div class="fa fa-user" style="font-size: 60px; margin-top: 10px;margin-left: 70%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$sql1="SELECT bid FROM admin ORDER BY bid;";
	$query_run_admins=mysqli_query($db,$sql1);
	
	$row=mysqli_num_rows($query_run_admins);
	
	echo '<h1>'.$row.'</h1>';
?>
</div>
</div>	

</div>



<div class="container admin_number" style="background-color: #ce7dc0; width: 200px; height: 115px; margin-left: 550px; margin-top: -350px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total Employees</div>
<div class="fa fa-users" style="font-size: 60px; margin-top: 10px;margin-left: 65%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$sql2="SELECT username FROM employee ORDER BY username;";
	$query_run=mysqli_query($db,$sql2);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>



<div class="container admin_number" style="background-color: #1aff1a; width: 200px; height: 115px; margin-left: 840px; margin-top: -115px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Total Assets </div>
<div class="fa fa-laptop" style="font-size: 60px; margin-top: 10px;margin-left: 65%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$sql3="SELECT bid FROM assets ORDER BY bid;";
	$query_run=mysqli_query($db,$sql3);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>



<div class="container admin_number" style="background-color: #1aff66; width: 200px; height: 115px; margin-left: 1100px; margin-top: -115px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Issued Assets </div>
<div class="fa fa-mail-forward" style="font-size: 60px; margin-top: 10px;margin-left: 70%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$sql4="SELECT approve FROM issue_asset WHERE approve='Yes' ORDER BY approve ;";
	$query_run=mysqli_query($db,$sql4);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>

<br>



<div class="container admin_number" style="background-color: #00ff80; width: 200px; height: 100px; margin-left: 1100px; margin-top: -7px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Expired Assets </div>
<div class="fa fa-bars" style="font-size: 60px; margin-top: 10px;margin-left: 70%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$var='<p style="color:yellow; background-color:red">EXPIRED</p>';
	$sql5="SELECT approve FROM issue_asset WHERE approve='$var' ORDER BY approve ;";
	$query_run=mysqli_query($db,$sql5);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>
<br>


<div class="container admin_number" style="background-color:  #ff471a; width: 200px; height: 115px; margin-left: 1100px; margin-bottom: 105px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Returned Assets </div>
<div class="fa fa-mail-reply" style="font-size: 60px; margin-top: 10px;margin-left: 70%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$var1='<p style="color:pink; background-color:BLUE">RETURNED</p>';
	$sql5="SELECT approve FROM issue_asset WHERE approve='$var1' ORDER BY approve ;";
	$query_run=mysqli_query($db,$sql5);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>





<div class="container admin_number" style="background-color:  #ff471a; width: 200px; height: 115px; margin-left: 1100px; margin-top: -90px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Disposed Assets </div>
<div class="fa fa-check" style="font-size: 60px; margin-top: 10px;margin-left: 70%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$sqldispose="SELECT bid FROM assets WHERE assets.status='2' ORDER BY bid;";
	$query_dispose=mysqli_query($db,$sqldispose);
	$row_dispose=mysqli_num_rows($query_dispose);
	
	//...echo '<h1>'.$row_dispose.'</h1>';
	echo '<h1>'.$row_dispose.'</h1>';
?>	
</div>
</div>


	</div>
<!---------------------------------------------------------------------------------------------------------	
<div class="emailicon">
	<img src="images/email1.jpg" style="margin-left:600px; margin-top:-150px; width; 150px; height: 150px;">
</div>
---------------------------------------------------------------------------------------------------------->	
<?php

//.........................REQUESTED ASSETS......//
	$sqlrequested="SELECT approve FROM issue_asset WHERE approve='' ORDER BY approve ;";
	$query_requested=mysqli_query($db,$sqlrequested);
	$row_requested=mysqli_num_rows($query_requested);
	
	//..echo '<h1>'.$row_requested.'</h1>';
	
	
	//.........................ISSUED ASSETS..................//
	$sqlissued="SELECT approve FROM issue_asset WHERE approve='yes' ORDER BY approve ;";
	$query_issued=mysqli_query($db,$sqlissued);
	$row_issued=mysqli_num_rows($query_issued);
	
	//..echo '<h1>'.$row_issued.'</h1>';
	
	
	
	//.......................RETURNED ASSETS......//
	$var1='<p style="color:pink; background-color:BLUE">RETURNED</p>';
	$sqlreturned="SELECT approve FROM issue_asset WHERE approve='$var1' ORDER BY approve ;";
	$query_returned=mysqli_query($db,$sqlreturned);
	$row_returned=mysqli_num_rows($query_returned);
	
	//..echo '<h1>'.$row_returned.'</h1>';
	
	
	//.......................EXPIRED ASSETS......//
	$var='<p style="color:yellow; background-color:red">EXPIRED</p>';
	$sqlexpired="SELECT approve FROM issue_asset WHERE approve='$var' ORDER BY approve ;";
	$query_expired=mysqli_query($db,$sqlexpired);
	$row_expired=mysqli_num_rows($query_expired);
	
	//..echo '<h1>'.$row_returned.'</h1>';
		
		
		
		
		
		
		
		
		
	
	//........................UNSTATED- TASKS......//
	$sqlunstated="SELECT urgency FROM support WHERE urgency='1' ORDER BY urgency ;";
	$query_unstated_tasks=mysqli_query($db,$sqlunstated);
	$row_unstated_tasks=mysqli_num_rows($query_unstated_tasks);
	
	//..echo '<h1>'.$row_urgent.'</h1>';	
		
		
		
		
	//........................URGENT TASKS......//
	$sqlurgent="SELECT urgency FROM support WHERE urgency='2' ORDER BY urgency ;";
	$query_urgent=mysqli_query($db,$sqlurgent);
	$row_urgent=mysqli_num_rows($query_urgent);
	
	//..echo '<h1>'.$row_urgent.'</h1>';
		
	
	//........................ NOT-URGENT TASKS......//
	$sqlnoturgent="SELECT urgency FROM support WHERE urgency='3' ORDER BY urgency ;";
	$query_not_urgent=mysqli_query($db,$sqlnoturgent);
	$row_not_urgent=mysqli_num_rows($query_not_urgent);
	
	//..echo '<h1>'.$row_not_urgent.'</h1>';
	
	
 ?>




<div class="wrappers" style="background-color: white; width: 370px; margin-left: 250px;height:360px;margin-top:-438px;  ">
<div class="contain" style="width: 350px; height: 250px; margin-left: -20px; margin-top: 140px;">
	<canvas id="myAssetCondition" width="200" height="200" style="margin-top: -100px;"></canvas>

</div>
</div>
<script>
	let myAssets=document.getElementById('myAssetCondition').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopAssets=new Chart(myAssets,{
		type: 'polarArea',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Requested','Issued','Returned','Expired'],
			
			datasets:[{
				label:'(Total)',
				data:[
					
					<?php echo $row_requested ?>,
					<?php echo $row_issued ?>,
					<?php echo $row_returned ?>,
					<?php echo $row_expired ?>,
					
					
				
				
					
				],
				//backgroundColor:'green'
				backgroundColor:[
				'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1,
				borderColor: '#777',
				hoverBorderWidth: 3,
				hoverBorderColor: '#000'
				
				
			}]
		},
		options:{
			title:{
				display: true,
				text:'Asset Borrow Status',
				fontSize:25
			},
			legend:{
			display: true,  //Legend displays the keys- it depends on the type of graph you are using
			position: 'right',
			fontColor: '#000'
		},
			layout:{
			padding:{
				left: 50,
				right: 0,
				bottom:0,
				top: 0
			},
				
		},
			tooltips:{
				enabled: true
			}
		}
		
	});
	</script>
	
	
	
	
	
	<div class="wrappers" style="background-color: white; width: 330px; margin-left: 700px;height:300px;margin-top:-508px;  ">
<div class="contain" style="width: 350px; height: 250px; margin-left: -20px; margin-top: 140px;">
	<canvas id="task_status" width="200" height="200" style="margin-top: -100px;"></canvas>

</div>
</div>
	

<script>
	let myStatus=document.getElementById('task_status').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopStatus=new Chart (myStatus,{
		type: 'polarArea',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Unstated','Urgent','Not-Urgent'],
			
			datasets:[{
				label:'(Total)',
				data:[
					
					<?php echo $row_unstated_tasks ?>,
					<?php echo $row_urgent ?>,
					<?php echo $row_not_urgent ?>,
					
					
					
				
				
					
				],
				//backgroundColor:'green'
				backgroundColor:[
				'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1,
				borderColor: '#777',
				hoverBorderWidth: 3,
				hoverBorderColor: '#000'
				
				
			}]
		},
		options:{
			title:{
				display: true,
				text:'Monitor tasks',
				fontSize:25
			},
			legend:{
			display: true,  //Legend displays the keys- it depends on the type of graph you are using
			position: 'right',
			fontColor: '#000'
		},
			layout:{
			padding:{
				left: 50,
				right: 0,
				bottom:0,
				top: 0
			},
				
		},
			tooltips:{
				enabled: true
			}
		}
		
	});
	</script>
	
					



</body>

	
</html>>>