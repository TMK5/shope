<?php
	
	include_once 'dataBaseConnection.php';

	$userName = $_POST['userName'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($userName == null || $email == null || $password == null){
		header("Location: ../site/account.html?all_filds_requierd");
	}
	else{
		$date = date('Y-m-d h:i:s');

		$sql = "INSERT INTO users (user_name, email, pass_word, date) VALUES('$userName', '$email', '$password', '$date');";

		mysqli_query($conn, $sql);

		header("Location: ../site/account.html?SignUp_completed");
	}