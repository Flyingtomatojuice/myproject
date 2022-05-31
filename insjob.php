<?php
include "include.php";

 if (isset($_POST['submit']))
 {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $number = $_POST['mobile'];
     $message = $_POST['msg'];
     date_default_timezone_set("Asia/Manila");
     $cdate = date("y-m-d h:i:s");
     
     $sql = "INSERT INTO jobcontact (name, email, number, message, status , date) VALUES ('$name','$email','$number','$message' ,'unread', '$cdate')";
		$result = $con->query($sql);
		if($result == TRUE)
		{
		?>
		<script>
		alert("Success!");
		window.location.replace("job.php");
		</script>
		<?php
		}
     
 }
 
?>