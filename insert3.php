<?php
include "include.php";

    $message = $_POST['message'];

    $query = "INSERT INTO qmessage (MESSAGE) VALUES ('$message')";
    $result = $con->query($query);
    header("Location: index.html");
    
?>