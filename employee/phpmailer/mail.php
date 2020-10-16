
	<?php
		
	?>
	
	
	
	

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, device-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link href="../css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	<script src="../js/bootstrap-3.3.7.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mailing section</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>


<?php
	
		$error = '';
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
	
	


function clean_text( $string ) {
	$string = trim( $string );
	$string = stripslashes( $string ); //This variable will remove the backslashes
	$string = htmlspecialchars( $string ); //Will convert predefined characters into html format
	return ( $string );
}


if ( isset( $_POST['submit'] ) ) {
	if ( empty( $_POST["name"] ) ) {
		$error .= '<p><label class="text-danger">Please enter your name</label</p>';
	} else {
		$name = clean_text( $_POST['name'] );

		if ( !preg_match( "/^[a-zA-Z ]*$/", $name ) ) {
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label</p>';
		}
	}

	if ( empty( $_POST['email'] ) ) {
		$error .= '<p><label class="text-danger">Please enter your email address</label</p>';
	} else {
		$email = clean_text( $_POST['email'] );
		if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
			$error .= '<p><label class="text-danger">Invalid email format</label</p>';
		}
	}

	if ( empty( $_POST['subject'] ) ) {
		$error .= '<p><label class="text-danger">Subject is required</label</p>';
	} else {
		$subject = clean_text( $_POST['subject'] );
	}

	if ( empty( $_POST['message'] ) ) {
		$error .= '<p><label class="text-danger">message is required</label</p>';
	} else {
		$message = clean_text( $_POST[ 'message' ] );
	}

	if ( $error != '' ) {

		require 'includes/class.phpmailer.php';
		require 'includes/class.smtp.php';
		require 'includes/Exception.php';


		require 'PHPMailer\PHPMailer-5.2-stable\PHPMailerAutoload.php';
		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer;

		
		
	try{	
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->IsSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mumokimeu003@gmail.com';                     // SMTP username
    $mail->Password   = '31246164';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
	 $mail->SMTPSecure = 'tls';  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
   $mail->From =$_POST['email'];
   $mail->FromName=$_POST['name'];
   $mail->AddAddress('mumokimeu003@gmail.com','Company XYZ Assets'); 
   $mail->AddCC($_POST['email'], $_POST['name']);
   $mail->WordWrap= 50;
   $mail->IsHTML(true);
   $mail->Body = $_POST['message'];
   $mail->Subject=$_POST['subject'];
   
	
	
	
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    
   

    if($mail -> Send())
		$error='<p><label class="text-success">Thank you for contacting us.</label</p>';
	
	}catch (Exception $e){
		echo "message could not be sent. Mailer Error: {$mail->$ErrorInfo}";
	}
		
    	$name='';
		$email='';
		$subject='';
		$message='';
	}
		

		
		
		}
		
		
	
	
	


?>

<body style="padding-top: 70px">
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="margin: 0 auto; float: none">
				<h3 align="center">Send an Email on Form Submission</h3>
				<br/>
				<?php echo $error; ?>
				
				<form method="post">
					<div class="form-group">
						<label>Enter Name</label>
						<input class="form-control" type="text" name="name" placeholder="Enter Name" value="<?php echo $name; ?>">
					</div>
					<br>

					<div class="form-group">
						<label>Enter Email</label>
						<input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
					</div>
					<br>

					<div class="form-group">
						<label>Enter Subject</label>
						<input class="form-control" type="text" name="subject" placeholder="Subject" value="<?php echo $subject; ?>">
					</div>
					<br>
				  <div class="form-group">
					<label>Write message</label>
					  <textarea name="message" class="form-control" placeholder="Write a message..." required=""> <?php echo $message; ?> </textarea>
							
					</div>

					<br>
					<div class="form-group" align="center">
						<input class="btn btn-info" type="submit" name="submit" value="Submit">
					</div>
				</form>
			</div>

		</div>

	</div>
</body>

</html>