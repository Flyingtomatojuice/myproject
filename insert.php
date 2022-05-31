<?php
include "include.php";
    
    $type = $_POST['options'];
    $name = $_POST['username'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    date_default_timezone_set("Asia/Manila");
    $cdate = date("y-m-d h:i:s");
   

    $query = "INSERT INTO inquiry (type, name, number, email, message, status, date) VALUES ('$type', '$name','$number','$email','$message','unread','$cdate')";
    $result = $con->query($query);
    if($result == TRUE)
		{
		?>
		<script>
		alert("Success!");
		window.location.replace("index.html");
		</script>
		<?php
		}
  
    
?>