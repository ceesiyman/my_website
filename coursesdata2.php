<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    echo 'you need to sign in ';
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="courses.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>homepage</title>
</head>
<body>
    <nav>
	    <ul>
            <li><a href="home.html"><i class="fa fa-home fa-4lg"></i>Home</a></li>
            <li><a href="about.html"><i class="fa fa-user-circle fa-lg"></i>About Me</a></li>
            <li><a href="register.html"><i class="fa fa-sign-in fa-lg"></i>Register</a></li>
            <li><a href="courses.php"><i class="fa fa-pencil fa-lg"></i>Courses</a></li>
            <li><a href="cv.php"><i class="fa fa-mortar-board fa-lg" ></i>CV</a></li>
            <li><a href="community.html"><i class="fa fa-users fa-lg"></i>Community Engagement</a></li>
            <li><a href="news.html"><i class="fa fa-newspaper-o"></i>News</a></li>
            <li><a href="library.php"><i class="fa fa-book fa-lg"></i>Library</a></li>
            <li><a href="contact.php"><i class="fa fa-address-book-o fa-lg"></i>Contacts</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i>Logout</a></li>
        </ul>
    </nav>
    <br>
    <?php 
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "courses";

$conn = new mysqli($server_name, $username, $password, $database_name); // Create connection with the database

if ($conn->connect_error) { // Check the connection to verify if its succesful
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM coursedata";  //Writing query for all the students 

$result = $conn->query($sql); //Making the query and getting the data
?> 

<!DOCTYPE html> <!--The html code is for creating the table for storing the fetched data-->
<html> 
	<head> 
		<title>Courses Information</title> 
		<link rel="stylesheet" href="table.css" type="text/css" />
	</head> 
	<body> 
	
		<?php 
        if ($result->num_rows > 0) { //If the database has data, 'num_rows' returns the number of rows in table
		?> 
		<div class="table-wrapper">
		<table align="center" class="fl-table" border="1px" style="width:600px; line-height:40px;"> 
		<thead>
		<tr> 
		<th colspan="8"><h3>Courses Data</h3></th> 
		</tr> 
		<tr>
			<th> Course Name </th> 
			<th> Course Code </th> 
			<th> Course description </th> 
			<th> Department </th>
			<th> Semester </th>
			<th> Year </th>
			<th> Instructors Name </th>
			<th> Results </th>	  
		</tr> 
		</thead>
		<?php //Whenever you see this just know im using php inside html so i need the compiler to know that this is php not otherwise

        while($book = $result->fetch_assoc())  //Array to output data of each row, 'fetch_assoc' fetches a result row as an associative array
		{ 
		?> <!--This is the closing tag of php-->
		<tbody>
		<tr> 
		<td><?php echo $book['cename']; ?></td> 
		<td><?php echo $book['ccode']; ?></td> 
		<td><?php echo $book['cdescription']; ?></td> 
		<td><?php echo $book['department']; ?></td> 
		<td><?php echo $book['semester']; ?></td> 
		<td><?php echo $book['cyear']; ?></td> 
		<td><?php echo $book['instructor']; ?></td> 
		<td><?php echo $book['result']; ?></td> 
		</tr>
		</tbody> 
	<?php 
            } }else {
        echo "0 results";
    }           
$conn->close(); //This closes the connection to the database
    ?> 
		</table> 
	</body> 
</html>
<footer>
        <p>&copy; 2023 My Website. All rights reserved.</p>
    </footer>

	</body>
</html>

