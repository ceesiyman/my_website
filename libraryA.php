<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    echo 'YOU NEED TO LOGIN FIRST!';
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="laca.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
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
		<?php 
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "library";

$conn = new mysqli($server_name, $username, $password, $database_name); // Create connection with the database

if ($conn->connect_error) { // Check the connection to verify if its succesful
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM academic";  //Writing query for all the students 

$result = $conn->query($sql); //Making the query and getting the data
?> 

<!DOCTYPE html> <!--The html code is for creating the table for storing the fetched data-->
<html> 
	<head> 
		<title> academic</title> 
		<link rel="stylesheet" href="laca.css" type="text/css" />
	</head> 
	<body> 
	
		<?php 
        if ($result->num_rows > 0) { //If the database has data, 'num_rows' returns the number of rows in table
		?> 
		
		<div class="table-wrapper" >
		<table align="center" class="fl-table" border="1px" style="width:1200px; line-height:90px;"> 
		<thead>
		<tr> 
		<th colspan="8"><h3>Academic Books Data</h3></th> 
		</tr> 
		<tr>
			<th> TITLE </th> 
			<th> AUTHOR </th> 
			<th> PUBLISHER </th> 
			<th> YEAR OF PUBLIFICATION </th>
			
			  
		</tr> 
		</thead>
		<?php //Whenever you see this just know im using php inside html so i need the compiler to know that this is php not otherwise

        while($book = $result->fetch_assoc())  //Array to output data of each row, 'fetch_assoc' fetches a result row as an associative array
		{ 
		?> <!--This is the closing tag of php-->
		<tbody>
		<tr> 
		<td><?php echo $book['title']; ?></td> 
		<td><?php echo $book['author']; ?></td> 
		<td><?php echo $book['publisher']; ?></td> 
		<td><?php echo $book['pyear']; ?></td> 
		
		</tr>
		</tbody> 
	<?php 
            } }else {
        echo "0 results";
    }           
$conn->close(); //This closes the connection to the database
    ?> 
		</table> 
		</div>
	</body> 
</html>
	</body>
</html>