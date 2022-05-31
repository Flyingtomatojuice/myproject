<?php
include "include.php";
    $email = $_POST['email'];
    $query = "INSERT INTO subscription (EMAIL) VALUES ('$email')";
    $result = $con->query($query);
    header("Location: index.html");
    
?>