<?php
include("navbar.php");
include("connection.php");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<style type="text/css">
	
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
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
	.form-control{
		width: 250px;
		margin: 0 auto;
		height: 23px;
	}	
	
	
	
	
	
	/*New Style for Masomo Page*/
	
	.wrapper{
		height: 400px;
		width: 400px;
		margin-left: 900px;
		margin-top: -100px;
	}
	.registersub{
		height: 400px;
		width: 250px;
		background-color: green;
		margin-left: 50px;
		margin-top: 40px;
		opacity: .3;
	}
	.studentmarks{
		margin-left: 500px;
		margin-top: -200px;
	}
	.editmarks{
	margin-left: 600px;
	margin-top: -150px;	
	}
	.reports{
	margin-left: 40px;
	margin-top: 35px;	
	}
	.wrapper{
		width: 920px;
		height: 420px;
		margin: 0 auto;
		
		background-color: #801b0029;
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

<body>

<div class="wrapper">
<br>
	<a href="print_admin_assets.php"  div class="registersubB">
	


<h4 style="margin-left: 60px; margin-bottom: 10px">DISPOSE ASSET</h4>
	<img src="images/logo14.png" alt="ADD SUBJECT"  title="DISPOSE ASSET" style="width: 200px;">
	
</div>


<div class="studentmarks" style="margin-top: -400px;">
<a href="assets_chart.php">
<h4 style="margin-left: 60px; margin-bottom: 10px">REPAIR ASSETS</h4>
	<img src="images/logo21.jpg" alt="ADD SUBJECT" title="REPAIR ASSET" style="width: 200px;">
</a>	
</div>



<div class="editmarks" style="margin-left: 850px;">
<a href="transfer.php">
<h4 style="margin-left: 60px; margin-bottom: 10px">TRANSFER ASSETS</h4>
	<img src="images/acc12.jpg" alt="EDIT SUBJECT" title="TRANSFER ASSETS" style="width: 180px; height: 130px;">
</a>	
</div>


<div class="reports" style="margin-left: 220px;">
<a href="retain.php">
<h4 style="margin-left: 20px; margin-bottom: 3px">MANTAIN ASSETS</h4>
	<img src="images/logo12.png" alt="EDIT SUBJECT" title="MANTAIN ASSETS" style="width: 180px; height: 130px;">
</a>	
</div>


</div>



<?php	
	 if(isset($_POST['backs'])){
		?>
			<script>
	  			window.location="dashboard_adfinal.php";
	  		</script>
		<?php
				}	
	  			
	  		?>	
	  		
	  		<div class="back-buttons" style="margin-top: -200px; margin-left: 1180px;">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-warning glyphicon glyphicon-backward" name="backs">DASHBOARD</button>
	  				</form>
	  		</div>
	  		<br><br><br><br><br><br><br><br><br><br>






<!--Modal for Student Marks.....-->
<!-- Html Code for modal form to select term -->


<!--Open the modal-->
<div class="modal" id="myModal">
<!--Open the modal content-->
<div class="modal-content" id="myContent">
<div class="modal-header">
<span class="close">&times;</span>
	<p>Welcome Admin</p>
</div>

	
	
	
	
	<h3><b><span>Add New Assets In the Company</span></b></h3>
		<form name="" action="" method="post" enctype="multipart/form-data">
		<div class="asset_image" style="margin-left: 450px; margin-top: 0px;">
			<input type="file" name="file">
		</div>
	
		
		
		<h4 style="color: red">Select the Department to Assign Assets </h4>
		
		<div class="custom-select" style="width: 200px; font-size: 12.5px;">
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
						
		

	
		<input class="form-control" type="text" name="bid" placeholder="Asset ID" required=""><br>
		<input class="form-control" type="text" name="name" placeholder="Asset Name" required=""><br>
		<input class="form-control" type="date" name="date" placeholder="Date Registered" required=""><br>
		
		<div class="supply" style="margin-left: 200px; width: 200px; height: 15px;">
			<select style="font-size: 13px" class=" form-control" name="supplier" size="1">
			<option style="font-size: 13px" value="1">Select Supplier</option>
			<option style="font-size: 13px" value="2">Government</option>
			<option style="font-size: 13px" value="3">Company Purchases</option>
			<option style="font-size: 13px" value="4">Donations</option>
		</select>
		</div>
		<br>
		<input class="form-control" type="text" name="status" placeholder="Status" required=""><br>
		<input class="form-control" type="text" name="quantity" placeholder="Quantity" required=""><br>
		
		<button class="btn btn-default" style="background-color: pink; margin-left: 280px;" name="submit" value="submit"  type="submit">REGISTER</button>
		
		
		
	
</form>
	
	
	
	<?php
	if(isset($_POST['submit'])){
		
		move_uploaded_file($_FILES['file']['tmp_name'],"images/" .$_FILES['file']['name']);
		
		$pic=$_FILES['file']['name'];
		
		$sql="INSERT INTO `assets`(`file`, `department`, `bid`, `name`, `date`, `supplier`, `status`, `quantity`) VALUES ('$pic', '$_POST[department]', '$_POST[bid]', '$_POST[name]', '$_POST[date]', '$_POST[supplier]', '$_POST[status]', '$_POST[quantity]');";
		
		
		mysqli_query($db,$sql);
		
		?>
		<script type="text/javascript">
						alert("Saved Successfully");
						window.location="assets.php";
	  	</script>
		<?php
	}
	?>
	
	
	
	<div class="modal-footer">
		<h4>@Admin</h4>
	</div>
</div>
	
</div>





	<script>
		//Get the modal
		var modal=document.getElementById('myModal');
		//Get the button that opens the modal
		var btn=document.getElementById("register_assets");
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

	




	
	
	
	
	
	





</body>
<div style="margin-top: 8px;">
	<?php
	include("footer.php");
?>
</div>
</html>