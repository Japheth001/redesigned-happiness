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

<style type="text/css">
	.wrapper{
		width: 800px;
		height: 480px;
		background-color: coral;
		opacity: .8;
		margin: 0 auto;
		
	}
	.form-control{
		width: 250px;
		margin: 0 auto;
		margin-top: 5px;	
	}
	.btn-primary{
		font-size: 13px;
	}
	.wrapper2{
		width: 600px;
		height: 300px;
		background-color: #268a37;
		margin: 0 auto;
	}
	

</style>

<body>
<div class="container">
	<div class="wrapper">
	<form name="" action="" method="post">
	<br><br>
	<h3 style="font: normal; font-size: 30px; text-align: center">Student Details</h3>
	
	<div class="wrapper2">
		<br><br>
	<input class="form-control" type="text" name="adm" placeholder="Admission Number" required><br>
	
	<div>
		<select class="form-control" name="class" size="1">
		
		
		<option value="">Select Class</option>
		
		
		<option value="1">Form 1</option>
		<option value="2">Form 2</option>
		<option value="3">Form 3</option>
		<option value="4">Form 4</option>
			
		</select>
	</div>
	
	<br>
	 <div>
   	<select class="form-control"  name="year" size="1" >
   			<option value="">Select Year</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
			<option value="2029">2029</option>
			<option value="2030">2030</option>
			<option value="2031">2031</option>
			<option value="2032">2032</option>
			<option value="2033">2033</option>
			<option value="2034">2034</option>
			<option value="2035">2035</option>
			<option value="2036">2036</option>
			<option value="2037">2037</option>
			<option value="2038">2038</option>
			<option value="2039">2039</option>
			<option value="2040">2040</option>
			<option value="2041">2041</option>
			<option value="2042">2042</option>
		</select><br>
		
   </div>
	
	<button class="btn btn-primary glyphicon glyphicon-forward" type="submit" name="submit" style="margin-left: 250px; border: dashed"
	>NEXT</button>
	
	
	
	</div>
	
	
	</form>
	
	<?php
	if(isset($_POST['submit'])){
		
	$_SESSION['adm']=$_POST['adm'];
	$_SESSION['form']=$_POST['class'];
	$_SESSION['year']=$_POST['year'];
	
	?>
	<script type="text/javascript">
		window.location="register_subj.php"
	</script>
	<?php
	}
		
		
	
	?>
	
	
	<?php
	if(isset($_POST['submit'])){
		
	$_SESSION['adm']=$_POST['adm'];
	$_SESSION['form']=$_POST['class'];
	$_SESSION['year']=$_POST['year'];
	
	?>
	<script type="text/javascript">
		window.location="register_subj.php"
	</script>
	<?php
	}
		
		
	
	?>
</div>
</div>

</body>
</html>