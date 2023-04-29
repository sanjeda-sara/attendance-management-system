<?php
        //session_start();
        //include ('nav.php');
        include ('connection.php');
        $conn=connect();
        $message1 = '';

    if(isset($_POST['add'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $department = $_POST['dept'];
        $semester = $_POST['sem'];
        $email = $_POST['email'];
        $username = $_POST['uname'];
        $password = $_POST['pwd'];
                
                $sql= "INSERT INTO studentinfo(id, name, department, semester, email, username, password) VALUES('$_POST[id]', '$_POST[name]', '$_POST[dept]', '$_POST[sem]', '$_POST[email]', '$_POST[uname]', '$_POST[pwd]')";
                if($conn->query($sql)===true){
                    header('Location: student.php');
                    echo"New Student Added Successfully!";
                }
                else{
                    $message1='Connection not established!';
                }
    }
?>

<html>
<head>
    <title>Add Student</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">  
    <link type="text/css" rel="stylesheet" href="css/addform.css">  
</head>
<body>
    <div class="center">
    <div class="form" name="form">
    <center>
    <form method="POST" class="formt">
        <h2>Add a new Student!</h2>

        <label for="id">Student ID: </label>
        <input type="text" name="id" id="id" placeholder="Enter Student ID" required> <br> <br>

        <label for="name">Full Name: </label>
        <input type="text" name="name" id="name" placeholder="Enter Student's Full Name" required> <br> <br>

        <label for="dept">Department: </label>
        <input type="text" name="dept" id="dept" placeholder="Enter Department" required> <br> <br>

        <label for="dept">Semester: </label>
        <input type="text" name="sem" id="sem" placeholder="Enter Current Semester" required> <br> <br>

        <label for="email">Student's Email: </label>
        <input type="email" name="email" id="email" placeholder="Enter Student's Email" required> <br> <br>

        <label for="uname">Create Username: </label>
        <input type="text" name="uname" id="uname" placeholder="Give Username" required> <br> <br>

        <label for="pwd">Create Password: </label>
        <input type="password" name="pwd" id="pwd" placeholder="Give a Password" required> <br> <br>

        <button type="submit" name="add" class="btnnn mt-3 mb-5">ADD STUDENT</button> <br> <br>
        <a href="student.php"> Go Back </a>
    </form>
</div>
    </center>
</div>
</body>
</html>