<?php
    session_start();
    $user= $_SESSION['user'];
    include "connection.php";
   // include "nav.php";
    $conn = connect();
    $sql="SELECT * FROM attendance480";
    $res= $conn->query($sql);
?>

<html>
    <head>
        <title>Attendance Report</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        
        <link type="text/css" rel="stylesheet" href="css/style.css"> 
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
<body>
    <!-- ------------------------------------- -->
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
        <div class="container-fluid" >
        <a class="navbar-brand pull-right" href="logout.php">Logout</a>
        <a class="navbar-brand" href="viewreport.php">Back</a>
        <a class="navbar-brand pull-left" href="#">Logged in as <b class="user"><?php echo $user; ?></b>
        <!-- <button class="btn btn-primary navbar-btn float: left">Logout</button></a> -->
       
        </div>
        </nav>
    <!-- ------------------------------------- -->
        <div class="row">
            <div class="content">
            </div>
            <center>
            <div class="table_container" border="1">
            <table border = "1" class="table table-striped">
                <tr>
                    <th>Date</th>
                    <th>Show Attendance</th>
                </tr>
                    <tr>
                        <form action="show_attendance480.php" method="POST">
                                    
                            <td><input type="date" name="sdate">Start date
                            <input type="date" name="edate">End date</td>
                              
                           <td><button type='submit'  class='btn btn-primary'>Show Attendance</td>
                             
                        </form> 
                    </tr>      
                </table>         
            </div> 
        </div>
    </center>

</body>
</html>