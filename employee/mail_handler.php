<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['message'];
		
		
		$to='mumokimeu3@gmail.com';
		$subject='Form Submission';
		$message="Name: ".$name."\n" ."Phone: ".$phone."\n" ."Wrote the following: ".$msg."\n\n";
		$headers="From: ".$email."";
		
		
		
		if(mail($to,$subject,$message,$headers)){
			?>
			<script type="text/javascript">
				alert("Sent Successfully! Thank you <?php ".$name."?> We will contact you shortly");
				window.location="dashboard_empl.php";
			</script>
			<?php
			
		}else{
			?>
			<script type="text/javascript">
				alert("<?php ".$name."?> Something went wrong...try again");
				window.location="dashboard_empl.php";
			</script>
			<?php
		}
	}
?>