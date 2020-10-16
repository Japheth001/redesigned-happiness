<?php
	include("navbar.php");
	include("connection.php");
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enter Student Marks</title>
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
	}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	body{
		background-color: #98fb983b;
		
	}
	.wrapper{
		width: 800px;
		height: 500px;
		background-color: peru;
		opacity: .9;
		margin: 0 auto;
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

</style>


<body>
<div class="wrapperw">

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

<button class="btn btn-success glyphicon glyphicon-saved" type="submit" name="save"><span>SAVE</span></button>
<button class="b btn btn-success glyphicon glyphicon-plus-sign" type="submit" name="addmark"><span>ADD-MARKS</span></button>


	
</div>

</div>
</ul>


</form>
</div>

	
</div>












<?php
	$sql2="SELECT `username`, `pic` FROM `student` WHERE admission='$_SESSION[admission]'";
	$re1=mysqli_query($db,$sql2);
	
	if($row=mysqli_fetch_assoc($re1)){
		echo("<table>");
		echo("<tr>");
		
		echo "<img style='margin-top:-550px; margin-left:100px;' class='img-circle profile-img' height=200 width=200 src='images/".$row['pic']."'>";
		echo"Save Marks for "."".""; echo  $row['username'] ;
		
		echo("</tr>");
		echo("</table>");
	}else{
		?>
		<button style="background-color: orangered; margin-top: -600px; margin-left: 100px;" class="btn info">ADMISSION NOT EXISTING !</button>
		<?php
		
	}
	
?>

<?php
	if(isset($_POST['addmark'])){
		?>
		<script type="text/javascript">
			window.location="masomo_page.php";
		</script>
		<?php
	}
?>



<?php
	if(isset($_POST['save'])){
		
	   //Global Variables are declared at this point
		
		$maths=$_POST['maths'];
		$eng=$_POST['eng'];
		$kisw=$_POST['kis'];
		
		$bio=$_POST['bio'];
		$chem=$_POST['chem'];
		$phy=$_POST['phy'];
		
		$agri=$_POST['agri'];
		$bus=$_POST['bus'];
		$comp=$_POST['comp'];
			
		
		$hist=$_POST['hist'];
		$geo=$_POST['geo'];
		$cre=$_POST['cre'];
		
		
		
			
		if($phy>=$bio and ($geo>=($cre or $hist))){
			$tot=$maths+$eng+$kisw+$chem+$phy+$bus+$geo or $maths+$eng+$kisw+$chem+$phy+$agri+$geo or
				$maths+$eng+$kisw+$bio+$phy+$agri+$geo or $maths+$eng+$kisw+$chem+$phy+$comp+$geo ;
			
			
		}elseif($phy>=$bio and ($hist>=($cre or $geo))){
			$tot=$maths+$eng+$kisw+$chem+$phy+$bus+$hist or $maths+$eng+$kisw+$chem+$phy+$agri+$hist or
				$maths+$eng+$kisw+$bio+$phy+$agri+$geo or $maths+$eng+$kisw+$chem+$phy+$comp+$hist; 		
		}
		elseif($phy>=$bio and ($cre>=($hist or $geo))){
			$tot=$maths+$eng+$kisw+$chem+$phy+$bus+$cre or $maths+$eng+$kisw+$chem+$phy+$agri+$cre or
				$maths+$eng+$kisw+$bio+$phy+$agri+$cre or $maths+$eng+$kisw+$chem+$phy+$comp+$cre; 		
		}
		
		
		
		elseif($bio>=$phy and ($geo>=($cre or $hist))){
			$tot=$maths+$eng+$kisw+$chem+$bio+$bus+$geo or $maths+$eng+$kisw+$chem+$bio+$agri+$geo or
				$maths+$eng+$kisw+$bio+$phy+$agri+$geo or $maths+$eng+$kisw+$chem+$bio+$comp+$geo ;
			
		}elseif($bio>=$phy and ($cre>=($geo or $hist))){
			$tot=$maths+$eng+$kisw+$chem+$bio+$bus+$cre or $maths+$eng+$kisw+$chem+$bio+$agri+$cre or
				$maths+$eng+$kisw+$bio+$phy+$agri+$cre or $maths+$eng+$kisw+$chem+$bio+$comp+$cre;
			
		}elseif($bio>=$phy and ($hist>=($geo or $cre))){
			$tot=$maths+$eng+$kisw+$chem+$bio+$bus+$hist or $maths+$eng+$kisw+$chem+$bio+$agri+$hist or
				$maths+$eng+$kisw+$bio+$phy+$agri+$hist or $maths+$eng+$kisw+$chem+$bio+$comp+$hist;
		}
		
		
		$grade="A";
		$aver=0;
		$tot=0;
		switch($grade){
				case "A":
				if($aver>=74){
					echo("A");
				}
				break;
				
				case "B":
				if($aver>=60){
					echo("B");
				}
		}
		$aver=($tot/7);
		
	
		$tot=0;
		$aver=0;
		
		
		
		
		
	
				
		$sql="INSERT INTO `form` (`admission`,`period`,`form`,`stream`,`year`,`eng`, `kisw`, `maths`, `phy`, `chem`, `bio`, `bus`, `agri`, `comp`, `geo`, `hist`, `cre`, `totals_marks`,`average`) VALUES ($_SESSION[admission], $_SESSION[period], $_SESSION[form], $_SESSION[side], $_SESSION[year] , '$eng','$kisw','$maths','$phy',
	    '$chem','$bio','$bus','$agri','$comp','$geo','$hist','$cre', '$tot', '$aver');";
		
		 mysqli_query($db,$sql);
		
		
		
	}
?>







</body>
</html>