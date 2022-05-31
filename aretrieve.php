<?php
// (A) CONNECT TO DATABASE
require "include2.php";

// (B) GET IMAGE FROM DATABASE
$name = "potato.jpg";
$stmt = $con->prepare("SELECT imgData FROM images WHERE imgName=?");
$stmt->execute([$name]);
$img = $stmt->fetch();
$img = $img["imgData"];

// (C) OUTPUT IMAGE
$ext = pathinfo($name, PATHINFO_EXTENSION);
if ($ext=="jpg") { $ext = "jpeg"; }
header("Content-type: image/" . $ext);
echo $img;
