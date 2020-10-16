<?php
include 'navbar.php';
include 'connection.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>assets</title>


<style type="text/css">
	
	body {
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    transition: background-color .5s;
	
}
	.endpoint{
		position: fixed;
	}

.sidenav {
	
	margin-top: 65px;
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #222;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
	
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	
	.Welcome{
		color: white;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
		margin-left: 20px;
		font-size: 25px;
	}
	.scroll{
		background-color: #f3d4aff2;
		color: black;
		
		width: 1150px;
		height: 240px;
		overflow: auto;
		margin: 0px auto;
	}
	.scrolls{
		background-color: #f3d4aff2;
		color: black;
		
		width: 1150px;
		height: 270px;
		overflow: auto;
		margin: 0px auto;
	}
	.h:hover{
		background-color: coral;
	}
	th,td{
		margin: 0px auto;
		width: 8%;
		padding: 50px;
	}
	.approve{
	
		margin-left: 600px;
		width: 250px;
		
	}
	
	
		body {font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";}

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
		height: 30px;
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
  background-color: black;
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
  border: 1px solid transparent;
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
	
	
	
	
</style>
</head>

<body>

<!-----Adding the search option button----------My Side Navigation bar------->



<div class="approve" id="picktask">
 <img src="images/request1.jpg" style="width: 70px;height: 70px;">
 <p>Click to pick task</p>
</div> 
  
 <div class="container">
 	<div class="srchi" style="margin-top: -80px;">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter employee name.." required>
	<button class="btn btn-default" type="submit" name="srch" 
	style="background-color: hotpink" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>
 </div>
  


  <?php	
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="dashboard_empl.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		
	  	<?php	
	  			if(isset($_POST['backb'])){
					?>
					<script>
	  				window.location="tasksportal.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	  			
	  		
	  		
	  		
	  		
	  		
	
	  		<?php	
	  			if(isset($_POST['backc'])){
					?>
					<script>
	  				window.location="tasksportal.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	  		
  
  
  
  <!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
<p>Welcome...</p>
</div>
	
	<div class="modal-body">
	
	
		
	<h3 style="text-align: center"><b>Approve Request</b></h3><br>
 
 <form method="post" name="form1" action="">
 	<div style="margin-left: 150px;">
 			<input style="margin-left: 60px; width: 200px;" class="form-control" type="id" name="id" placeholder="Task Id" required=""><br>
			<input style="margin-left: 60px; width: 200px;" class="form-control" type="text" name="employee_name" placeholder="Task From" required="">
			<br>				
						<div class="custom-select" style="width: 200px; font-size: 14.5px; margin-left: 60px;">
						<select name="status" size="1">
						<option value="1">Click to Change Status</option>
						<option value="2">Wait shortly</option>
						<option value="3">Am Coming</option>	
						<option value="4">Solved</option>
						<option value="5">Assistance</option>
						
						
						</select>
						</div>
			<br><br>
					
			<br><br><br><br><br><br>			
		
		</div>	
 	
 		<button style="margin-left: 270px;" class="btn btn-info" name="picktask" type="submit">APPROVE</button>
 
 	
 </form>
		
	
	</div>
	
	
	
	<div class="modal-footer">
		<h5>@employee</h5>
	</div>
</div>
	
</div>

  
  
  

  
	<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		//Get the button that opens the modal
		var btn=document.getElementById("picktask");
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

	

  
  
   
<div class="container">
<?php
	$sqlconfirm="Select * from support;";
	$resultcheck=mysqli_query($db,$sqlconfirm);
	
	while($row=mysqli_fetch_assoc($resultcheck)){
	
if($_SESSION['department']=='1'){
						$mysection="Not-stated";
					}elseif($_SESSION['department']=='2'){
						$mysection="ICT";
					}elseif($_SESSION['department']=='3'){
						$mysection="Corporate Planning";
					}elseif($_SESSION['department']=='4'){
						$mysection="Corporate Communications";
					}elseif($_SESSION['department']=='5'){
						$mysection="Human Resource";
					}elseif($_SESSION['department']=='6'){
						$mysection="Finance";
					}elseif($_SESSION['department']=='7'){
						$mysection="Procurement";
					}elseif($_SESSION['department']=='8'){
						$mysection="Air Transport";
					}elseif($_SESSION['department']=='9'){
						$mysection="Flight Operations";
					}elseif($_SESSION['department']=='10'){
						$mysection="Licensing and Examinations";
					}elseif($_SESSION['department']=='11'){
						$mysection="General Directors";
					}elseif($_SESSION['department']=='12'){
						$mysection="Aviation Security";
					}elseif($_SESSION['department']=='13'){
						$mysection="Ground Operations";
					}elseif($_SESSION['department']=='14'){
						$mysection="Airworthiness";
					}elseif($_SESSION['department']=='15'){
						$mysection="Aeronautical Information Services";
					}	
	}
	?>
<h3 style="margin-top: 10px;"><b><p>Tasks at <?php echo $mysection ?></p></b></h3> 
<br>
   
<?php
	$c=0;
	if(isset($_SESSION['logon'])){
		if(isset($_POST['srch'])){
			
		 $q=mysqli_query($db,"SELECT * FROM support  WHERE employee_name LIKE '%$_POST[enter]%' 
		 AND assistance_from='$_SESSION[department]'");
	 
	
		
		if(mysqli_num_rows($q)==0)
		{
		?>
		
		<img src="images/acc7.jpg" style="width: 210px; height: 137px; margin-left: 460px;">
		
		
		<div>
			<br><br><br><br><br><br>
			
  
			
		
		<?php
			
			echo "Sorry! No Request from the employee made". mysqli_error($db);
		?>
		<div class="back-button" style="margin-left: 520px; margin-top: -30px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backb">BACK</button>
	  				</form>
	  			</div><br>
		
		<?php	
			
		}else{
			echo "<table class='table table-bordered table-hover' style='width:100%;'>";
	echo "<tr style='background-color: pink'>";
			
			echo "<th>";	echo "ID";				echo "</th>";
			echo "<th>";	echo "TASK FROM";				echo "</th>";
			echo "<th>";	echo "ASSET NAME";				echo "</th>";
			echo "<th>";	echo "URGENCY";					echo "</th>";
			echo "<th>";	echo "EMPLOYEE DEPARTMENT";				echo "</th>";
			echo "<th>";	echo "DATE POSTED";				echo "</th>";
			echo "<th>";	echo "TASK INFO";				echo "</th>";
			
			echo "<th>";	echo "APPROVE STATUS";			echo "</th>";
	
	echo "</tr>";		
	echo "</table>";
	?>
			<div class="scroll"> 
	<?php
			
			
	echo "<table class='table table-bordered' style='width:100%;' >";		
			
	while($row=mysqli_fetch_assoc($q)){	
		echo "<tr style='background-color: #befdfd'>";
		
		if($row['urgency']=='1'){
					$urgency="Not-stated";
					}elseif($row['urgency']=='2'){
						$urgency="Urgent";
					}elseif($row['urgency']=='3'){
						$urgency="Not-Urgent";
		}elseif($row['urgency']=='4'){
			$urgency="In-Control";
		};
		
		
		
		if($row['approve']=='1'){
			
					$approve="Un-Stated";
					}elseif($row['approve']=='2'){
						$approve="Wait shortly...";
					}elseif($row['approve']=='3'){
						$approve="Am Coming";
					}elseif($row['approve']=='4'){
						$approve="Solved";
					}elseif($row['approve']=='5'){
						$approve="Call for Assistance";
					}else{
						$approve="-";
				};
				
		
		
		
		if($row['mydepartment']=='1'){
						$mydep="Not-stated";
					}elseif($row['mydepartment']=='2'){
						$mydep="ICT";
					}elseif($row['mydepartment']=='3'){
						$mydep="Corporate Planning";
					}elseif($row['mydepartment']=='4'){
						$mydep="Corporate Communications";
					}elseif($row['mydepartment']=='5'){
						$mydep="Human Resource";
					}elseif($row['mydepartment']=='6'){
						$mydep="Finance";
					}elseif($row['mydepartment']=='7'){
						$mydep="Procurement";
					}elseif($row['mydepartment']=='8'){
						$mydep="Air Transport";
					}elseif($row['mydepartment']=='9'){
						$mydep="Flight Operations";
					}elseif($row['mydepartment']=='10'){
						$mydep="Licensing and Examinations";
					}elseif($row['mydepartment']=='11'){
						$mydep="General Directors";
					}elseif($row['mydepartment']=='12'){
						$mydep="Aviation Security";
					}elseif($row['mydepartment']=='13'){
						$mydep="Ground Operations";
					}elseif($row['mydepartment']=='14'){
						$mydep="Airworthiness";
					}elseif($row['mydepartment']=='15'){
						$mydep="Aeronautical Information Services";
					}else{
						$mydep="Null";
		}
				echo "<td>";	echo $row['id'];			echo "</td>";
				echo "<td>";	echo $row['employee_name'];			echo "</td>";
				
				echo "<td>";	echo $urgency;				echo "</td>";	
				echo "<td>";	echo $mydep;			echo"</td>";
				echo "<td>";	echo $row['date'];					echo"</td>";
				echo "<td>";	echo $row['message'];				echo"</td>";
				
				echo "<td>";	echo $approve;				echo"</td>";
				
		
		echo "</tr>";
	}
	
	echo "</table>";
	
	?>
	</div>	
	
	<div class="back-button" style="margin-left: 1120px; margin-top: -350px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backb">BACK</button>
	  				</form>
	  			</div><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php
		}
			
		}else{
		?>
			<div class="back-button" style="margin-left: 1120px; margin-top: -89px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="back">BACK</button>
	  				</form>
	  			</div>
  		<br>
			<?php
			
		
		$sql=( "SELECT * FROM support WHERE assistance_from='$_SESSION[department]'");
		
		$res=mysqli_query($db,$sql);
			
			
			
			
			echo "<table class='table table-bordered' style='width:100%;'>";
			echo "<tr style='background-color: pink'>";
			
			echo "<th>";	echo "ID";				echo "</th>";
			echo "<th>";	echo "TASK FROM";				echo "</th>";
			
			echo "<th>";	echo "URGENCY";				echo "</th>";
			echo "<th>";	echo "EMPLOYEE DEPARTMENT";					echo "</th>";
			echo "<th>";	echo "DATE POSTED";				echo "</th>";
			echo "<th>";	echo "TASK INFO";				echo "</th>";
			
			echo "<th>";	echo "APPROVE STATUS";				echo "</th>";
			
		
			echo "</tr>";
			echo "</table>";
			?>
			<div class="scrolls"> 
			<?php
			
			
			echo "<table class='table table-bordered' style='width:100%;' >";
			while($row=mysqli_fetch_assoc($res)){
			
			
				
				echo "<tr style='background-color: #befdfd'>";
				if($row['urgency']=='1'){
					$state="Not-stated";
					}elseif($row['urgency']=='2'){
						$state="Urgent";
					}elseif($row['urgency']=='3'){
						$state="Not-Urgent";
		}
				elseif($row['urgency']=='4'){
						$state="In-Control";
		};
				
			
				if($row['approve']=='1'){
			
					$approve="Un-Stated";
					}elseif($row['approve']=='2'){
						$approve="Wait shortly...";
					}elseif($row['approve']=='3'){
						$approve="Am Coming";
					}elseif($row['approve']=='4'){
						$approve="Solved";
					}elseif($row['approve']=='5'){
						$approve="Call for Assistance";
					}else{
						$approve="-";
				};
				
				
				if($row['mydepartment']=='1'){
						$mydep="Not-stated";
					}elseif($row['mydepartment']=='2'){
						$mydep="ICT";
					}elseif($row['mydepartment']=='3'){
						$mydep="Corporate Planning";
					}elseif($row['mydepartment']=='4'){
						$mydep="Corporate Communications";
					}elseif($row['mydepartment']=='5'){
						$mydep="Human Resource";
					}elseif($row['mydepartment']=='6'){
						$mydep="Finance";
					}elseif($row['mydepartment']=='7'){
						$mydep="Procurement";
					}elseif($row['mydepartment']=='8'){
						$mydep="Air Transport";
					
					}elseif($row['mydepartment']=='9'){
						$mydep="Licensing and Examinations";
					}elseif($row['mydepartment']=='10'){
						$mydep="General Directors";
					}elseif($row['mydepartment']=='11'){
						$mydep="Flight Operations";
					}elseif($row['mydepartment']=='12'){
						$mydep="Aviation Security";
					}elseif($row['mydepartment']=='13'){
						$mydep="Ground Operations";
					}elseif($row['mydepartment']=='14'){
						$mydep="Air Worthiness";
					}elseif($row['mydepartment']=='15'){
						$mydep="Aeronautical Information Services";
					}else{
						$mydep="Null";
		}
				echo "<td>";	echo $row['id'];			echo "</td>";
				echo "<td>";	echo $row['employee_name'];			echo "</td>";
				
				echo "<td>";	echo $state;				echo "</td>";	
				echo "<td>";	echo $mydep;				echo"</td>";
				echo "<td>";	echo $row['date'];			echo"</td>";
				echo "<td>";	echo $row['message'];		echo"</td>";
				
				echo "<td>";	echo $approve;		echo"</td>";
				
				
				echo "</tr>";
				
			}
			echo "</table>";	
			
		}
		
			
		}else{
		echo("You need to login first");
	}
	
	
		
	
	
?>





</div>

	


	<br><br>
	</div>
	
	
	
	
	
	
	
	<?php
if(isset($_POST['picktask'])){
	$count=0;
	$check="SELECT * FROM support WHERE  employee_name='$_POST[employee_name]' AND assistance_from='$_SESSION[department]' ;";
	$res_check=mysqli_query($db,$check);
	$count=mysqli_num_rows($res_check);
	
		if($count==0){
			?>
				<script type="text/javascript">
					alert("Unable to Approve");
					window.location="tasksportal.php";
				</script>
			<?php
		}else{
			
		
	
	mysqli_query($db,"UPDATE support SET approve = '$_POST[status]' WHERE employee_name='$_POST[employee_name]'
	AND assistance_from='$_SESSION[department]' AND id='$_POST[id]';");
	
			
	mysqli_query($db,"UPDATE support SET served_by = '$_SESSION[logon]' WHERE employee_name='$_POST[employee_name]'
	AND assistance_from='$_SESSION[department]' AND id='$_POST[id]';");
	
	mysqli_query($db,"UPDATE support SET support.urgency = '4' WHERE employee_name='$_POST[employee_name]'
	AND assistance_from='$_SESSION[department]' AND id='$_POST[id]';");
	
	
	?>
	<script type="text/javascript">
		alert("Status Changed Successfully");
		window.location="tasksportal.php";
	</script>
	<?php
}}
?>


</body>

<div class="endpoint" style="margin-top: -75px;">
		<?php
			include("footer.php");
		?>
</div>

</html>