<?php
include 'connection.php';
$conn= connect();
        
        // $sql = "CREATE DATABASE attendance_management";
        // if ($conn->query($sql) === TRUE) {
        // echo "Database created successfully";
        // }
        //else{
        // echo "Error creating database: " . $conn->error;
        // }

//  ----------------------------------------------------------------------------------------------

        // creating table admininfo
        // $sql = "CREATE TABLE admininfo(
        // username varchar(15),
        // password varchar(50)
        // )";

        // if ($conn->query($sql) === TRUE) {
        //     echo "Table created successfully";
        //   } else {
        //     echo "Error creating Table: " . $conn->error;
        //   }

//  ----------------------------------------------------------------------------------------------

//        $sql = "INSERT INTO admininfo (username, password) 
//                VALUES ('admin', 'admin')";

//         if ($conn->query($sql) === TRUE) {
//             echo "New record created successfully";
//             }
//         else {
//             echo "Error creating Table: " . $conn->error;
//             }

//  ----------------------------------------------------------------------------------------------
// ================================ End of Table admininfo Work!!! ==================================


        // $sql = "CREATE TABLE studentinfo
        // (
        // id varchar(15),
        // name varchar(50),
        // department varchar(50),
        // semester int(2),
        // email varchar(50),
        // username varchar(50),
        // password varchar(50)
        // )";



        // if ($conn->query($sql) === TRUE) {
        //             echo "New record created successfully";
        //             }
        //         else {
        //             echo "Error creating Table: " . $conn->error;
        //             }

//  ----------------------------------------------------------------------------------------------


// $sql = "INSERT INTO studentinfo (id, name, department, semester, email, username, password)
//         VALUES ('2018-1-60-001','Hermione Granger','CSE', '12', 'hermione@gmail.com', 'hermione', '1234')";


// $sql = "INSERT INTO studentinfo (id, name, department, semester, email, username, password)
//         VALUES ('2018-1-60-002','Harry Potter','CSE', '12', 'harrypotter@gmail.com', 'harry', '1234')";


// $sql = "INSERT INTO studentinfo (id, name, department, semester, email, username, password)
//         VALUES ('2018-1-60-003','Draco Malfoy','CSE', '12', 'dracomalfoy@gmail.com', 'malfoy', '1234')";


// $sql = "INSERT INTO studentinfo(id, name, department, semester, email, username, password)
//         VALUES ('2018-1-60-004','Ron Weasley','CSE', '12', 'ron_w@gmail.com', 'ron', '1234')";


// $sql = "INSERT INTO studentinfo(id, name, department, semester, email, username, password)
//         VALUES ('2018-1-60-005','Ginny Weasley','CSE', '12', 'ginny@gmail.com', 'ginny', '1234')";


        // if ($conn->query($sql) === TRUE) {
        //         echo "New record created successfully";
        // }
        // else {
        //         echo "Error creating Table: " . $conn->error;
        //         }


// ================================ End of Table studentdetails Work!!! ==================================




// $sql = "CREATE TABLE attendance480
//         (
//         id varchar(15),
//         name varchar(50),
//         attendance_status varchar (50),
//         date datetime
//         )";

//         if ($conn->query($sql) === TRUE) {
//                     echo "New record created successfully";
//                     }
//                 else {
//                     echo "Error creating Table: " . $conn->error;
//                     }




// ================================ End of Table attendance480 Work!!! ==================================



// $sql = "CREATE TABLE attendance464
//         (
//         id varchar(15),
//         name varchar(50),
//         attendance_status varchar (50),
//         date datetime
//         )";

//         if ($conn->query($sql) === TRUE) {
//                     echo "New record created successfully";
//                     }
//                 else {
//                     echo "Error creating Table: " . $conn->error;
//                     }




// ================================ End of Table attendance464 Work!!! ==================================


        $conn->close();
?>