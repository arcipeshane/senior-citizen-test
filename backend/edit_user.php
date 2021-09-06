<?php 

// database connection 
$conn = mysqli_connect('localhost','root','','senior_citizen');


if(isset($_POST['editBtn'])) {
	$edit_id = $_POST['updateID'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$phonenumber = $_POST['phonenumber'];


	$sql = "UPDATE users SET `username` = '$username', `password` = '$password', `user_name` = '$name', `user_age` = '$age', `user_phonenumber` = '$phonenumber' WHERE `user_id` = '$edit_id'  ";
	$result = mysqli_query($conn,$sql);

	if($result == TRUE) {
		header("Location:../index.php");
	} else {
		echo "ERROR";
	}
}




?>