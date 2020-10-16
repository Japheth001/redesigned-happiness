<?php
include 'navbar.php';
include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width ,initial-scale=1">
<title>assets</title>


<style type="text/css">
	
	.srchi{
	padding-left: 500px;
	
	}
	body {
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
    transition: background-color .5s;
	
	
	
}
	.wrapper{
		background-color: #f3ecf2;
		width: 1200px;
		height: 350px;
		margin:  0px auto;
		margin-top: 50px;
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
	.h:hover{
		background-color: orange;
		height: 50px;
	}
	.scroll{
		width: 100%;
		height: 200px;
		overflow: auto;
	}
	th,td{
		padding: 25%;
		width: 15%;
		margin: 0 auto;
	}
	tr{
		width: 15px;
	}
	.back-button{
		margin-left: 1130px;
		margin-top: 10px;
	}
	.back-buttons{
		margin-left: 1100px;
		margin-top: -25px;
	}
	.back-buttons{
		margin-left: 570px;
		margin-top: 10px;
	}
	.footer{
		height: 50px;
		background-color: green;
		margin-top: 0px; 
		padding-top: 8px;
		 margin-left: -70px;
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
	
	
	
	
	
	
	/*New Style for Modal*/
	
	body {font-family: Arial, Helvetica, sans-serif;}

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
    padding: 1px 8px;
    background-color: #5cb85c;
    color: white;
}
	.form-control{
		width: 250px;
		margin: 0 auto;
		height: 28px;
	}	
	
	button{
		border: none;
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

<!-----Adding the search option button----------------->

<div class="wrapper">
<div class="srchi">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter asset name.." required>
	<button class="btn btn-default" type="submit" name="srch" 
	style="background-color: hotpink" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>


<div class="prints" style="margin-left: 1150px; margin-top: -50px;">
	<form name="" action="" method="post" >
	<a href="printserviced.php">
	<img src="images/print4.jpg" style="margin-top: -15px; width: 90px; height: 90px;">
	</a>
	</form>
</div>




<div class="container">

	<h3 style="margin-top: -50px;">Serviced Assets Ready for use</h3><br>

	


<?php
	if(isset($_POST['srch']))
	{
	 $q=mysqli_query($db,"SELECT * FROM assets
WHERE  status='4' AND name LIKE '%$_POST[enter]%'");
	 
		
		if(mysqli_num_rows($q)==0)
		{
		?>
		<br><br>
		<img src="images/acc7.jpg" style="width: 210px; height: 200px; margin-left: 490px;">
		<br>
		
		<div>
		<?php
			echo "Sorry! No asset found". mysqli_error($db);
		?>
		</div>
		
			
		<?php
			
		}else{
			echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "ID"	;			echo "</th>";
	
	echo "<th>";			echo "NAME"	;			echo "</th>";
	echo "<th>";			echo "DATE REGISTERED"	;			echo "</th>";
	echo "<th>";			echo "QUANTITY"	;		echo "</th>";
	
			
	echo "</table>";
		?>
		<div class="scroll">
		<?php
	echo "<table class='table table-bordered table-hover'>";
	
			
	while($row=mysqli_fetch_assoc($q)){
		echo "<tr>";
		echo "<tr>";
		echo "<td>";		echo $row['bid'];			echo "</td>";
		
		
		echo "<td>";		echo $row['name'];			echo "</td>";
		echo "<td>";		echo $row['date'];			echo "</td>";
		echo "<td>";		echo $row['quantity'];		echo "</td>";
		
		
		
		echo "</tr>";
	}
			
	echo "</table>";
	
		}
	
		
		
		?>
		</div>
		<?php	
	  			if(isset($_POST['backs'])){
					?>
					<script>
	  				window.location="assets.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		<div class="back-buttons" style="margin-top: 55px; margin-left: 580px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backs">BACK</button>
	  				</form>
	  			</div>
		<br>
		<?php
		
		
		
			
		}else{
		

		
		?>
		
		<?php	
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="mantain_dash.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  		
	  		<div class="back-button" style="margin-left: 1050px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="back">BACK</button>
	  				</form>
	  			</div>
		
		<?php
		
		
		?>
		<br>
		<?php
	
		/*-----Else if button is not pressed----*/
		$res=mysqli_query($db,"SELECT * FROM `assets` WHERE status='4' ORDER BY `assets` .`id` DESC ;");
	
	echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "ID"	;			echo "</th>";
	
	echo "<th>";			echo "NAME"	;			echo "</th>";
	echo "<th>";			echo "DATE REGISTERED"	;			echo "</th>";
	echo "<th>";			echo "QUANTITY"	;		echo "</th>";
	
	
	echo "</table>";
		?>
		<div class="scroll">
		<?php
	echo "<table class='table table-bordered table-hover'>";
	while($row=mysqli_fetch_assoc($res)){
		echo "<tr>";
		echo "<td>";		echo $row['bid'];			echo "</td>";
		

		
		echo "<td>";		echo $row['name'];			echo "</td>";
		echo "<td>";		echo $row['date'];			echo "</td>";
		echo "<td>";		echo $row['quantity'];		echo "</td>";
		
		
		
		echo "</tr>";
		
	
	}
	echo "</table>";
	?>
	</div>
	
	<div>
		
		<div class="back-button" style="margin-left: 500px; margin-top: 0px;">
	  				
	  					<button class="btn btn-warning glyphicon glyphicon-plus" name="disposed" id="page">ADD_ITEM</button>
	  				
	  	</div>
	</div>
		
	<?php
	}
	?>
	
	
	
	<?php
?>




			
			
		
		
</div>




	
</div>

	
    
    		 

<!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
	<p>Welcome Admin</p>
</div>
	
	<div class="modal-body">
	<form method="post" action="" name="" >	
	<h3 style="text-align: center; font-size: 20px; color: red; font-size: 30px;"><b><span class="glyphicon glyphicon-car"><caption>Serviced_Assets</caption></span></b></h3>
	
		<br><br><br>
		<div style="margin-left: 150px;">
			<input style="margin-left: 60px; width: 200px;" class="form-control" type="text" name="productid" placeholder="Product ID" required="">
			<br>				
						<div class="custom-select" style="width: 200px; font-size: 14.5px; margin-left: 60px;">
						<select name="nature" size="1">
						<option value="1">Click to Change Status</option>
						<option value="2">Dispose</option>
						<option value="3">Repair</option>	
						<option value="4">Serviced Assets</option>
						
						
						
						</select>
						</div>
			<br><br>
			<button class="btn btn-success" type="submit" name="servicebtn" style="width: 100px; height: 30px; margin-left: 300px; margin-top: 10px; background-color: olivedrab" >ADD</button>			
			<br><br><br><br><br><br>			
		
		</div>		
						
		
	</form>
	</div>
	
	
	
	<div class="modal-footer">
		<h5>@Admin</h5>
	</div>
</div>
	
</div>

	 
	 	 
	 	 

    
	<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		
		//Get the button that opens the modal
		var btn=document.getElementById("page");
		
		
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
if(isset($_POST['servicebtn'])){
	mysqli_query($db,"UPDATE assets SET status = '$_POST[nature]' WHERE bid='$_POST[productid]';");
	mysqli_query($db,"UPDATE assets SET quantity=quantity+1 WHERE bid='$_POST[productid]';");
	
	?>
	<script type="text/javascript">
		alert("Status Changed Successfully");
		window.location="retain.php";
	</script>
	<?php
}
?>










	
</body>
<div style="margin-top: 30px;">
	<?php
	include("footer.php");
?>
</div>

</html>