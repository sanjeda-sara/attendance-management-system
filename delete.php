<?php
include 'connection.php';
$conn= connect();

    $id= $_GET['id'];
    $sql= "DELETE FROM studentinfo WHERE p_id='$id' limit 1";
    $conn->query($sql);
    header('Location: student.php');

?>