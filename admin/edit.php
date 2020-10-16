<?php
include("connection.php");
include("navbar.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Admin Profile</title>
<style type="text/css">
	body{
		
	}
	.wrapper{
		margin-top: -35px;
		width: 900px;
		height: 440px;
		background-image: url(images/User-Registration.jpg);
		background-color: #801b0029;
	
		background-repeat: no-repeat;
	}
	.form-control{
		margin: 0px auto;
		margin-left: 580px;
		width: 250px;
		height: 26px;
		
	}
	.editform{
		margin-top: 50px;
	}
	.label{
		margin: 0px auto;
		margin-left: 580px;
		width: 250px;
		font-size: 14px
	}
	.btn{
		margin-left: 660px;
		margin-top: 15px;
	}
	.btn-success{
		margin-top: 5px;
		border: none;
	}
	label2{
		margin-left: 70px;
		font-size: 20px;
	}
	
	.selective{
		margin-left: 950px;
	}
	.back-button{
		margin-top: -50px;
		margin-left: -300px;
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

<div class="wrapper">

<div>
	<form method="post">
		
	</form>
</div>
 <div class="form-pack">
  <div class="editform">
  			
			
			
		<!............Create a php form to fetch all data to be posted to the profile.............-->
		<?php
			
				$sql="SELECT * FROM `admin` WHERE username='$_SESSION[logon]'";
				$result=mysqli_query($db,$sql) or die (mysqli_error());
				
				while($row = mysqli_fetch_assoc($result)){
					
					
					$fullnames=$row['fullnames'];
					
					$username=$row['username'];
					$password=$row['password'];
				
					$email=$row['email'];
					$contact=$row['contact'];
					
					
					?>
					
					
				<form method="post" name="" action="" enctype="multipart/form-data">
				
				<label2><b>Edit your Profile Information</b></label2>
				
				<div class="drop">
					<div class="selective">
					<div class="custom-select" style="width: 200px; font-size: 12px;">
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
				</div>
				</div>
				
				<input class="form-control" type="file" name="file" ><br>
				
						
				<label><span class="label label-primary" >Full Names</span></label> 
				<input class="form-control" type="text" name="fullnames" value="<?php echo $fullnames; ?>">
				<label><span class="label label-primary" >Username</span></label>
				<input class="form-control" type="text" name="username"  value="<?php echo $username; ?>">
				<label><span class="label label-primary" >Password</span></label>
				<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">
				
				<label><span class="label label-primary" >Email</span></label>
				<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
				<label><span class="label label-primary" >Contact</span></label>
				<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">
				<button class="btn btn-success" name="submit" type="submit">UPDATE
				
				
					
				</button>			
			</form>
					<?php
				}
			
	  	?>
	  			<div class="back-button">
	  				<form name="" action="" method="post">
	  					<button class="btn btn-info glyphicon glyphicon-backward" name="back">BACK</button>
	  				</form>
	  			</div>
	  			
	  			
	  		<?php	
	  			if(isset($_POST['back'])){
					?>
					<script>
	  				window.location="profile.php";
	  				</script>
					<?php
				}	
	  			
	  		?>	
	  	
	  	<?php
	  		if(isset($_POST['submit'])){
				
				
					move_uploaded_file($_FILES['file']['tmp_name'],"images/" .$_FILES['file']['name']);
				
					$department=$_POST['department'];
					$fullnames=$_POST['fullnames'];
					
					$username=$_POST['username'];
					$password=$_POST['password'];
				
					$email=$_POST['email'];
					$contact=$_POST['contact'];
					$pic=$_FILES['file']['name'];
			
				
				$sql1=("UPDATE admin SET pic='$pic', department='$_POST[department]',fullnames='$_POST[fullnames]',username='$_POST[username]',password='$_POST[password]',email='$_POST[email]',contact='$_POST[contact]' WHERE username='$_SESSION[logon]';");
				
				
				if(mysqli_query($db,$sql1)){
					?>
					<script type="text/javascript">
						alert("Saved Successfully");
						window.location="profile.php";
	  				</script>
					<?php
				}
					
			}
	  	?>
	</div>
	
</div>
</div>	


<footer style="height: 50px; background-color: green;">
				<p style="text-align: center; font-size:12px; color: white; margin-top: 30px; padding-top: 8px;">
					&nbsp; @Kenya Civil Aviation Authority<br>
					Phone: &nbsp; +254714020558
				</p>
	
	</footer>
 
 
 
 
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
</html>