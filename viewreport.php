<?php
    session_start();
    $user= $_SESSION['user'];
    //$userid= $_SESSION['userid'];

    include ('connection.php');
        $conn=connect();

        $sql= "SELECT * from studentinfo";
        $student= $conn->query($sql);
?>

<html>
 
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=10" >

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link type="text/css" rel="stylesheet" href="css/style.css"> 
    </head>
 

    <body>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="container-fluid" >
        <a class="navbar-brand pull-right" href="logout.php">Logout</a>
        <a class="navbar-brand pull-left" href="#">Logged in as <b class="user"><?php echo $user; ?></b>
        <!-- <button class="btn btn-primary navbar-btn float: left">Logout</button></a> -->
       
        </div>
        </nav>
        <br><br>
<!-- --------------------------------------------------------------------------------------------------------- -->

        <div class="table_container">
            <h2 style="text-align: center;">Enrolled Students Details</h2>

            <table class="table table-striped">
                <tr>
                    <th width="40%">Student ID</th>
                    <th width="40%">Student Name</th>
                    <th width="40%">Department</th>
                    <th width="40%">Semester</th>
                    <th width="40%">Email</th>
                </tr><br>
            
                <?php
                            if(mysqli_num_rows($student)>0){
                                while($row= mysqli_fetch_assoc($student)){
                                   
                                    echo "<tr>";
                                    echo "<td>".$row['id']."</td>";

                                    echo "<td>".$row['name']."</td>";

                                    echo "<td>".$row['department']."</td>";

                                    echo "<td>".$row['semester']."</td>";

                                    echo "<td>".$row['email']."</td>";

                                    echo "</tr>";
                                 
                                }
                            }

                        ?>
                </table>
        </div>

        <center>
        <a class="btn btn-primary" href="viewreport464.php" role="button">View Attendance Report for CSE464</a>
        <a class="btn btn-primary" href="viewreport480.php" role="button">View Attendance Report for CSE480</a> 
        </center>
    </body>



</html>