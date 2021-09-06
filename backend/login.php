<?php 

require('sessions.php');

// database connection
$conn = mysqli_connect('localhost','root','','senior_citizen');


if(isset($_POST['loginBtn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];


	var_dump($username);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
	$result= mysqli_query($conn,$sql);
	 if (mysqli_num_rows($result) > 0) {
	 	while($row = mysqli_fetch_assoc($result)) {
			setSession($row['user_id'],$row['username'],$row['user_name'],$row['user_age'],$row['user_phonenumber']);
			 header('Location:../index.php');
	 	}
	 } else {
		$error =  "Incorrect Username and/or Password!";
	 	//header('Location:../index.php?error='.$error);
	 }
	 	mysqli_close($conn);

}




?>