<?php
include("navbar.php");
include("connection.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    width: 80%;
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
	.wrapper{
		height: 500px;
		width: 500px;
		
		margin: 0 auto;
		background-image: url(images/logo16.jpg);
		background-size: contain;
		background-repeat: no-repeat;
	}
	.form-control{
		width: 250px;
		border: none;
		background-color:black;
		opacity: .7;
		color: white;
		margin: 0 auto;
		
	}
	.btn-success{
		margin-left: 200px;
	}
</style>
		
		

<body>
<div class="wrapper">
<br><br><br>
	<h3 style="text-align: center; color: red">Welcome Admin -Register Subjects</h3><br>
	<form action="" name="" method="post">
		<input class="form-control glyphicon glyphicon-record"  name="subject" type="text" placeholder="Subject" required=""><br>
		<input class="form-control glyphicon glyphicon-user" name="teacher" type="text" placeholder="Teacher" required=""><br>
		<input class="form-control glyphicon glyphicon-user" name="class" type="text" placeholder="Class" required=""><br>
		<input class="form-control glyphicon glyphicon-user" name="password" type="text" placeholder="Password" required=""><br>
		<button class="btn btn-success" type="submit" name="submit">SAVE</button>
	</form>

<?php
if(isset($_POST['submit'])){
	
	mysqli_query($db,"INSERT INTO `subjects`(`subject`, `teacher`, `class`, `password`) VALUES ('$_POST[subject]', '$_POST[teacher]', '$_POST[class]', '$_POST[password]');");
	
	?>
	<script>
		alert("Record Saved Successfully");
		window.location="masomo_page.php";
	</script>
	<?php
}
?>
	
</div>
</body>
</html>