<?php
include 'navbar.php';
include 'connection.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Information</title>


<style type="text/css">
	.srchi{
	padding-left: 1000px;	
	}
	
	
	
	
</style>
</head>

<body>

<!-----Adding the search option button----------------->

<div class="srchi">
<form class="navbar-form" name="form1" method="post">
	<input class="form-control" type="text" name="enter" placeholder="Enter student first name.." required>
	<button class="btn btn-default" type="submit" name="studentinfo" 
	style="background-color: hotpink" >
		<span class="glyphicon glyphicon-search"></span>
	</button>
</form>

</div>




<h3>Student Information</h3>

<?php
	if(isset($_POST['studentinfo']))
	{
	 $q=mysqli_query($db,"SELECT * FROM student
WHERE first LIKE '%$_POST[enter]%'");
	 
		
		if(mysqli_num_rows($q)==0)
		{
			echo "Sorry! No student found". mysqli_error($db);
		}else{
			echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "FIRST"	;			echo "</th>";
	echo "<th>";			echo "LAST"	;			echo "</th>";
	echo "<th>";			echo "USERNAME"	;		echo "</th>";
	echo "<th>";			echo "EMAIL"	;		echo "</th>";
	echo "<th>";			echo "CONTACT"	;		echo "</th>";
	
	
	while($row=mysqli_fetch_assoc($q)){
		echo "<tr>";
		
		echo "<td>";		echo $row['first'];			echo "</td>";
		echo "<td>";		echo $row['last'];		echo "</td>";
		echo "<td>";		echo $row['username'];		echo "</td>";
		echo "<td>";		echo $row['email'];		echo "</td>";
		echo "<td>";		echo $row['contact'];		echo "</td>";
	
		
		echo "</tr>";
	}
	echo "</table>";
		}
		
			
		}else{
		
		
		/*-----Else if button is not pressed----*/
		$res=mysqli_query($db,"SELECT first,last,username,email,contact FROM `student`");
	
	echo "<table class='table table-bordered table-hover'>";
	echo "<tr style='background-color: pink'>";
	echo "<th>";			echo "FIRST"	;			echo "</th>";
	echo "<th>";			echo "LAST"	;			echo "</th>";
	echo "<th>";			echo "USERNAME"	;		echo "</th>";
	echo "<th>";			echo "EMAIL"	;		echo "</th>";
	echo "<th>";			echo "CONTACT"	;		echo "</th>";
	
	while($row=mysqli_fetch_assoc($res)){
		echo "<tr>";
		
		echo "<td>";		echo $row['first'];			echo "</td>";
		echo "<td>";		echo $row['last'];		echo "</td>";
		echo "<td>";		echo $row['username'];		echo "</td>";
		echo "<td>";		echo $row['email'];		echo "</td>";
		echo "<td>";		echo $row['contact'];		echo "</td>";
	
		
		echo "</tr>";
	}
	echo "</table>";
	}
	
	
?>


</body>
</html>