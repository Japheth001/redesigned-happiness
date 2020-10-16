<?php
session_start();
include("connection.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chart.Js</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>



<body>


<div style="margin-top: 10px; margin-left: 1200px; height: 20px;">
	<form name="" action="" method="post">
		<button class="btn btn-success" name="back" type="submit" value="BACK">BACK</button>
	</form>
</div>


<div style="margin-top: -25px; margin-left: 600px; height: 20px;">
	<form name="" action="" method="post">
		<button class="btn btn-warning" name="refresh" type="submit" value="refresh">REFRESH</button>
	</form>
</div>


<?php
	if(isset($_POST['back'])){
		?>
	<script>
			window.location="dashboard_adfinal.php";
	</script>
		<?php
	}
		
?>


<?php
	//.......NULL NOT IDENTIFIED......//
	$sqlnull="SELECT bid FROM assets WHERE assets.status='1' ORDER BY bid;";
	$query_null=mysqli_query($db,$sqlnull);
	$row_null=mysqli_num_rows($query_null);
	
	//... echo '<h1>'.$row_null.'</h1>';
	
	
	//.......DISPOSED ASSETS......//
	$sqldispose="SELECT bid FROM assets WHERE assets.status='2' ORDER BY bid;";
	$query_dispose=mysqli_query($db,$sqldispose);
	$row_dispose=mysqli_num_rows($query_dispose);
	
	//...echo '<h1>'.$row_dispose.'</h1>';
	
	
	//.......REPAIRED ASSETS......//
	$sqlrepair="SELECT bid FROM assets WHERE assets.status='3' ORDER BY bid;";
	$query_repair=mysqli_query($db,$sqlrepair);
	$row_repair=mysqli_num_rows($query_repair);
	
	// ...echo '<h1>'.$row_repair.'</h1>';
	
	
	//.......SERVICED ASSETS......//
	$sqlserviced="SELECT bid FROM assets WHERE assets.status='4' ORDER BY bid;";
	$query_serviced=mysqli_query($db,$sqlserviced);
	$row_serviced=mysqli_num_rows($query_serviced);
	
	//.. .echo '<h1>'.$row_serviced.'</h1>';
	
	//.......TRANSFER ASSETS......//
	$sqltransfer="SELECT bid FROM assets WHERE assets.transfer_to !='' ORDER BY bid;";
	$query_transfer=mysqli_query($db,$sqltransfer);
	$row_transfer=mysqli_num_rows($query_transfer);
	
	//..echo '<h1>'.$row_transfer.'</h1>';
	
	
	//.......TOTAL ADMINS......//
	$sqladmins="SELECT bid FROM admin ORDER BY bid;";
	$query_admins=mysqli_query($db,$sqladmins);
	$row_admins=mysqli_num_rows($query_admins);
	
	//..echo '<h1>'.$row_admins.'</h1>';
	
	
	//.......TOTAL EMPLOYEES......//
	$sqlemployees="SELECT username FROM employee ORDER BY username;";
	$query_employees=mysqli_query($db,$sqlemployees);
	$row_employees=mysqli_num_rows($query_employees);
	
	//..echo '<h1>'.$row_employees.'</h1>';
	
	
	
	//.......SUPPLIES FROM GOVERNMENT......//
	$sqlgovt="SELECT bid FROM assets WHERE assets.supplier='2' ORDER BY bid;";
	$query_govt=mysqli_query($db,$sqlgovt);
	$row_govt=mysqli_num_rows($query_govt);
	
	//..echo '<h1>'.$row_govt.'</h1>';
	
	
	//.......SUPPLIES FROM COMPANY PURCHASES......//
	$sqlcompany="SELECT bid FROM assets WHERE assets.supplier='3' ORDER BY bid;";
	$query_company=mysqli_query($db,$sqlcompany);
	$row_company=mysqli_num_rows($query_company);
	
	//..echo '<h1>'.$row_company.'</h1>';
	
	
	//.......SUPPLIES FROM DONATIONS......//
	$sqldonations="SELECT bid FROM assets WHERE assets.supplier='4' ORDER BY bid;";
	$query_donations=mysqli_query($db,$sqldonations);
	$row_donations=mysqli_num_rows($query_donations);
	
	//..echo '<h1>'.$row_donations.'</h1>';
	
	//.......DEPARTMENT  NULL......//
	$sqldepartnull="SELECT bid FROM employee WHERE employee.department='1' ORDER BY bid;";
	$query_departnull=mysqli_query($db,$sqldepartnull);
	$row_departnull=mysqli_num_rows($query_departnull);
	
	//..echo '<h1>'.$row_departnull.'</h1>';
	
	
	//.......DEPARTMENT OF ICT......//
	$sqlict="SELECT bid FROM employee WHERE employee.department='2' ORDER BY bid;";
	$query_ict=mysqli_query($db,$sqlict);
	$row_ict=mysqli_num_rows($query_ict);
	
	//..echo '<h1>'.$row_ict.'</h1>';
	
	
	//.......DEPARTMENT OF PLANNING......//
	$sqlplanning="SELECT bid FROM employee WHERE employee.department='3' ORDER BY bid;";
	$query_planning=mysqli_query($db,$sqlplanning);
	$row_planning=mysqli_num_rows($query_planning);
	
	//..echo '<h1>'.$row_planning.'</h1>';
	
	//.......DEPARTMENT OF COMMUNICATIONS......//
	$sqlcom="SELECT bid FROM employee WHERE employee.department='4' ORDER BY bid;";
	$query_com=mysqli_query($db,$sqlcom);
	$row_com=mysqli_num_rows($query_com);
	
	//..echo '<h1>'.$row_com.'</h1>';
	
	//.......DEPARTMENT OF HUMAN RESOURCE......//
	$sqlhr="SELECT bid FROM employee WHERE employee.department='5' ORDER BY bid;";
	$query_hr=mysqli_query($db,$sqlhr);
	$row_hr=mysqli_num_rows($query_hr);
	
	//..echo '<h1>'.$row_hr.'</h1>';
	
	//.......DEPARTMENT OF FINANCES......//
	$sqlfinance="SELECT bid FROM employee WHERE employee.department='6' ORDER BY bid;";
	$query_finance=mysqli_query($db,$sqlfinance);
	$row_finance=mysqli_num_rows($query_finance);
	
	//..echo '<h1>'.$row_finance.'</h1>';
	
	
	//.......DEPARTMENT OF PROCUREMENT......//
	$sqlproc="SELECT bid FROM employee WHERE employee.department='7' ORDER BY bid;";
	$query_proc=mysqli_query($db,$sqlproc);
	$row_proc=mysqli_num_rows($query_proc);
	
	//..echo '<h1>'.$row_proc.'</h1>';
	
	//.......DEPARTMENT OF AIR TRANSPORT......//
	$sqlair="SELECT bid FROM employee WHERE employee.department='8' ORDER BY bid;";
	$query_air=mysqli_query($db,$sqlair);
	$row_air=mysqli_num_rows($query_air);
	
	//..echo '<h1>'.$row_air.'</h1>';
	
	//.......DEPARTMENT OF FLIGHT OPERATIONS......//
	$sqlflight="SELECT bid FROM employee WHERE employee.department='9' ORDER BY bid;";
	$query_flight=mysqli_query($db,$sqlflight);
	$row_flight=mysqli_num_rows($query_flight);
	
	//..echo '<h1>'.$row_flight.'</h1>';
	
	//.......DEPARTMENT OF LICENSING & EXAMINATIONS......//
	$sqllicense="SELECT username FROM employee WHERE employee.department='10' ORDER BY bid;";
	$query_license=mysqli_query($db,$sqllicense);
	$row_license=mysqli_num_rows($query_license);
	
	//..echo '<h1>'.$row_license.'</h1>';
	
	
	//.......DEPARTMENT OF GENERAL DIRECTORS......//
	$sqldirectors="SELECT bid FROM employee WHERE employee.department='11' ORDER BY bid;";
	$query_directors=mysqli_query($db,$sqldirectors);
	$row_directors=mysqli_num_rows($query_directors);
	
	//..echo '<h1>'.$row_directors.'</h1>';
	
	
	//.......DEPARTMENT OF AVIATIOIN SECURITY......//
	$sqlsecurity="SELECT bid FROM employee WHERE employee.department='12' ORDER BY bid;";
	$query_security=mysqli_query($db,$sqlsecurity);
	$row_security=mysqli_num_rows($query_security);
	
	//..echo '<h1>'.$row_security.'</h1>';
	
	//.......DEPARTMENT OF GENERAL DIRECTORS......//
	$sqlground="SELECT bid FROM employee WHERE employee.department='13' ORDER BY bid;";
	$query_ground=mysqli_query($db,$sqlground);
	$row_ground=mysqli_num_rows($query_ground);
	
	//..echo '<h1>'.$row_ground.'</h1>';
	
	
	//.......DEPARTMENT OF AIRWORTHINESS......//
	$sqlairwor="SELECT bid FROM employee WHERE employee.department='13' ORDER BY bid;";
	$query_airwor=mysqli_query($db,$sqlairwor);
	$row_airwor=mysqli_num_rows($query_airwor);
	
	//..echo '<h1>'.$row_airwor.'</h1>';
	
	
	//.......DEPARTMENT OF AERONAUTICAL INFORMATION SERVICES......//
	$sqlaero="SELECT bid FROM employee WHERE employee.department='13' ORDER BY bid;";
	$query_aero=mysqli_query($db,$sqlaero);
	$row_aero=mysqli_num_rows($query_aero);
	
	//..echo '<h1>'.$row_aero.'</h1>';
	
	
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
	
 ?>

<div class="container" style="width: 400px; height: 200px margin-left: 700px; margin-top: 10px;">
	<canvas id="myChart" width="150" height="150" ></canvas>
</div>

<div class="containers"  style="width: 400px; height: 200px; margin-top: -370px;">
	<canvas id="myDraw" width="150" height="150"></canvas>
</div>

<div class="container" style="width: 400px; height: 200px; margin-left: 900px; margin-top: -200px;">
	<canvas id="myDraw2" width="150" height="100" style="margin-top: 50px;"></canvas>

</div>




<script>
	let myChart=document.getElementById('myChart').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let massPopChart=new Chart(myChart,{
		type: 'line',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Undefined','Disposed', 'Repaired','Serviced', 'Transfer'],
			datasets:[{
				label:'Total',
				data:[
					<?php echo $row_null ?>,
					<?php echo $row_dispose ?>,
					<?php echo $row_repair ?>,
					<?php echo $row_serviced ?>,
					<?php echo $row_transfer ?>
				
					
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
				text:'Line Chart ',
				fontSize:25,
	
			
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



<script>
	let myDraws=document.getElementById('myDraw').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopCharts=new Chart(myDraws,{
		type: 'polarArea',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Undefined','Disposed', 'Repaired','Serviced', 'Transfer'],
			datasets:[{
				label:'(Total)',
				data:[
					<?php echo $row_null ?>,
					<?php echo $row_dispose ?>,
					<?php echo $row_repair ?>,
					<?php echo $row_serviced ?>,
					<?php echo $row_transfer ?>
				
					
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
				text:'Company Assets Status(Polar Area)',
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




<script>
	let myDraws2=document.getElementById('myDraw2').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopChartings=new Chart(myDraws2,{
		type: 'horizontalBar',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Undefined','Disposed', 'Repaired','Serviced', 'Transfer'],
			datasets:[{
				label:'(Total)',
				data:[
					<?php echo $row_null ?>,
					<?php echo $row_dispose ?>,
					<?php echo $row_repair ?>,
					<?php echo $row_serviced ?>,
					<?php echo $row_transfer ?>
				
					
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
				text:'Horizontal Bar',
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



<div class="contain" style="width: 400px; height: 200px; margin-left: 0px; margin-top: 150px;">
	<canvas id="mySupply" width="150" height="100" style="margin-top: 50px;"></canvas>

</div>

<script>
	let mySupplies=document.getElementById('mySupply').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopChartingss=new Chart(mySupply,{
		type: 'bar',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Government', 'Company Purchases','Donations'],
			datasets:[{
				label:'(Total)',
				data:[
					<?php echo $row_employees ?>,
					<?php echo $row_govt ?>,
					<?php echo $row_company ?>,
					<?php echo $row_donations ?>,
				
				
					
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
				text:'Suppliers',
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




<div class="contain" style="width: 400px; height: 400px; margin-left: 450px; margin-top: -150px;">
	<canvas id="myDepartment" width="250" height="200" style="margin-top: -50px;"></canvas>

</div>

<script>
	let myDepart=document.getElementById('myDepartment').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopDepart=new Chart(myDepart,{
		type: 'bar',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Unstated', 'ICT','Planning','Communications','HR','Finance','Procurement'],
			
			datasets:[{
				label:'(Total)',
				data:[
					<?php echo $row_departnull ?>,
					<?php echo $row_ict ?>,
					<?php echo $row_planning ?>,
					<?php echo $row_com ?>,
					<?php echo $row_hr ?>,
					<?php echo $row_finance ?>,
					<?php echo $row_proc ?>,
					
				
				
					
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
				text:'Departments',
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




<div class="contain" style="width: 400px; height: 400px; margin-left: 850px; margin-top: -400px;">
	<canvas id="myDepartment2" width="250" height="230" style="margin-top: -50px;"></canvas>

</div>

<script>
	let myDepart2=document.getElementById('myDepartment2').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopDepart2=new Chart(myDepart2,{
		type: 'bar',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Air Transport','Flight Ops','Licensing & Exams','General Directors','Aviation Security','Ground Ops','Airworthiness','Aeronautical Services'],
			
			datasets:[{
				label:'(Total)',
				data:[
					
					<?php echo $row_air ?>,
					<?php echo $row_flight ?>,
					<?php echo $row_license ?>,
					<?php echo $row_directors ?>,
					<?php echo $row_security ?>,
					<?php echo $row_ground ?>,
					<?php echo $row_airwor ?>,
					<?php echo $row_aero ?>,
					
				
				
					
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
				text:'Departments',
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



<div class="contain" style="width: 400px; height: 400px; margin-left: 0px; margin-top: 90px;">
	<canvas id="myAssetCondition" width="250" height="230" style="margin-top: -50px;"></canvas>

</div>

<script>
	let myAssets=document.getElementById('myAssetCondition').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopAssets=new Chart(myAssets,{
		type: 'line',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
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
	
	
	
	
	
<div class="contain" style="width: 400px; height: 400px; margin-left: 0px; margin-top: -400px; margin-left:400px; ">
	<canvas id="myNumbers" width="250" height="230" style="margin-top: -50px;"></canvas>

</div>

<script>
	let myData=document.getElementById('myNumbers').getContext('2d');
	
	//Global options
	Chart.defaults.global.defaultFontFamily ='Lato';
	Chart.defaults.global.defaultFontSize= 18;
	Chart.defaults.global.defaultFontColor='#777';
		
	let PopNumbers=new Chart(myData,{
		type: 'line',//We can have as many charts as possible..bar,horizontalBar,pie,line,doughnut,radar,polarArea
		data:{
			labels: ['Admins','Employees'],
			
			datasets:[{
				label:'(Total)',
				data:[
					
					<?php echo $row_admins ?>,
					<?php echo $row_employees ?>,
					
					
				],
				//backgroundColor:'green'
				backgroundColor:[
				'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                
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
				text:'Numbers of Employees and Admins',
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
</html>




