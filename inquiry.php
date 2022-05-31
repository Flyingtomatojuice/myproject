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
    <title>INQUIRY</title>

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
	
 </style>

  </head>

  <body>
  <center><h1>INQUIRY</h1></center>
  <div class="col-xl-50 col-lg-12">
  <div class="card shadow mb-4">
		<div class="card-body">

 
 <table id="table" class="display table-striped table-bordered">
	<thead  style="background-color:#38b988; color:white;">
		<tr>
		<th style="text-align:center">NAME</th>
		<th style="text-align:center">NUMBER</th>
		<th style="text-align:center">EMAIL</th>	
		<th style="text-align:center">TYPE</th>
		<th style="text-align:center">MESSAGE</th>
		</tr>
	
	</thead>

	<tbody>
		<?php
		
		$result = mysqli_query($con, "SELECT * FROM inquiry");

		while ($row = mysqli_fetch_assoc($result)):
		
		?>

		<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['number'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['type'];?></td>
			<td><?php echo $row['message'];?></td>

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
        scrollY: '200px',
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