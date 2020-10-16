<?php
include 'connection.php';
include 'navbar.php';
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, device-scale=1">
<!--The device to adjust display depending on the device using-->
<link rel="stylesheet" type="text/css" href="style.css">
<!--Implement bootstrap here.........-->
<!-- Latest compiled and minified CSS -->
<!-- jQuery library -->
<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
<link href="../css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="../js/jquery-1.11.3.min.js"></script>
<!-- Latest compiled JavaScript -->
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script src="../js/bootstrap-3.3.7.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Kcaa Inventory Managemant System</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<style type="text/css">
	
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
	
	
	

	
	
	
	
	
	
	
	
	
	
	
/* Other styles used*/
	
	
	.boxn btn-default{
		cursor: pointer;
		border: none;
		opacity: 0.9;
		color: white;
		text-align: center;
		margin-left: 300px;
	}
	.form-control{
		background-color: #ddd;
		background: #f1f1f1;
		width: 200px;
		height: 30px;
		margin: 0 auto;
	}
	
	
	
	
	
	
	/*Style for Custom Drop-down*/
	 /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 0.5px 0.5px;
  border: 2.5px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
} 
	
	
	
	
	
	
	
	.box1{

	float: inherit;
	margin: 20px auto;
	height: 400px;
	width: 350px;
	color: white;
	background-color: red;
	word-spacing: inherit;
	padding: auto 5px;
	opacity: .8 ;
	
}
	label{
		font-size: 18px;
		font-weight: 600;
	}
	
	
	
	/*---Resposnsive Login Style----*/
	.boxn{
		margin-top: 40px;
		width: 400px;
		padding;40px;
		top: 50%;
		left: 50%;
		background: #367349;
		text-align: center;
		position: absolute;
		transform: translate(-50%,-50%);
			
	}
	.boxn input[type ="text"], .boxn input[type ="password"]{
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #3498db;
		padding: 14px 10px;
		width: 200px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
	}
	.boxn h1{
		color: white;
		text-transform: uppercase;
		font-weight: 500px;
	}
	.boxn input[type ="text"]:focus, .boxn input[type ="password"]:focus{
		width: 280px;
		border-color: #2ecc71;
	}
	
	.boxn input[type="submit"]{
	border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: none solid #2ecc71;
		padding: 18px 50px;
		
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;	
		cursor: pointer;
	}
	.boxn input[type="submit"]:hover{
		background:  #2ecc71
	}
</style>

<body style="padding-top: 0px">


<section>
	<div class="log_img">
	
		<br><br><br><br>
			
			
			
			
			<h1 style="color: white; text-align: center; font-size: 25px">Kcaa Inventory System</h1>
			<h1 style="text-align: center; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">Login Form</h1>
	
		<form class="boxn" name="" action="" method="post"> 
		
		<h1 style="color: white; text-align: center; font-size: 25px">Kcaa Inventory System</h1>
			<h1 style="text-align: center; font-size: 20px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">Login Form</h1>
		<b><p style="padding-left: 50px;font-size: 15; font-weight: 700; color: white;">Login as</p></b>
		
		<input type="radio" style="margin-left: 50px; width: 18px;color: white;" name="user" value="admin" id="admin">
		<label style="color: white" for="admin">Admin</label>
		<input type="radio" style="margin-left: 50px; width: 18px; color: white;" name="user" value="employee" id="employee" checked>
		<label style="color: white" for="employee">Employee</label>
		
		<br>
			
			<div class="login">
				<input class="form-control" type="text" name="username" placeholder="Username" required >
				<input class="form-control" type="password" name="password" placeholder="Password" required>
				
				
				<input class="btn btn-info" type="submit" name="submit" value="Login" style="width:40px; color: black; color:white; text-align: center; margin: 0 auto;"   >
		
				
				<br><br>
				<p style="color: white">
					<a style="color: white; width: 50px"   href="update_password.php">Forgot password ?</a><br><br>
					
					<div id="register_employee">
					
						New to this website ? &nbsp; &nbsp; <a style="color: white">Sign-Up</a>
					</div>
					
				</p>
			</div>
			
		</form>
		
	
	</div>			
					
					
</section>


<!--Modal for employee Marks.....-->
<!-- Html Code for modal form to select term -->


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
	<h3 style="text-align: center; font-size: 20px; color: orangered; font-size: 30px;"><b><span class="glyphicon glyphicon-car"><caption>Employee_Registration_Form</caption></span></b></h3>
	
	
						
						<div class="custom-select" style="width: 200px; font-size: 13px;">
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
						
						
						
						<input class="form-control" type="date" name="date" placeholder="Date" reqired><br>
						<input class="form-control" type="text" name="fullnames" placeholder="Full Names" reqired><br>
						
						<input class="form-control" type="text" name="username" placeholder="Username" required><br>
						<input class="form-control" type="password" name="password" placeholder="Password" required><br>
						<input class="form-control" type="text" name="admission" placeholder="Employee Number" required><br>
						<input class="form-control" type="email" name="email" placeholder="Email" required><br>
						
						<input class="form-control" type="number" name="contact" placeholder="Phone Number" required><br>
						
						
						<input class="btn btn-default" type="submit" name="submit_reg" value="Sign Up" style="width:70px; color: black; background-color: salmon; margin-left: 270px;">

		
		
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
		var btn=document.getElementById("register_employee");
		
		
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
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);</script>

	


<?php
/*Check if the button is pressed*/
if (isset($_POST['submit'])){
	
	if($_POST['user']=='admin'){
		$count=0;
	$res=mysqli_query($db,"select * from admin where username='$_POST[username]' && password='$_POST[password]';");
	
	/*This function will count how many rows are there in our result*/
	$res1=mysqli_query($db,"select * from admin");
	
	 $row=mysqli_fetch_assoc($res1);
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
		Username and password does not match</strong>
		
	</div>
	}
	<?php
		}else{
			
			/*...........................If Username and password matches.............................*/
		
			
			 $_SESSION['logon']=$_POST['username'];
			$_SESSION['pic']=$row['pic'];
			 $_SESSION['password']=$row['password'];
			$_SESSION['department']=$_POST['department'];
			?>
			
			<script>
					window.location="admin/dashboard_adfinal.php";
				
			</script>
			}
			<?php
		}
		
		
	}else{
		
	
	
	$count=0;
	$res=mysqli_query($db,"select * from employee where username='$_POST[username]' && password='$_POST[password]';");
	
	/*This function will count how many rows are there in our result*/
	$res1=mysqli_query($db,"select * from employee");
	
	$row=mysqli_fetch_assoc($res1);
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
		Username and password does not match</strong>
		
	</div>
	}
	<?php
		}else{
			 $_SESSION['logon']=$_POST['username'];
			 $_SESSION['pic']=$row['pic'];
	?>
			 
			
			<script>
					window.location="employee/dashboard_empl.php";
				
			</script>
			}
			<?php
		}
		}
	}

	
	
?>





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
	</script>
		
		
	
			
	<?php
		$_SESSION['department']=$_POST[department];
			
		}else{
				
	?>
	<script>
	alert("The Username exists,Create new one");
	</script>
}
		<?php		 
			
		}
	}
	
	?>



	
</body>
</html>
























