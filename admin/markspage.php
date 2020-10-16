<?php
 	include("connection.php");
	include("navbar.php");
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<style type="text/css">
	.wrapper{
		background-color: lime;
		width: 1300px;
		height: 420px;
		margin: 0 auto;
	}
	.form-control{
		width: 50px;
		height: 30px;
		border: none;
	}
		.form{
		margin-right: 100px;
	}
	.label{
		width: 200px;
		margin-top: 30px;
		font-size: 15px;
		
		margin-right: 250px;
	}
	.form-control{
		height: 25px;
		width: 70px;
		margin-left:700px;
		margin-top: -20px;
		cursor: pointer;
	}
	.category22{
		margin-left: 200px;
		margin-top:-270px;
	}
	.labelcategory11{
		margin-left: 600px;
	}
	.groupsub11{
	padding-right: 700px;
		
	}
	ul{
		margin-left: 650px;
	
	}
	.btn{
		margin-left: 300px;
		margin-top: -10px;
		border: none;
	}
	.b{
		margin-left: 600px;
		margin-top: 30px;
	}

	}
</style>

<body>
<div class="wrapper">
	<div class="form" style="color: black; text-align: center">


<form name="" action="" method="post">
<caption >ENTER STUDENT MARKS</caption><br><br><br><br>
<ul>
	<div>
	<div class="groupsub1">
	<div class="labelcategory1">


	
<label>BUSINESS</label>
<input style="margin-left: 521px;" class="form-control" type="text" name="bus" required=""><br>

<label >AGRICULTURE</label>
<input style="margin-left: 521px;" class="form-control" type="text" name="agri" required=""><br>

<label >COMPUTER</label>
<input style="margin-left: 521px;" class="form-control" type="text" name="comp" required=""><br>

<label >GEOGRAPHY</label>
<input style="margin-left: 520px;" class="form-control" type="text" name="geo" required=""><br>

<label >HISTORY</label>
<input style="margin-left: 520px;" class="form-control" type="text" name="hist" required="" ><br>

<label >CRE</label>
<input style="margin-left: 520px;" class="form-control" type="text" name="cre" required="" ><br>
	
	
</div>

</div>

</ul>

<ul style="margin-left: -110px; margin-top: -310px;">
	<div class="category2">

<label >ENGLISH</label>
<input class="form-control" type="text" name="eng" required=""  ><br>

<label >KISWAHILI</label>
<input class="form-control" type="text" name="kis" required="" ><br>

<label >MATHEMATICS</label>
<input class="form-control" type="text" name="maths" required="" ><br>

<label >CHEMISTRY</label>
<input class="form-control" type="text" name="chem" required=""><br>

<label >PHYSICS</label>
<input class="form-control" type="text" name="phy" required=""><br>

<label >BIOLOGY</label>
<input class="form-control" type="text" name="bio" required=""><br>


<div >
<button class="btn btn-success glyphicon glyphicon-saved" type="submit" name="save"><span>SAVE</span></button>
</div>
</a>

	
</div>

</div>
</ul>


</form>
</div>

	
</div>




<form action="" name="" method="post">

	

</form>




</div>

<?php
	if(isset($_POST['save'])){
		
		
			
		$sql="INSERT INTO `form` (`admission`,`period`,`form`,`stream`,`year`,`eng`, `kisw`, `maths`, `phy`, `chem`, `bio`, `bus`, `agri`, `comp`, `geo`, `hist`, `cre`, `totals_marks`,`average`) VALUES ($_SESSION[admission], $_SESSION[period], $_SESSION[form], $_SESSION[side], $_SESSION[year] , '$_POST[eng]','$_POST[kis]','$_POST[maths]','$_POST[phy]',
	    '$_POST[chem]','$_POST[bio]','$_POST[bus]','$_POST[agri]','$_POST[comp]','$_POST[geo]','$_POST[hist]','$_POST[cre]', '$tot', '$aver');";
		
		 mysqli_query($db,$sql);
		
		
	}
?>

</body>
</html>