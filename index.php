<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajaxpractice";

// Create connection
 $conn = new mysqli($servername, $username, $password,$dbname);
 $sql_1="SELECT rating_value FROM rating WHERE user_id=2";
 $result=$conn->query($sql_1);
 $data=$result->fetch_assoc();
 $data_value=$data['rating_value'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<style type="text/css" media="screen">
	.star-rating{
		line-height: 32px;
		font-size: 1.25em;
	}

	.star-rating .fa-star{
		color: yellow;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 star-rating">
				<span class="fa <?php echo($data_value>=1) ?'fa-star' :''?>" data-rating="1" onclick="getrating(1)"></span>
				<span class="fa  <?php echo($data_value>=2) ?'fa-star' :'fa fa-star-o'?>" data-rating="2" onclick="getrating(2)"></span>
				<span class="fa <?php echo($data_value>=3) ?'fa-star' :'fa fa-star-o'?>" data-rating="3" onclick="getrating(3)"></span>
				<span class="fa <?php echo($data_value>=4) ?'fa-star' :'fa fa-star-o'?>" data-rating="4" onclick="getrating(4)"></span>
				<span class="fa <?php echo($data_value>=5) ?'fa-star' :'fa fa-star-o'?>" data-rating="5" onclick="getrating(5)"></span>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<div id="feedback"></div>
			</div>
		</div>
	</div>

	
	

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="custom.js"></script>
</body>
</html>