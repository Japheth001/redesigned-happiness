<?php
	session_start();
	include "connection.php";
?>
<!doctype html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min">
<meta charset="utf-8">
<title>Sidebar Dashboard Template</title>
</head>

<style type="text/css">

	
	
	body{
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif"
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
		background: #4a0606;
		margin-top: 70px;
		padding-top: 30px;
		position: fixed;
		left: 0px;
		width: 250px;
		height: 100px%;
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
		line-height: 60px;
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
		height: 100vh;
		transition: 0.5s;
		transition-property: color;
	}
	#check:checked~.content{
		margin-left: 60px;
	}
	#check{
		display: none;
	}
	
	
	
	
	/*Style for the email*/
	
	
	
	.main{
		
		width: 420px;
		margin: -200px auto;
		border-radius: 10px;
		border: 5px solid #000000;
		border-left: 40px solid  aquamarine;
		box-shadow: 1px 2px 10px #555;
		margin-left: -10px;
		margin-top: -110px;
	}
	.info{
		
		width: 90%;
		background-color:aquamarine;
		padding: 0.5px;
		text-shadow: 1px 1px 1px #222;
		color: black;
		font-size: 20px;
	}
	.form-box{
		background-color: #eee;
		padding: 10px;
	}
	label{
		color: hotpink;
	}
	.inp,.msg-box{
		width: 80%;
		padding: 8px;
		margin-top: 4px;
		margin-bottom: 5px;
		border-radius: 5px;
		border: 2px solid #219E02;
		font-weight: bold;
		color: black;
		border-right: 15px solid #219E02;;
		border-left: 15px solid #219E02;
		
	}
	.inp:focus,.msg-box:focus{
		outline: none;
		border: 2px solid #668B04;
		border-right: 15px solid  #668B04;
		border-left: 15px solid  #668B04;
	}
	.sub-btn{
		width: 50%;
		padding: 10px;
		margin-left: 75px;
		border-radius: 10px;
		margin-top: 5px;
		border: none;
		background: linear-gradient(#800000, #668B04);
		opacity: 0.8;
		transition: all ease-out 0.2s;
	}
	.sub-btn:focus{
		outline: none;
	}
	@media(max-width;720px){
		.main{
			width: 70%;
		}
	}
	
	
	
	
	
	
	
		/*New Style for Modal*/
	
	body {font-family: Arial, Helvetica, sans-serif;position: fixed}

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

.modal-body {
	padding: 2px 16px;
	line-height: 12px;
	}

.modal-footer {
    padding: 1px 8px;
    background-color: #5cb85c;
    color: white;
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
		
		<div class="right_area">
			<a href="logout.php" class="logout-btn">Logout</a>
		</div>
	</header>
	<!--.....................................Header area end.............................-->
	
	<!-----------------------------Sidebar Start...........................................-->
	<div class="sidebar">
		<center>
		
			<?php
				$sql3=("SELECT pic FROM employee WHERE username='$_SESSION[logon]'");
				$result=mysqli_query($db,$sql3);
				
				while($q=mysqli_fetch_assoc($result)){
					echo("<table>");
					echo "<tr>";
					
				
					echo "<img class='img-circle profile-image' height=60 width=70 src='images/".$q['pic']."'>";
				}
				
			?> <h4><?php echo "Welcome" .""." ".$_SESSION['logon'];?></h4 <?php 
				echo "</tr>";
				echo("</table>");	
				
			?>
			
			
				
		</center>
		<a href="dashboard_empl.php"><i class="fa fa-desktop"><span>DashBoard</span></i></a>
			<a href="sprofile.php"><i class="fa fa-picture-o"><span>Profile</span></i></a>
			<a href="assets_dash.php"><i class="fa fa-table"><span>My Assets</span></i></a>
			<a href="report.php"><i class="fa fa-th"><span>Assistance</span></i></a>
			<div id="portal">
			<a href="#"><i class="fa fa-info-circle"><span>Service Portal</span></i></a>
			</div>
			<a href="phpmailer/mail.php"><i class="fa fa-sliders-h"><span>Settings</span></i></a>
			
	</div>
	<!-----------------------------Sidebar Ends......................................................-->
	<div class="content">
		
		
		
	<!-----------------------------EMail Code begins here...........................................-->	
		
	
			
			
			
			
			
				<canvas id="canvas" width="180" height="180"
style="background-color:#333; margin-right: 20px;float: right; margin-top: 85px;">
</canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.80
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
		
		
		<br><br>
		
		
		
		
	
	
		
<?php
/*-------------------------------------
	$to=$_POST['email'];
	$from='mumokimeu003@gmail.com';
	
	$msg=$_POST['msg'];

		
	if(isset($_POST['submit'])){
		
	if(mail($to, $from, $msg)){
		echo "Email sent";
	}else{
		echo "Not sent";
	}
	}
----------------------------------------*/

?>
		
<?php
		
?>
<div class="container admin_number " style="background-color: #36a71a; width: 200px; height: 115px; margin-left: 850px; margin-top: 280px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Issued Assets </div>
<div class="fa fa-rocket" style="font-size: 60px; margin-top: 10px;margin-left: 70%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$sql4="SELECT approve FROM issue_asset WHERE approve='Yes' AND username='$_SESSION[logon]' ORDER BY approve ;";
	$query_run=mysqli_query($db,$sql4);
	
	$row=mysqli_num_rows($query_run);
	
	echo '<h1>'.$row.'</h1>';
?>	
</div>
</div>






<div class="container admin_number" style="background-color: #ce7dc0; width: 200px; height: 115px; margin-left: 850px; margin-top: 40px;">
	<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color: white; font-size: 20px;">Requested Assets</div>
<div class="fa fa-bolt" style="font-size: 60px; margin-top: 10px;margin-left: 65%"></div>
<div style="margin-top: -35%; margin-left: 30%">
<?php
	$sqlrequested="SELECT approve FROM issue_asset WHERE approve='' AND username='$_SESSION[logon]' ORDER BY approve ;";
	$query_requested=mysqli_query($db,$sqlrequested);
	$row_requested=mysqli_num_rows($query_requested);
	
	//..echo '<h1>'.$row_requested.'</h1>';
	
	echo '<h1>'.$row_requested.'</h1>';
?>	
</div>
</div>


		
<?php	
		
		
		

//.........................REQUESTED ASSETS......//
	$sqlrequested="SELECT approve FROM issue_asset WHERE approve=''  AND username='$_SESSION[logon]' ORDER BY approve ;";
	$query_requested=mysqli_query($db,$sqlrequested);
	$row_requested=mysqli_num_rows($query_requested);
	
	//..echo '<h1>'.$row_requested.'</h1>';
	
	
	//.........................ISSUED ASSETS..................//
	$sqlissued="SELECT approve FROM issue_asset WHERE approve='yes'  AND username='$_SESSION[logon]' ORDER BY approve  ;";
	$query_issued=mysqli_query($db,$sqlissued);
	$row_issued=mysqli_num_rows($query_issued);
	
	//..echo '<h1>'.$row_issued.'</h1>';
	
	
	
	//.......................RETURNED ASSETS......//
	$var1='<p style="color:pink; background-color:BLUE">RETURNED</p>';
	$sqlreturned="SELECT approve FROM issue_asset WHERE approve='$var1' AND username='$_SESSION[logon]' ORDER BY approve ;";
	$query_returned=mysqli_query($db,$sqlreturned);
	$row_returned=mysqli_num_rows($query_returned);
	
	//..echo '<h1>'.$row_returned.'</h1>';
	
	
	//.......................EXPIRED ASSETS......//
	$var='<p style="color:yellow; background-color:red">EXPIRED</p>';
	$sqlexpired="SELECT approve FROM issue_asset WHERE approve='$var' AND username='$_SESSION[logon]' ORDER BY approve ;";
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



<div class="wrappers" style="background-color: white; width: 370px; margin-left: 50px;height:360px;margin-top:-515px;  ">
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
				text:'<?php echo $_SESSION['logon'] ?> assets status',
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
	
	
	
			
					
	
<div class="wrappers" style="background-color: white; width: 330px; margin-left: 500px;height:360px;margin-top:-498px;  ">
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
	
					


	</div>
	
	
	
	
	
	
	<!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
	<p>Welcome and create an account with us...</p>
</div>
	
	<div class="modal-body">
	<form method="post" action="" name="" >	
	<h3 style="text-align: center; font-size: 20px; color: orangered; font-size: 30px;"><b><span class="glyphicon glyphicon-car"><caption>Attachee-Intern Portal</caption></span></b></h3>
	
	
						
						<div class="custom-select" style="width: 70px; font-size: 13px;">
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
						
						
						<div style="margin-top: 200px;margin-left: 300px; auto">
						<div style="margin-top: -150px;">
						<label>Enter Attachee or Intern ID</label><br><br>
						<input class="form-control" type="text" name="taskid" placeholder="" required><br>
						</div>
						</div>
						<br><br>
						<input class="btn btn-default" type="submit" name="taskbtn" value="ENTER" style="width:70px; color: black; background-color: salmon; margin-left: 350px;margin-top: -200px;">

	<br><br><br><br><br><br><br><br><br><br><br><br>
		
	</form>
	</div>
	
	
	
	<div class="modal-footer">
		<h5>@kcaaemployee</h5>
	</div>
</div>
	
</div>





<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		
		//Get the button that opens the modal
		var btn=document.getElementById("portal");
		
		
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
/*Check if the button is pressed*/
if (isset($_POST['taskbtn'])){
	
	$count=0;
	$res=mysqli_query($db,"select * from employee where Job_Id='$_POST[taskid]' AND username='$_SESSION[logon]';");
	
	/*This function will count how many rows are there in our result*/
	
	$row=mysqli_fetch_assoc($res);
	 $count=mysqli_num_rows($res);
		if($count==0){
		?>
		
		<!--
		 <script>
	alert("Username and password does not match");
			 
	</script>
	
	-->
	
	<div class="alert alert-danger" style="width=10px; margin-right: 800px; margin-top: -90px; padding-right: 50px">
		<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Job Id does not match</strong>
		
	</div>
	}
	<?php
		}else{
			 $_SESSION['department']=$_POST['department'];
			 
	?>
			 
			
			<script>
					window.location="tasksportal.php";
				
			</script>
			}
			<?php
		}
	}

	
	
?>


</body>
</html>