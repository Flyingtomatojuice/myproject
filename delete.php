<?php
include "include.php";
$id=$_GET['primary'];

$sql = "DELETE FROM images WHERE ID = '$id'";
$result=$con->query($sql);
if($result==true)
{
	?>
	<script>
	alert("Sucessfully Deleted!");
	window.location.replace("display.php");
	</script>
	<?php

}

else
{
	echo"ERROR!";
}
?>