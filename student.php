<?php
    //session_start();
    include ('nav.php');
    include ('connection.php');
    $conn=connect();
    $message = '';
     $id= $_SESSION['user'];

     $sq= "SELECT * FROM admininfo";
     $thisUser= mysqli_fetch_assoc($conn->query($sq));

    if(isset($_POST['Add'])){
        $id= $_POST['id'];
        $name= $_POST['name'];
        $dept= $_POST['dept'];
        $sem= $_POST['sem'];
        $uname= $_POST['uname'];
        $pwd= $_POST['pwd'];

            $sql= "INSERT INTO studentinfo (id, name, department, semester, email, username, password) VALUES ('$_POST[id]', '$_POST[name]', '$_POST[dept]', '$_POST[sem]', '$_POST[uname]', '$_POST[pwd]')";
            if($conn->query($sql)===true){
                $message= "New Student Added Successfully!";
            }
        

    }

    $sql= "SELECT * from studentinfo";
    $result= $conn->query($sql);


?>

<html>

<head>
    <title>Student Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=10" >

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link type="text/css" rel="stylesheet" href="css/student.css"> 
        <link type="text/css" rel="stylesheet" href="css/style.css"> 
</head>
    <body>
        
           </div>
            <div class="table_container">
                <br>
            <h2 style="text-align: center;">All Student Info</h2>

            <table class="table table-striped">
                <tr>
                    <th width="15%">Student ID</th>
                    <th width="15%">Student Name</th>
                    <th width="10%">Department</th>
                    <th width="5%">Semester</th>
                    <th width="5%">Email</th>
                    <th width="10%">Username</th>
                    <th width="10%">Password</th>
                    <th width="20%">Action</th>
                </tr>
            
                <?php
                    if(mysqli_num_rows($result)>0){
                        while($row= mysqli_fetch_assoc($result)){
                                   
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";

                            echo "<td>".$row['name']."</td>";

                            echo "<td>".$row['department']."</td>";

                            echo "<td>".$row['semester']."</td>";

                            echo "<td>".$row['email']."</td>";

                            echo "<td>".$row['username']."</td>";

                            if($thisUser['is_admin']==1){
                            echo "<td>".$row['password']."</td>";
                            }
                            else{
                                echo "<td>"."x"."</td>";
                            }

                            
                            echo "<td><a href='edit.php?id=".$row['p_id']."' class='btn btn-primary'>Edit";
                            
                            if($thisUser['is_admin']==1){
                                echo "<a href='delete.php?id=".$row['p_id']."' class='btn btn-danger'>Delete</td>";
                            }
                            

                            }
                            } else{
                                echo "No results found!";
                                    }

                            echo "</tr>";
      
                        ?>
                </table>
        </div>
    </body>
</html>


















