<?php
include "include.php";

$id=$_GET['primary'];

$sql = "SELECT * FROM images WHERE id = $id ";

$result = $con->query($sql);

	if($result->num_rows>0)
	{
		$row = mysqli_fetch_array($result);
		
		$id = $row['id'];
		$name = $row['imgName'];
		$type = $row['imgType'];	
	
	}
	
?>

<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Display</title>

    <link rel="icon" href="images/update_icon.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .vertical-center{
           margin-top: 20vh;
           
        }
        .update-bg{
            background-image: url('./assets/images/services-bg.jpg');
            background-size: cover;
        }
        .update-form-bg{
            background-image: url('./assets/images/home5.png');
            background-size: cover;
        }
        .update-border{
            
            border-style: solid;
            border-width: 5px;
            opacity: 0.88;
            transition: 1s;
        }

        .update-border:hover{
            opacity: 1;
            border-image: linear-gradient(45deg, rgb(0,143,104), rgb(250,224,66)) 1;
        }
    </style>

</head>

<body class="update-bg">
<div class="vertical-center">
<!--Form Container-->
<div id="content-wrapper" class="container col-md-6 align-items-center justify-content-center bg-light p-3 shadow-lg update-border">
		
    <!--Form Content-->
        <form class="mb-0" method=POST action="">

        <h2 class="fw-bolder text-success">UPDATE</h2>
        <hr class="bg-success">

        <b>ID:</b>
        <input type=text name=id class="form-control" readonly value=<?php echo $id; ?> >
        <br>

        <b>Image Name:</b>
        <input type=text name=name class="form-control" value=<?php echo $name; ?> >
        <br>

        <b>Type:</b>
        <select name=type class="form-control"> 
        <option value=<?php echo $type; ?>><?php echo $type; ?>
        <option value="Company Tours">Company Tours</option>
                    <option value="Wedding & Other Occasions">Wedding and Other Ocasions</option>
                    <option value="Seminars">Seminars</option>
                    <option value="Team Building">Team Building</option>
                    <option value="Catering Services">Catering Services</option>
                    <option value="Family Gathering">Family Gathering</option>
                    <option value="Lipat Bahay">Lipat Bahay</option>
                    <option value="Deliver & Pickup">Deliver & Pickup</option>
                    <option value="Company Outing">Company Outing</option>
                    <option value="Others">Others</option>
        </select>
        <br>

        <div class="text-right bg-light rounded">
			<button type="button" value=Cancel class="btn btn-secondary btn-lg" onclick="history.back()">Cancel</button>
			<input type=submit name=submit value=Update class="btn btn-success btn-lg">
        </div>
        </form>
		<!--Form Content End-->
</div>
<!--Form Container End-->

</div>
</body>
</html>

<?php
include "include.php";

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	
	
	$sql = "UPDATE images SET imgName = '$name',  imgType ='$type' WHERE ID = '$id' ";
	$result =$con->query($sql);
	if($result == TRUE)
	{
	?>
        <script>
	alert("Sucessfully Updated");
	window.location.replace("display.php");
	</script>
	<?php
	}
	
}
?>