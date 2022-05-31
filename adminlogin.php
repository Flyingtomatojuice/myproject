<?php
$phpvar="30"; 
//session_start();
$cdate = date("y-m-d");
date_default_timezone_set("Asia/Hong_Kong");
$ctime = date("h:i:s");
include "include.php";
$msg='';
if(isset($_POST['submit'])){
	$time=time()-30;
	$ip_address=getIpAddr();
	$check_login_row=mysqli_fetch_assoc(mysqli_query($con,"select count(*) as total_count from login_log where try_time>$time and ip_address='$ip_address'"));
	$total_count=$check_login_row['total_count'];
	if($total_count==3){
		//$msg="To many failed login attempts. Please login after 30 sec";
?>
		<script>
function countDown(secs,elem) {
var element = document.getElementById(elem);
$msg= element.innerHTML = "To many failed login attempts. Please login after " +secs+ " seconds";
if (secs < 1)
{
	clearTimeout(timer);

	element.innerHTML = '<a style=color"black" href="index.php">Refresh</a>';
}
secs--;
var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
}


		<?php
	}else{
		$username=mysqli_real_escape_string($con,$_POST['username']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		$sql="select * from tbl_login where username='$username' and  password='$password'";
		$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res)){
		    session_start();
			$_SESSION['IS_LOGIN']='yes';
			$_SESSION['last_login_timestamp'] = time();
			mysqli_query($con,"delete from login_log where ip_address='$ip_address'");
			
			?>
			<script>
				window.location.href='notification1.php';
			</script>
			<?php
		}else{
			$total_count++;
			$rem_attm=3-$total_count;
			if($rem_attm==0){
				?>
		<script>
function countDown(secs,elem) {
var element = document.getElementById(elem);
$msg=element.innerHTML = "To many failed login attempts. Please login after " +secs+ " seconds";
if (secs < 1)
{
	clearTimeout(timer);

	element.innerHTML = '<a style="color:black" href="index.php">Refresh</a>';
}
secs--;
var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
}
</script>



		<?php
			}else{
				$msg="Please enter valid login details.<br/>$rem_attm attempts remaining";
			}
			$try_time=time();
			mysqli_query($con,"insert into login_log(ip_address,try_time) values('$ip_address','$try_time')");
			
		}
	}
}

function getIpAddr(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
       $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
       $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
       $ipAddr=$_SERVER['REMOTE_ADDR'];
    }
   return $ipAddr;
}
?>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" a href="css\loginstyle.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">	
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>
		body {
			background-image: url("assets/images/servicesbg.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
		.container {
			height: 480px;
		}
		.btn-custom{
			width: 300px;
		}
		.form-custom{
			height: 81px;
		}
		.green-custom{
			color:  #29cc6d;
		}
	</style>
	<script type="text/javascript">
		function preventBack(){window.history.forward()};
		setTimeout("preventBack()",0);
		window.onunload=function(){null}
	</script>
</head>
<body>
	<div class="mx-3">
		<form method=POST action="" class="col-md-5 justify-content-center align-items-center mx-auto">	   
			<div class="container rounded shadow-lg">
			<img src="assets/images/profile.png"/>
			<h2 class="green-custom">Visvis Logistics Admin Dashboard</h2>
				<form class="mx-3">
					<!--Invalid Input Message-->
					<div class="text-warning my-3">
						<div id="result"><?php echo $msg?></div>
						<div id="result"style="font-size:15px;"></div>
						<script>countDown(<?php echo $phpvar; ?>,"result");</script>
					</div>

					<!--Username-->
					<div class="input-group mt-3 mb-2">
						<span class="input-group-text form" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
						<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
						<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg></span>
						<input class="form-control mx-auto my-0" type="text" name="username" placeholder="Username"/>
					</div>

					<!--Password-->
					<div class="input-group my-5">
						<span class="input-group-text form" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
						<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
						</svg></span>
						<input class="form-control mx-auto my-0" type="password" name="password" placeholder="Password"/>
					</div>

					<!--Submit Button-->
					<input type="submit" name="submit" value="LOGIN" class="btn-login col-12 rounded "/>
				</form>
			</div>
			<br>			
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>