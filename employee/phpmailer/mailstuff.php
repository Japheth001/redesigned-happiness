<?php
		require("phpmailer/PHPMailerAutoload.php");
		$mail=new PHPMailer;
		
		//$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->Port=587;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='tls';
		
		
		$mail->Username='mumokimeu3@gmail.com';
		$mail->Password='31246164';
		$mail->setFrom('mumokimeu3@gmail.com','Company XYZ');
		$mail->addAddress('mumokimeu3@gmail.com');
		$email->addReplyTo('mumokimeu3@gmail.com');
		
		$mail->isHTML(true);
		$mail->Subject('PHP Mailer Subject');
		$mail->Body='<h1 align=center>Subscribe My Channel</h1><br><h4 align=center>Like this video</h4>';
			
			
		if($mail->send()){
			echo("Message could not be sent");
		}else{
			echo("Message sent successfully");
		}
		
		
	?>	