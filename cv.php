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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>curriculum vitae</title>
</head>
<body style="background-image: url('back1.jpg');">
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
    <h2>.</h2><br>
    <div class="full">
        <div class="left">
            <div class="image" >
                <img src="ashraf.jpg" width="125" height="125">
            </div>
            <div class="pdata">
                <h2>Personal Information</h2>
                <table>
                    
                    <tr>
                        <td>Age</td>
                        <td>: 21</td>
                        
                    </tr>
                    <tr>
                        <td>marital status</td>
                        <td>: single</td>
                        
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>: male</td>
                        
                    </tr>
                </table>
            </div>
            <div class="Contact">
                <h2>Contact</h2>
                <p><b>Email id:</b>iymanashraf2002@gmail.com</p>
                <p><b>Mobile no :</b>+255 612 415 154</p>
            </div>
            <div class="Skills">
                <h2>Skills</h2>
                <ul>
                    <li><b>Programming Languages :
                      Python, c, Java, C++</b></li>
                    <li><b>Frontend : HTML5, CSS3,
                      JavaScript, Php</b></li>
                    
                </ul>
            </div>
            <div class="Language">
                <h2>Language</h2>
                <ul>
                    <li>English</li>
                    <li>Swahili</li>
                </ul>
            </div>
            <div class="Hobbies">
                <h2>Hobbies</h2>
                <ul>
                    <li>Playing football</li>
                    <li>Reading Books</li>
                    <li>Playing video game</li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="name">
                <h1>ASHRAF B ISSA</h1>
            </div>
            <div class="title">
                <p>Web Developer and business manager</p>
            </div>
            <div class="Summary">
                <h2>Summary</h2>
            </div>
            <div class="Experience">
                <h2>Experience</h2>
                <h3>Don Bosco upanga- Programmer</h3>
                <p>2018 to 2019</p>
                <ul>
                    <li>Actively engaged in web creative
                      design and development.</li>
                    <li>Designing project, planning and programming</li>
                </ul>
                <h3>Don Bosco oysterbay - junior web developer</h3>
                <p>may 2022 to august 2022</p>
                <ul>
                    <li>Actively engaged in web creative
                      design and development.</li>
                    <li>Designing project, programming planning</li>
                    <li>Working on designing</li>
                </ul>
            </div>
            <div class="Education">
                <h2>Education</h2>
                <table>
                    <tr>
                        <th>University/college/school  </th>
                        <th>Passing year  </th>
                    
                    </tr>
                    <tr>
                        <td>University of Dar es salaam(COICT)</td>
                        <td>2023</td>
                        
                    </tr>
                    <tr>
                        <td>Tambaza High school</td>
                        <td>2022</td>
                        
                    </tr>
                    <tr>
                        <td>Kibasila High school</td>
                        <td>2019</td>
                        
                    </tr>
                </table>
            </div>
            <div class="project">
                <ul>
                    <li>
                        <h2>Ashraf Website</h2>
                        <p>This project is based on html
                          & used javascript</p>
                    </li>
        
                </ul>
            </div>
        </div>
    </div>

</body>
</html>