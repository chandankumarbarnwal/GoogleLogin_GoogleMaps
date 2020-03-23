<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.container{
		width: 70%;
	}

	#profile{
		height: 450px;
		background: whitesmoke;
	}

	#ppicture{
		width : 100%;
		height: 70%
	}

	.vbottom{
		position: relative;
		top: 100%;
		transform: translateY(-100%);		
	}

</style>

</head>
<body>
	<div class="container">
		<div class="row" id="profile" style="">
			<div class="col-md-4 col-md-offset-2 vbottom">
				<img id="ppicture" src="<?php echo $_SESSION['user']['picture']?>" class="img-circle">
			</div>
			<div class="col-md-5 vbottom">
				<p><strong> <?php echo $_SESSION['user']['name']?> </strong></p>
				<p><strong> <?php echo $_SESSION['user']['email']?> </strong></p>
				<p><strong> <?php echo $_SESSION['user']['gender']?> </strong></p>
				<p><strong> <?php echo $_SESSION['user']['pageLink']?> </strong></p>
			</div>
			<div class="col-md-1">
				<a href="logout.php">logout</a>
			</div>

		</div>

	</div>
</body>
</html>