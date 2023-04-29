<?php
include "connection.php";
include "nav.php";
$conn = connect();

?>

<html>
    <head>
        <title>Courses</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link type="text/css" rel="stylesheet" href="css/style.css">  
        
        <link type="text/css" rel="stylesheet" href="css/adminpage.css">
    </head>
    <body>
    
        <br><br>
        
        <div class="choose">
            <label>Choose Course</label>
            <a href='attendance464.php'><button class="btn btn-primary">CSE464</button></a>
            <a href='attendance480.php'><button class="btn btn-primary">CSE480</button></a>
        </div>
        
    </body>
</html>