<!DOCTYPE html>
<html>
<head>
	<title>Access Google Maps API in PHP</title>
	
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}

		#data, #allData{
			display:none;
		}

	</style>
</head>
<body>
	<div class="container">
		<center><h1>Access Google Maps API in PHP</h1></center>

		<?php
			require 'education.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">'.$coll.'</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">'.$allData.'</div>';

		?>
		




		<div id='map'></div>
    </div>
</body>
           <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC2KGPdrmKuanoyPV2Se4BmY5jV9nGECU&callback=loadMap"
    async defer>
   </script>

</html>