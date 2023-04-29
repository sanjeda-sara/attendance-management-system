<?php 
    function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "attendance_management";
  
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
        
        if ($conn->connect_error) {         
        die("Connection failed: " . $conn->connect_error);              
        }
        return $conn;
    }
    function closeConnect($conn){
        $conn->close();
    }
?>