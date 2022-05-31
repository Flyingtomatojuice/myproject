<?php
include "dashboard.php";
?>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Image To Database</title>

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
        .upload-bg{
            background-image: url('./assets/images/services-bg.jpg');
            background-size: cover;
        }
        .upload-border{
            border-style: solid;
            border-width: 5px;
            opacity: 0.88;
            transition: 1s;
        }

        .upload-border:hover{
            opacity: 1;
            border-image: linear-gradient(45deg, rgb(0,143,104), rgb(250,224,66)) 1;
        }
    </style>

</head>

<body class="upload-bg">
      <center><h1>UPLOAD</h1></center>

<div class="vertical-center card-body" style="padding-top:0; margin-top:0">
<!--Form Container-->
<div id="content-wrapper" class="container col-md-6 align-items-center justify-content-center bg-light p-3 shadow-lg upload-border">
		
    <!--Form Content-->
        <form id="upload_form" method="post" enctype="multipart/form-data">
            <!--center><label for="choose_file" class="btn btn-secondary btn-lg">
                Choose File
            </label></center-->
                    <input type="file" name="image" id="choose_file" accept=".png,.gif,.jpg,.webp" class="form-control" required><br>
                    <input type="text" name="name" placeholder="Image Name" class="form-control"><br>
                    <select name="type" class="form-control"><br>
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
                    </select><br><br>
                    <div class="container"><div class="row">
                    <div class="col-lg-6 text-right bg-light rounded" style="text-align:left; position:relative;">
                        <button type="button" value=Cancel class="btn btn-secondary btn-lg" style="width:100%" onclick="resetFunction()">Cancel</button></div>
                    <div class="col-lg-6 text-right bg-light rounded" style="text-align:right; position:relative;">
                        <input type="submit" name="upload" value="Upload Image" class="btn btn-success btn-lg" style="width:100%"/></div>
                    </div></div></div>
                </form>
		<!--Form Content End-->
</div>
<!--Form Container End-->

</div>
</body>
</html>
    <?php
	include "include2.php";
    if (isset($_POST['upload'])) 
	{
		$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$type = $_POST['type'];
		$name = $_POST ['name'];
		
		$sql = "INSERT INTO images (imgData, imgName, imgType) VALUES ('$file','$name','$type')";
		$result = $con->query($sql);
		if($result == TRUE)
		{
		?>
		<script>
		alert("Upload Success!");
		</script>
		<?php
		}
	}
    ?>
    
    <script>
        function resetFunction() {
          document.getElementById("upload_form").reset();
        }
    </script>