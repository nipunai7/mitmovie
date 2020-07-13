<?php

$name = "";
$email = "";
$password_1="";
$password_2="";
$errors = array();

$db = mysqli_connect('139.162.10.226', 'mitmovie', 'mitmovie');

if(isset($_POST['sign up'])){
    $name = mysql_real_escape_string($_POST['uname']);
    $email = mysql_real_escape_string($_POST['email']);
    $password_1 = mysql_real_escape_string($_POST['password']);
    $password_2 = mysql_real_escape_string($_POST['password-repeat']);

if(empty($name)){
	array_push($errors,"username is required");
}
if(empty($email)){
	array_push($errors,"E-mail is required");
}
if(empty($password_1)){
	array_push($errors,"password is required");
}

if(password_1 != password_2){
	array_push($errors,"Passwords doesn't match!!!");
}

if (count($errors==0)){
	$sql= "INSERT INTO user(username, email, password) 
	VALUES ('$name', '$email', '$password')";

	mysqli_query($db, $sql);
	
}





}



?>