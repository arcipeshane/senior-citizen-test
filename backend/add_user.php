<?php 

// database connection 
$conn = mysqli_connect('localhost','root','','senior_citizen');


if(isset($_POST['addBtn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$phonenumber = $_POST['phonenumber'];


	$sql = "INSERT INTO users (user_id,username,password,user_name,user_age,user_phonenumber) VALUES (NULL,'$username','$password','$name','$age','$phonenumber')";
	$result = mysqli_query($conn,$sql);

	if($result == TRUE) {
		header("Location:../index.php");
	} else {
		echo "ERROR";
	}
}




?>