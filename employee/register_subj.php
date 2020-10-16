<?php
include("connection.php");
include("navbar.php");
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
</head>
<style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
	.group3{
		margin-left: 400px;
		margin-top: -500px;
	}
	.group{
		
		margin: 0 auto;
		width: 740px;
		height: 500px;
		background-color: palegreen;
		opacity: .9;
	}
	.section-color{
		margin: 0 auto;
		margin-top: 0px;
		width: 900px;
		height: 500px;
		background-color: #00ff9ca3;
	}
	
</style>
<body>
<!--
<form action="" name="" method="post"> 
<h1>Custom Checkboxes</h1>
<label class="container">One
  <input type="checkbox" checked="checked" name="chk[]" value="1">one;
  <span class="checkmark"></span>
</label>
<label class="container">Two
  <input type="checkbox" name="chk[]" value="2">two;
  <span class="checkmark"></span>
</label>
<label class="container">Three
  <input type="checkbox" name="chk[]" value="3">three;
  <span class="checkmark"></span>
</label>
<label class="container">Four
  <input type="checkbox" name="chk[]" value="4">four;
  <span class="checkmark"></span>
</label>

<button type="submit" name="Submit" style="color: palevioletred" value="Submit">SUBMIT</button>
</form>

-->
<div class="section-color">
	<div class="group">
	<form method="post" action="" name="">
<h3 style="font-size: 20px;">GROUP 1</h3>
<label>MATHS</label><input style="margin-left: 52px;" type="checkbox" id="checkItem" name="check[]" value="001"><br>
<label>ENGLISH</label><input style="margin-left: 38px;" type="checkbox" id="checkItem" name="check[]" value="002"><br>
<label>KISWAHILI</label><input style="margin-left: 28px;" type="checkbox" id="checkItem" name="check[]" value="003"><br>
<label>FRENCH</label><input style="margin-left: 42px;" type="checkbox" id="checkItem" name="check[]" value="004"><br>
<label>GERMANY</label><input style="margin-left: 29px;" type="checkbox" id="checkItem" name="check[]" value="005"><br>

<br><br><br>
<h3 style="font-size: 20px;">GROUP 2</h3>
<label>CHEMISTRY</label><input style="margin-left: 15px;" type="checkbox" id="checkItem" name="check[]" value="006"><br>
<label>BIOLOGY</label><input style="margin-left: 32px;" type="checkbox" id="checkItem" name="check[]" value="007"><br>
<label>PHYSICS</label><input style="margin-left: 35px;" type="checkbox" id="checkItem" name="check[]" value="008"><br>
<br><br>
<button type="submit" class="btn btn-primary" style="width: 200px; margin-left: 260px;" name="save">Register</button>

<button class="btn btn-danger glyphicon glyphicon-backward" type="submit" name="submit2" style="margin-left: 190px; border: none"
	>BACK</button>

<br>
<div class="group3">
<h3 style="font-size: 20px;">GROUP 3</h3>
<label>BUSINESS</label><input style="margin-left: 30px;" type="checkbox" id="checkItem" name="check[]" value="009"><br>
<label>COMPUTER</label><input style="margin-left: 22px;" type="checkbox" id="checkItem" name="check[]" value="010"><br>
<label>AGRICULTURE</label><input style="margin-left: 1px;" type="checkbox" id="checkItem" name="check[]" value="011"><br>
<label>METAL WORK</label><input style="margin-left: 7px;" type="checkbox" id="checkItem" name="check[]" value="012"><br>
<label>WOOD WORK</label><input style="margin-left: 9px;" type="checkbox" id="checkItem" name="check[]" value="013"><br>
<label>HOMESCIENCE</label><input style="margin-left: -3px;" type="checkbox" id="checkItem" name="check[]" value="014"><br>
<br>


<h3 style="font-size: 20px;">GROUP 4</h3>
<label>GEOGRAPHY</label><input style="margin-left: 10px;" type="checkbox" id="checkItem" name="check[]" value="015"><br>
<label>HISTORY</label><input style="margin-left: 40px;" type="checkbox" id="checkItem" name="check[]" value="016"><br>
<label>CRE</label><input style="margin-left: 72px;" type="checkbox" id="checkItem" name="check[]" value="017"><br>
<label>IRE</label><input style="margin-left: 78px;" type="checkbox" id="checkItem" name="check[]" value="018"><br>
</div>
	
</form>
	
</div>




</div>


</body>


<?php
	if(isset($_POST['save'])){
		$checkbox=$_POST['check'];
		for($i=0; $i<count($checkbox); $i++){
			$check_id=$checkbox[$i];
			mysqli_query($db,"INSERT INTO checkbox(`admission`, `class`, `year`, `subject_id`) VALUES ('$_SESSION[adm]', '$_SESSION[form]','$_SESSION[year]', '".$check_id."')") ;
			
			
			
			
	?>
	<script type="text/javascript">
		
		alert("Subjects saved succeesfully");
		window.location="academic_dash.php"
	</script>
	<?php
			
		}
	}
		
?>



<?php
	if(isset($_POST['submit2'])){
		
	
	?>
	<script type="text/javascript">
		window.location="academic_dash.php"
	</script>
	<?php
	}
		
	
	?>



</html>
