
<html>
    <head>
         <link rel="stylesheet" href="gallery.css">
    </head>
<body>
<form method="post" action="upload.php" enctype="multipart/form-data">

		<?php
		if (isset($_GET['error'])) {
			echo "<p class='error'>";
			echo htmlspecialchars($_GET['error']);
			echo "</p>";
		}
		?>
		<br>
		<br>
		<br>
		<input type="file" name="images[]" multiple>

		<button type="submit" name="upload">
			Upload</button>
	</form>



</body>
</html>