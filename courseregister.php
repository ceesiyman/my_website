<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'courses';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['cname'], $_POST['ccode'], $_POST['cdescription'], $_POST['department'], $_POST['semester'], $_POST['cyear'], $_POST['instructor'], $_POST['result'])) {
	// Could not get the data that should have been sent.
	header('Location: courses1.php');
	exit('Please complete the registration form!,other');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['cname']) ||empty($_POST['ccode']) ||empty($_POST['cdescription']) ||empty($_POST['department']) ||empty($_POST['semester']) ||empty($_POST['cyear']) || empty($_POST['instructor']) || empty($_POST['result'])) {
	// One or more values are empty.
	header('Location: courses1.php');
	exit('Please complete the registration form,empty');
}
if (strlen($_POST['cdescription']) > 50 || strlen($_POST['instructor']) > 30) {
	exit('Description and instructors name should be less than 30 characters');
}

if ($stmt = $con->prepare('INSERT INTO coursedata (cname, ccode, cdescription, department, semester, cyear, instructor, result) VALUES (?, ?, ?, ?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	
	$stmt->bind_param('ssssssss',  $_POST['cname'], $_POST['ccode'], $_POST['cdescription'],$_POST['department'],$_POST['semester'], $_POST['cyear'], $_POST['instructor'], $_POST['result']);
	$stmt->execute();
	header('Location: courses.php');
	echo "succesful recorded";
    $stmt->close();
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>