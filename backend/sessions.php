<?php
session_start();

function setSession($id,$username,$name,$age,$phonenumber){
	$_SESSION["user_id"] = $id;
	$_SESSION["user_username"] = $username;
	$_SESSION["user_name"] = $name;
	$_SESSION["user_age"] = $age;
	// $_SESSION["user_email"] = $email;
	$_SESSION["user_phonenumber"] = $phonenumber;
}


?>