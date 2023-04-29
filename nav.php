<?php
    session_start();
    $user= $_SESSION['user'];
    //$userid= $_SESSION['userid'];
?>

<html>
 
    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css">  
    </head>
 

    <body>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="container-fluid" >
        <a class="navbar-brand" href="addstudent.php">Add Student</a>
        <a class="navbar-brand" href="course.php">Attendance</a>
        <!-- <a class="navbar-brand" href="student.php">Students</a> -->
        <a class="navbar-brand" href="viewreport.php">Report</a>
        <a class="navbar-brand" href="logout.php">Logout</a>
        <a class="navbar-brand" href="#">Logged in as <b class="user"><?php echo $user; ?></b>
        <!-- <button class="btn btn-primary navbar-btn float: left">Logout</button></a> -->
       
        </div>
        </nav>
    </body>



</html>