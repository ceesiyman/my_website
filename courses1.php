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
    <link rel="stylesheet" href="courses.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>courses</title>
    <style>
        input{
    border-bottom-style:solid;
    border-top-style:none;
    border-left-style:none;
    border-right-style:none;
    border-bottom-color:black;
    width: 8cm;
    height: 1cm;
    background-color: transparent;
}
label{
    font-size: larger;
}
.mybutton{
    width: 5cm;
    height: 1cm;
    background-color: white;
}
    </style>
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
    
    <div class="container" align="center" style="margin-top: 10%;">
        <form method="post" action="courseregister.php" id="myform">
    <table>
       
            <tr><td colspan="2"><h2>Register Your Course</h2></td></tr>
                <tr><td><label>Course name</label></td>
                <td>
                    <select id="cname" name="cname">
                        <option></option>
                        <option value="Programming in C">Programming in C</option>
                        <option value="Introduction to Computer Networks">Introduction to Computer Networks</option>
                        <option value="Business Computer Communication">Business Computer Communication</option>
                        <option value="Web Programming">Web Programming</option>
                        <option value="Development perspective">Development Perspective</option>
                        <option value="Principles of Management">Principles of Management</option>
                        <option value="Principles of Accounting">Principles of Accounting</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Basic Statistics">Basic Statistics</option>
                        <option value="Probability">Probability</option>
                    </select>
                </td></tr>
  
                <tr>
                    <td><label>Course Code</label></td>
                    <td>
                        <select id="ccode" name="ccode">
                            <option></option>
                            <option value="CS174">CS174</option>
                            <option value="IS171">IS171</option>
                            <option value="CS173">CS173</option>
                            <option value="IS181">IS181</option>
                            <option value="DS112">DS112</option>
                            <option value="GM100">GM100</option>
                            <option value="AC100">AC100</option>
                            <option value="MK100">MK100</option>
                            <option value="ST113">ST113</option>
                            <option value="ST114">ST114</option>
                        </select>
                    </td>
                </tr>
    
                    <tr>
                        <td><label>Brief Course description</label></td>
                        <td>
                            <input type="text" class="in"id="cdescription" name="cdescription" placeholder="Describe in not more than 50 words">
                        <br><div id="error-description" class="error"></div>
                        </td>
                    </tr>
        
                    <tr>
                        <td><label>Course Department</label></td>
                        <td>
                            <select id="department" name="department">
                                <option></option>
                                <option value="DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</option>
                                <option value="DEPARTMENT OF GENERAL MANAGEMENT">DEPARTMENT OF GENERAL MANAGEMENT</option>
                                <option value="DEPARTMENT OF DEVELOPMENT STUDIES">DEPARTMENT OF DEVELOPMENT STUDIES</option>
                                <option value="DEPARTMENT OF ACCOUNTING">DEPARTMENT OF ACCOUNTING</option>
                                <option value="DEPARTMENT OF MARKETING">DEPARTMENT OF MARKETING</option>
                                <option value="DEPARTMENT OF STATISTICS">DEPARTMENT OF STATISTICS</option>
                            </select>
                        </td>
                    </tr>                  
                    <tr>
                        <td><label>Course Semester</label></td>
                        <td>
                            <select id="semester" name="semester">
                            <option></option>
                            <option value="SEMESTER1">Semester 1</option>
                            <option value="SEMESTER2">Semester 2</option>
                            </select>
                        </td>
                    </tr>    
                    <tr>
                        <td><label>Academic year</label></td>
                        <td>
                            <select id="cyear" name="cyear">
                                <option></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                    </tr>    

                    <tr>
                        <td><label>Course Instructor</label></td>
                        <td>
                            <input type="text" class="in" id="instructor" name="instructor"> <br>
                            <span id="error-instructor" class="error"></span>
                        </td>
                    </tr>    
            
                    <tr>
                        <td><label>Course result</label></td>
                        <td>
                            <input type="text" class="in" id="result" name="result">
                            <div id="error-result" class="error"></div>
                        </td>
                                <!--Inappropiate grades are flagged-->
                    </tr>    
                      
                    <p align="center" style=" color: red;">please complete registration</p>

                 
            </table><br>
            <input type="submit"  class="mybutton" value="register"><br>
        </form><br>
        <div align="center"> <a href="coursesdata.php"><button align="center"><i class="fa fa-bank"></i><br>Show saved <br>DATA</button></a></div>
</div>

<script>
    const form = document.getElementById('myform');
    const descriptionInput = document.getElementById('cdescription');
    const instructorInput = document.getElementById('instructor');
    const gradeInput = document.getElementById('result');
    const errorResult = document.getElementById('error-result');
    const errorDescription = document.getElementById('error-description');
    const errorinstructor = document.getElementById('error-instructor');

    function isValidGrade(grade) {
        const validGrades = ['A', 'B', 'B+', 'C', 'F'];
        return validGrades.includes(grade);
    }
    
    function isValidDescription(courseDescription) {
        return courseDescription.length < 50;
    }
    
    function isValidInstructorName(instructorName) {
        return instructorName.length < 30;
    }
    
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    
        const courseDescription = descriptionInput.value.trim();
        const instructorName = instructorInput.value.trim();
    
        if (!isValidGrade(gradeInput.value)) {
            errorResult.textContent = 'Please enter a valid grade.';
        } else if (!isValidDescription(courseDescription)) {
            errorDescription.textContent = 'Description should be at most 50 characters long.';
        } else if (!isValidInstructorName(instructorName)) {
            errorResult.textContent = '';
            errorDescription.textContent = '';
            errorInstructor.textContent = 'Instructor name should not exceed 30 characters long.';
        } else {
            errorResult.textContent = '';
            errorDescription.textContent = '';
            form.submit();
        }
    });
</script>
</body>
</html>