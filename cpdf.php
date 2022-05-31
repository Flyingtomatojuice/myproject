<?php
require('vendor/autoload.php');
include "include.php";

$res=mysqli_query($con,"SELECT * FROM images");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
		$html.='<tr><th>ID</td><td>NAME</td><td>CATEGORY</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['id'].'</td><td>'.$row['imgName'].'</td><td>'.$row['imgType'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>