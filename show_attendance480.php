<?php
    include "connection.php";
    $conn = connect();

    if($_POST){

    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    
    $sql="SELECT * FROM attendance480 WHERE date >= '$sdate'  AND date<='$edate'";
    $result= $conn->query($sql);
    }
?>

<html>
    <head>
        <title>Attendance Report</title>
        <meta charset="UTF-8">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link type="text/css" rel="stylesheet" href="css/style.css">  

    </head>
<body>
        <center><h3>Show Attendance</h3></center>
      
            <div class="table_container" border="1">
            <table border = "1" class="table table-striped">
                <tr>
                    <th>Serial</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Date</th>
                    <th>Show Attendance</th>
                </tr>
                <?php
                while ($row= $result->fetch_assoc()) {
                  echo "<tr>";
    
                        echo "<td>".$row['serial_key']."</td>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td>".$row['attendance_status']."</td>";

                
                   echo "</tr>";
                }
                ?>
                
                
                   
                </table>         
                
        </div> 
        <center><a class="navbar-brand" href="viewreport480.php">Go Back</a></center>
    
</body>
</html>