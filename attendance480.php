<?php
    include "connection.php";
    $conn = connect();
    $sql= "SELECT * from studentinfo";
    $result= $conn->query($sql);
    $flag = 0;
    if(isset($_POST['submit'])){
        foreach($_POST['attendance_status'] as $att=>$attendance_status){
            $id = $_POST['id'][$att];
            $name = $_POST['name'][$att];
            $date = date ("Y-m-d");

            
        $sql = "INSERT INTO attendance480(id, name, attendance_status, date)
                VALUES ('$id', '$name', '$attendance_status', '$date')";


                if ($conn->query($sql) === TRUE) {
                    $flag=1;
                       // echo "New record created successfully";
                        header('Location: course.php ');                               
                }
                //else {
                      //  echo "Error creating Table: " . $conn->error;
                        //}
        }
    }
?>





<html>
    <head>
        <title>Attendance Management System</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        
        <link type="text/css" rel="stylesheet" href="css/style.css">  
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
<body>
 
        <div class="row">
            <div class="content">
                <center>
                    <h3>Attendance of <?php echo date('Y-m-d'); ?></h3><br>
                </center>
            </div>
            <center>

            <center>
                    <label>Course Code: CSE480</label><br>
                    <label>Course Instructor: Abdus Satter [ABST]</label><br><br>
            </center>
            <?php if($flag){ ?>
            <div class="alert alert-success">
                Daily Attendance Submitted Successfullyr>
            </div>
            <?php } ?>

            <form action="" method="POST">    
                
            </center>
            
            
            
            <center>
            <div class="table_container">

            <table border = "1" class="table table-striped">
                <tr>
                    <th width="10%">Student ID</th>
                    <th width="10%">Student Name</th>
                    <th width="5%">Department</th>
                    <th width="5%">Semester</th>
                    <th width="5%">Email</th>
                    <th width="5%">Username</th>
                    <th width="5%">Password</th>
                    <th width="10%">Attendance</th>
                </tr>


                <?php
                    // if(mysqli_num_rows($result)>0){
                        // $i = 0;
                        $serialnumber = 0;
                        $counter = 0;
                        while($row= mysqli_fetch_assoc($result)){
                            $serialnumber++;
                ?>
                
                    <tr>
                        <!-- <td><?php echo $serialnumber;?></td> -->
                        <td><?php echo $row['id'];?></td>  
                        <input type="hidden" value="<?php echo $row['id']; ?>" name = "id[]">   

                        <td><?php echo $row['name'];?></td>     
                        <input type="hidden" value="<?php echo $row['name']; ?>" name = "name[]"> 

                        <td><?php echo $row['department'];?></td> 
                        <input type="hidden" value="<?php echo $row['department']; ?>" name = "department[]">   

                        <td><?php echo $row['semester'];?></td>   
                        <input type="hidden" value="<?php echo $row['id']; ?>" name = "semester[]">
                        
                        <td><?php echo $row['email'];?></td> 
                        <input type="hidden" value="<?php echo $row['id']; ?>" name = "email[]">  

                        <td><?php echo $row['username'];?></td>     
                        <input type="hidden" value="<?php echo $row['id']; ?>" name = "username[]">  
                        <td><?php echo $row['password'];?></td> 
                        <input type="hidden" value="<?php echo $row['id']; ?>" name = "password[]">
                        <td>
                            <label>Present</label>
                            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Present">
                            <label>Absent</label>
                            <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent">  
                        </td>
                    </tr>
                        <?php
                        $counter++;
                        }
                        ?>

                </table> 
                <input type="submit" name="submit" value="Save" class="btn btn-primary"> 
                
        </div> 
        </form>
    </div>
    </center>
    
</body>
</html>