<?php
	session_start();
	include "connection.php";
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min">
<meta charset="utf-8">
<title>Sidebar Dashboard Template</title>
</head>

<style type="text/css">

	
	
	body{
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif"
	}
	header{
		position: fixed;
		background: #10E549;
		padding: 20px;
		width: 100%;
		height: 30px;
	}
	.left_area h3{
		color: #fff;
		margin: 0;
		text-transform: uppercase;
		font-size: 22px;
		font-weight: 900;
	}
	.left_area span{
		color: aqua;
	}
	.logout-btn{
		padding: 5x;
		background:#080349;
		text-decoration: none;
		float: right;
		margin-top: -30px;
		margin-right: 40px;
		border-radius: 2px;
		font-size: 15px;
		font-weight: 600;
		color: #fff;
		transition: 0.5s;
		transition-property: background;
	}
	.logout-btn:hover{
		background: #14ECCE;
	}
	.sidebar{
		background: #4a0606;
		margin-top: 70px;
		padding-top: 30px;
		position: fixed;
		left: 0px;
		width: 250px;
		height: 100px%;
		transition: 0.5s;
		transition-property: left;
		
	}
	.sidebar .profile-image{
		width: 100px;
		height: 100px;
		border-radius: 100px;
		margin-top: 10px;
		
	}
	.sidebar h4{
		color: #ccc;
		margin-top: 0px;
		margin-bottom: 20px;
	}
	.sidebar a{
		color: #fff;
		display: block;
		width: 100%;
		line-height: 60px;
		text-decoration: none; 
		padding-left: 40px;
		box-sizing: border-box;
		transition: 0.5s;
		transition-property: background;
		
	}
	.sidebar a:hover{
		background: #10ED83;
		
	}
	.sidebar i{
		padding-right: 10px;
	}
	label #sidebar_btn{
		z-index: 1;
		color: #fff;
		position: fixed;
		cursor: pointer;
		left: 300px;
		font-size: 20px;
		margin: 5px 0;
		transition: 0.5s;
		transition-property: color;
	}
	label #sidebar_btn:hover{
		color: aqua;
		
	}
	#check:checked~.sidebar{
		left: -190px;
	}
	#check:checked~.sidebar a span{
		display: none;
	}
	#check:checked~.sidebar a{
		font-size: 20px;
		margin-left: 170px;
		width: 80px;
		
	}
	.content{
		margin-left: 250px;
		background: url(images/818215-beach-wallpaper-for-computer-2560x1600-computer.jpg);
		background-position: center;
		background-size: cover;
		height: 100vh;
		transition: 0.5s;
		transition-property: color;
	}
	#check:checked~.content{
		margin-left: 60px;
	}
	#check{
		display: none;
	}
	
	
	
	
	/*Style for the email*/
	
	
	
	.main{
		
		width: 420px;
		margin: -200px auto;
		border-radius: 10px;
		border: 5px solid #000000;
		border-left: 40px solid  aquamarine;
		box-shadow: 1px 2px 10px #555;
		margin-left: -10px;
		margin-top: -110px;
	}
	.info{
		
		width: 90%;
		background-color:aquamarine;
		padding: 0.5px;
		text-shadow: 1px 1px 1px #222;
		color: black;
		font-size: 20px;
	}
	.form-box{
		background-color: #eee;
		padding: 10px;
	}
	label{
		color: hotpink;
	}
	.inp,.msg-box{
		width: 80%;
		padding: 8px;
		margin-top: 4px;
		margin-bottom: 5px;
		border-radius: 5px;
		border: 2px solid #219E02;
		font-weight: bold;
		color: black;
		border-right: 15px solid #219E02;;
		border-left: 15px solid #219E02;
		
	}
	.inp:focus,.msg-box:focus{
		outline: none;
		border: 2px solid #668B04;
		border-right: 15px solid  #668B04;
		border-left: 15px solid  #668B04;
	}
	.sub-btn{
		width: 50%;
		padding: 10px;
		margin-left: 75px;
		border-radius: 10px;
		margin-top: 5px;
		border: none;
		background: linear-gradient(#800000, #668B04);
		opacity: 0.8;
		transition: all ease-out 0.2s;
	}
	.sub-btn:focus{
		outline: none;
	}
	@media(max-width;720px){
		.main{
			width: 70%;
		}
	}
	
</style>


<body>
<input type="checkbox" id="check">
	<!--.....................................Header area start...........................-->
	<header>
	<label for="check"><i class="fa fa-bars" id="sidebar_btn"></i></label>
		<div class="left_area">
			<h3>INVENTORY <span> SYSTEM</span></h3>
		</div>
		
		<div class="right_area">
			<a href="logout.php" class="logout-btn">Logout</a>
		</div>
	</header>
	<!--.....................................Header area end.............................-->
	
	<!-----------------------------Sidebar Start...........................................-->
	<div class="sidebar">
		<center>
		
			<?php
				$sql3=("SELECT pic FROM employee WHERE username='$_SESSION[logon]'");
				$result=mysqli_query($db,$sql3);
				
				while($q=mysqli_fetch_assoc($result)){
					echo("<table>");
					echo "<tr>";
					
				
					echo "<img class='img-circle profile-image' height=60 width=70 src='images/".$q['pic']."'>";
				}
				
			?> <h4><?php echo "Welcome" .""." ".$_SESSION['logon'];?></h4 <?php 
				echo "</tr>";
				echo("</table>");	
				
			?>
			
			
				
		</center>
		<a href="dashboard_empl.php"><i class="fa fa-desktop"><span>DashBoard</span></i></a>
			<a href="sprofile.php"><i class="fa fa-picture-o"><span>Profile</span></i></a>
			<a href="assets_dash.php"><i class="fa fa-table"><span>My Assets</span></i></a>
			<a href="emp_message.php"><i class="fa fa-th"><span>Messages</span></i></a>
			<a href="#"><i class="fa fa-info-circle"><span>About</span></i></a>
			<a href="mail.php"><i class="fa fa-sliders-h"><span>Settingss</span></i></a>
			
	</div>
	<!-----------------------------Sidebar Ends......................................................-->
	<div class="content">
		
		
		
	<!-----------------------------EMail Code begins here...........................................-->	
		
	
			
			
			
			
			
				<canvas id="canvas" width="180" height="180"
style="background-color:#333; margin-right: 20px;float: right; margin-top: 85px;">
</canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.80
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
		
		
		<br><br>
		
		
	<div class="main">
		<div class="info" style="margin: 0 auto; margin-left: 300px; margin-top: 160px;"><h3>Give your feedback</h3></div>	
		<div class="info" style="margin: 0 auto; margin-left: 300px; margin-top: 10px;" >
		<form name="form" action="mail_handler.php" method="post" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required=""><br>
			<label for="email">Email ID</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Email" required=""><br>
			<label for="phone">Phone</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Phone" required=""><br>
			<label for="message">Message</label><br>
			<textarea name="msg" class="msg-box" placeholder="Write a message..." required></textarea>
			<input type="submit" value="Send" class="sub-btn">
		</form>
	</div>	
	</div>
	
	
	
	<div>
		<a href="mail.php">
			<img src="file:///V:/My%20Local%20Storage%20Website/phpmailer/img/email1.jpg";
		</a>
	</div>
		
<?php
	/*---------------------------------------------------------------------------------------------	
		
require 'includes/class.phpmailer.php'; 	
require 'includes/class.smtp.php';  
require 'includes/Exception.php';			
				
		
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
		


// Load Composer's autoloader
//require 'C:\wamp64\www\kcaaInventory\employee\phpmailer\vendor\autoload.php';
		
require 'PHPMailer\PHPMailer-5.2-stable\PHPMailerAutoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mumokimeu003@gmail.com';                     // SMTP username
    $mail->Password   = '31246164';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
	 $mail->SMTPSecure = 'tls';  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mumokimeu003@e.com', 'Mailer');
    $mail->addAddress('mumokimeu3@gmail.com', 'Japheth User');     // Add a recipient
    $mail->addAddress('mumokimeu003@gmail.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
	
	
	
	
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

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
...............................................................................................*/

?>
			


	</div>
</body>
</html>