<?php 

// database connection 
$conn = mysqli_connect('localhost','root','','senior_citizen');

if(isset($_GET['delete'])) {
	$delete_id = $_GET['delete'];


	$sql = "DELETE FROM users WHERE user_id = '$delete_id' ";
	$result = mysqli_query($conn,$sql);

	if($result == TRUE) {
		header("Location: ../index.php");
	} else {
		echo "ERROR";
	}
}


?>