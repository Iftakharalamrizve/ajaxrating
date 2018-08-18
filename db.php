 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajaxpractice";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$rating_value=$_POST['rating_value'];
$user_id=$_POST['user_id'];

 $sql_1="SELECT user_id FROM rating WHERE user_id=$user_id";
if($conn->query($sql_1)){
	$sql = "UPDATE rating SET rating_value=$rating_value WHERE user_id=$user_id";
	if($conn->query($sql) === TRUE){
		echo "Record Update Successfully";
	}else{
		echo "Record is not Update";
	}
}else{
	echo "Sorry Data is not Update";
}



?> 