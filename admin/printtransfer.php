<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Print transfer assets</title>
</head>
<style type="text/css">
	.border-framing{
		width: 820px;
		background-color:#00ff958a;
		
		margin: 0 auto;
	}
	.buttons{
		border: none;
		margin-left:1120px;
		margin-bottom: 10px;;
		height: 25px;
		width: 30px;
	}
	</style>

<body>
<div class="buttons">
	<form name="" action="" method="post">
		<button class="btb btn-info glyphicon glyphicon-backward" name="back" type="submit" value="back">Back</button>
	</form>
</div>
<div class="border-framing">
	<div>
	<iframe style="margin-left: 30px;background-color: white" src="http://kcaa/admin/print_admin_transfer.php" height="1000px" width="760px"></iframe> 
</div>
</div>



<?php
	if(isset($_POST['back'])){
		?>
			<script type="text/javascript">
					window.location="transfer.php";
			</script>
		<?php
	}
	?>
 
</body>
</html>