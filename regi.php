<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'register';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['contact'],  $_POST['passwords'],$_POST['fname'],$_POST['mname'],$_POST['surname'], $_POST['email'], $_POST['face'], $_POST['twitter'], $_POST['instagram'])) {
	// Could not get the data that should have been sent.

	exit('Please complete the registration form!');
}

// Make sure the submitted registration values are not empty.
if (empty($_POST['fname']) ||empty($_POST['contact']) ||empty($_POST['face']) ||empty($_POST['twitter']) ||empty($_POST['instagram']) ||empty($_POST['mname']) ||empty($_POST['surname']) ||empty($_POST['username']) || empty($_POST['passwords']) || empty($_POST['email'])) {
	// One or more values are empty.

	exit('Please complete the registration form');
}

//Files
$targetFolder = "cvv/";

$targetPath = $targetFolder . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
    echo "The file " . basename($_FILES['file']['name']) . " is uploaded.";
} else {
    echo "Problem uploading file.";
}


if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
    exit('Username is not valid!');
}
if (strlen($_POST['passwords']) > 20 || strlen($_POST['passwords']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}
// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, passwords FROM datain WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Username doesn't exists, insert new account
if ($stmt = $con->prepare('INSERT INTO datain (fname, mname, surname,username, passwords, email, contact, face, twitter, instagram) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['passwords'], PASSWORD_DEFAULT);
	$stmt->bind_param('ssssssssss',  $_POST['fname'], $_POST['mname'], $_POST['surname'],$_POST['username'], $password, $_POST['email'], $_POST['contact'], $_POST['face'], $_POST['twitter'], $_POST['instagram']);
	$stmt->execute();
	
	header ('Location: home.html');
    $stmt->close();
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

	}
	
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

$con->close();
?>