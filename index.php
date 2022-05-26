<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>PK STORE</title>
</head>
<body>

	<div class = "Wrapper">
		<?php
			session_start();
			include("ADMINcp/Config/config.php");
			include("Pages/header.php");
			include("Pages/menu.php");	
			include("Pages/main.php");	
			include("Pages/footer.php");	
		?>		

	</div>
</body>
</html>
