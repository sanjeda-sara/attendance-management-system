<?php
session_start();
$_SESSION["user"]="";
// $_SESSION['userid']='';
include "connection.php";
$conn= connect();

if(isset($_POST['login'])){
    
    $uname=$_POST['uname'];
    $password=$_POST['pwd'];
    
    $sql= "SELECT * from admininfo WHERE username='$uname'AND password='$password' limit 1";
 
    
    $result = $conn->query ($sql);
    
    if(mysqli_num_rows($result)==1){
        $user = mysqli_fetch_assoc ($result);
        $_SESSION['user']=$user['username'];
        // $_SESSION['userid']=$user['id'];
        // echo "You Have Successfully Logged in";
        header('Location: student.php ');
                    

    }
    else{
        echo "Credentials Incorrect";
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css">  
    <link type="text/css" rel="stylesheet" href="css/form.css">  
    <title>Login Admin</title>
</head>
<body>
    <div class="center">
    <div class="form" name="form">
    <form method="POST">
    <h2>ADMIN LOGIN</h2>
    <h3>Sign in to your Account!</h3><br>
        <div class="inputs">
        <label for="uname"> Username: </label>
        <input type="text" name="uname" id="uname" placeholder="Enter username"> <br> <br>

        <label for="pwd">Password: </label>
        <input type="password" name="pwd" id="pwd" placeholder="Enter your Password"> <br> <br>

        <button type="submit" name="login" class="btnnn mt-3 mb-5">Login</button> <br> <br>
        </div>
    </form>
    </div>
    <br>
    
<div class="part3">
<p>Not Admin?</p>
<a href="login_student.php"> Student Login! </a>
<br>
</div>      
</div>
</body>
</html>