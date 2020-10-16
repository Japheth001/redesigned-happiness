<?php
session_start();

if(isset($_SESSION['logon'])){
	unset($_SESSION['logon']);	
}
header("location:index.php");

?>