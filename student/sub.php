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

<form method="post" action="" name="">
<input type="checkbox" id="checkItem" name="check[]" value="1">
<input type="checkbox" id="checkItem" name="check[]" value="2">
<input type="checkbox" id="checkItem" name="check[]" value="3">
<input type="checkbox" id="checkItem" name="check[]" value="4">
<button type="submit" class="btn btn-primary" style="width: 200px" name="save">Submit</button>

	
</form>

</body>


<?php
	if(isset($_POST['save'])){
		$checkbox=$_POST['check'];
		for($i=0; $i<count($checkbox); $i++){
			$check_id=$checkbox[$i];
			mysqli_query($db,"INSERT INTO checkbox(category_id,subcategory_id) VALUES ('1', '".$check_id."')") ;
			
			
			echo("Data added succeessfully");
		}
	}
		
?>
















<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_custom_checkbox by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:09:42 GMT -->
</html>
