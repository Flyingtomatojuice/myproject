<?php
$servername="localhost";
$username="id18700440_vlogistics";
$password= "QVWrJ0g*Q1??CtSJ";
$dbase= "id18700440_vislogistics";

$con= new mysqli($servername,$username,$password,$dbase);
if($con->connect_error)
{
	echo("<h2>Connection Error</h2>" .$con->connect_error);
}
?>