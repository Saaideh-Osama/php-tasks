<?php
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$familyname = $_POST['familyname'];
	$phone = $_POST['phone'];
	$dateofbirth = $_POST['birthdate'];
	$email = $_POST['signup_email'];
	$password = $_POST['signup_password'];

	// Database connection
	$conn = new mysqli('localhost','root','','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO users(firstname,middlename, lastname,familyname,phone,dateofbirth, email,passwords) values(?, ?, ?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssssisss",$firstname,$middlename, $lastname,$familyname,$phone,$dateofbirth, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>