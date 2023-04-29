<?php
 
 include ('connection.php');
 $conn=connect();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT * from studentinfo where p_id=$id limit 1";
        $result=mysqli_fetch_assoc($conn->query($sql));

    }
    elseif(isset($_POST['id'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['pwd'];
    }

    if(isset($_POST['save'])){
        $sql="UPDATE  studentinfo SET name=' $name', email='$email', password='$password' WHERE p_id='$id'";
        if($conn->query($sql)===true){
            header('Location:student.php');
    }

}

?>

<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css">    
        <link type="text/css" rel="stylesheet" href="css/editform.css">    
    </head>
    <body>
        <div class="center">
        <form action='edit.php' method="POST" class="form">
        <h2>Edit Student Info!</h2>
        <div class="inputs">
        <input type="hidden" name="id" value="<?php echo $result['p_id']; ?>">

        <label for="name">Full Name: </label>
        <input type="text" name="name" id="name" value="<?php echo $result['name']; ?>" required> <br> <br>

        <label for="em">Student's Email: </label>
        <input type="email" name="email" id="email" value="<?php echo $result['email']; ?>" required> <br> <br>

        <label for="pwd">Change Password: </label>
        <input type="password" name="pwd" id="pwd" value="<?php echo $result['password']; ?>" required> <br> <br>

        <button type="submit" name="save" class="btnnn mt-3 mb-5">Save</button> <br> <br>
        <a href="student.php"> Go Back </a>
        </div>
    </form>
    </div>
    </body>
</html>