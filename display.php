<?php
include "dashboard.php";
include "include.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    
	<!-- Font awesone buttons CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Data Table CDN -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.0/datatables.min.css"/>
 	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.0/datatables.min.js"></script>
	 
<!-- responsive links datatables -->
	 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css">
	 <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>
 
 <style>

	.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: #ffbb00;
	
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #38b988;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
	background: #38b988;

}
.click{
 font-size:30px;
 color: #1aa7ec; 
 margin-right: -3em;
 
 
}

.click2{
 font-size:30px;
 color:#ff6666;
 margin-right: -3em;

 

}
	
 </style>


  </head>

<!-- responsive table design with fetching of data, compared to the obsolete code last time -->
  <body>

  <center><h1>DISPLAY</h1></center>
  <div class="col-xl-50 col-lg-12">
  <div class="card shadow mb-4">
		<div class="card-body">

 
 <table  id="table" class="display table-striped table-bordered ">
	<thead  style="background-color:#38b988; color:white;">
		<tr>
		<th style="text-align:center">NAME</th>
		<th style="text-align:center">IMAGE</th>
		<th style="text-align:center">TYPE</th>	
		<th style="text-align:center">ACTION</th>

		</tr>
	
	</thead>

	<tbody>
		<?php
		
		$result = mysqli_query($con, "SELECT * FROM images");

		while ($row = mysqli_fetch_assoc($result)):
		
		?>

		<tr>
			<td style="text-align:center"><?php echo $row['imgName'];?></td>
		    <?php echo'<td style="text-align:center"><img src="data:image;base64,'.base64_encode($row['imgData']).'"alt="Image" style="width:100px; height:100px;">'; ?>
			<td style="text-align:center"><?php echo $row['imgType'];?></td>
			<?php  echo"<td> 
			
		
			<a href=update.php?primary=".$row['id']." class='click'><center><i class='fa fa-pencil'></i></center></a> 
			<br>
	  		<a href=delete.php?primary=".$row['id']." class='click2'><center><i class='fa fa-trash-o'></i></center></a> " ; ?>
  
	
  
 
</td>
            



		</tr>
			<?php endwhile;?>

	</tbody>

	</table>
		</div>
  </div>
  </div>

			
	<!-- responsive links datatables -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>


	<script>
	$(document).ready(function () {

    $('#table').DataTable({
        scrollY: '400px',
        scrollCollapse: true,
		responsive: true,
		"ordering": false,
		"lengthMenu": [ [5, 10, 20, 50, 100, -1], [ 5, 10, 20, 50, 100, "All"] ],
		"pageLength": 9000,
		
		

		
       
    });
});

	</script>
 
  </body>
</html>